<?php

namespace App\Http\Controllers;

use App\Notifications\SimpleMail;
use App\Order;
use App\Product;
use App\Store;
use App\User;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Exception as GlobalException;
use Illuminate\Support\Facades\Mail;

class IptvController extends Controller
{

    private $apiContext;
    private $clientId = 'AYxYt3joHLZXzfYlkTvnSeEmLGA-aQDWz4E-wCLN7GgFMj7jKNgxXteTtI4Bb4ayEspohYuWufPHz8uI';
    private $secret = 'ECMjLzYAAkipnAfu7Nx2kXO5PTQ1GEIaEY24Oatl0FU-AAJ8pcHwmPlFFd6yRC_W-sp5ueKMeHCCmvag';
    private $paypal = [];
    /*
    private $paypal =  array(
        
    
        // "2"=> array(
            // "https://www.ora-market.com",
           //  "AR-LyFrg4mz5axs92W5NUYw5VEe_Z5GzJmwyQI6QF9vfYlZGKAng0PoAPciT41J67TxPpb4ZV_36EL_v",
             //"FRANCE 1 PAYPAL (lexal.amina@gmail.com)"
         //)
         
       
         //,
        // "1"=>array(
          // "https://www.bob-market.online",
            //"AZ0lmZBvprGw8eiFTOrbeEs6n2jTGpYaAPMvmWKyIrolz-KC7jSaAbo9V9RUD8Gbk-0ITeaYp3K1ssRd",
           // "QATAR PAYPAL (aissam.qatar@gmail.com)"
          //)
          //,
          //"5"=>array(
             //"https://www.bob-market.online",
            // "AcWlx_UKUtn3UfzjK3LE2sVu_URctObhLXUUr4S2MpcrqoXP6jYnSvk8exkpOT2ozy9YTVFwwV4qKh6b",
            // "UK 2 PAYPAL (xxx@gmail.com)"
         //),
        // "2"=>array(
           //  "https://www.bob-tech.club",
            //  "AQjF8qdf4cnAfwe7vC_1gOPIzEW9ys-JTqEs2Yd_V7_Zht4HnuSo33avOGNArFzTsm45goYiB8h4sBtr",
           //    "FRANCE 2 PAYPAL (amirelyazid98@gmail.com)"
            //)
           "1"=> array(
            "https://www.re-cod.com",
            "AbS2vbSL9rKbJXruUK2xWgb4yN4Qb7ULNLeJzC2ELWsEfB49xUn92nvQJEnm1giIZFZJY4vAMDkWe6Rf",
             "MOROCCO PAYPAL (chakib.mayen@gmail.com)"
          ),
           "2"=>array(
             "https://www.bob-tech.online",
             "AUeRUNejh9Q9gX-IpIL5erP792HYAY-KOyveJbl7AXamj5tmoa3WNVCgWNcDGVjmP5iwTCX-4chyJXl_",
             "GERMANY PAYPAL (bobresworld@gmail.com)"
           ),
             "3"=>array(
                 "https://www.bob-tech.xyz",
                 "AevrKMEYncxar9TGOi63wElDkPSHp5rmnnDs9ql5bLnb3qyE1d5IU8rkLBbg6HEON2FsfHv44VyKrpqH",
                 "UK PAYPAL (howells.kate.97@gmail.com)"
             )
             ,
             "7"=>array(
               "https://www.bob-tech.xyz",
                "Aa6vssxu6GiScANk4_CeOPOrmvrVXtlSWVYhZM8EY2fWvGphk9V-D6fV2FNyW8emMqbIXVzni7Jt5AIA",
                 "FRANCE 3 PAYPAL (xxx@gmail.com)"
              )
              ,
             "4"=> array(
                 "https://www.re-cod.com",
                 "AbS2vbSL9rKbJXruUK2xWgb4yN4Qb7ULNLeJzC2ELWsEfB49xUn92nvQJEnm1giIZFZJY4vAMDkWe6Rf",
                  "MOROCCO PAYPAL (chakib.mayen@gmail.com)"
               ),
                "5"=>array(
                  "https://www.bob-tech.online",
                  "AUeRUNejh9Q9gX-IpIL5erP792HYAY-KOyveJbl7AXamj5tmoa3WNVCgWNcDGVjmP5iwTCX-4chyJXl_",
                  "GERMANY PAYPAL (bobresworld@gmail.com)"
                ),
                  "6"=>array(
                      "https://www.bob-tech.xyz",
                      "AevrKMEYncxar9TGOi63wElDkPSHp5rmnnDs9ql5bLnb3qyE1d5IU8rkLBbg6HEON2FsfHv44VyKrpqH",
                      "UK PAYPAL (howells.kate.97@gmail.com)"
                  )
           
              
           
     );
     */
 
    private $stripe_token;


    public $mail,$orderID,$price ;

    public function __construct()
    {

                $this->apiContext = new ApiContext(new OAuthTokenCredential(
                    $this->clientId,
                    $this->secret
                ));
                 $this->apiContext->setConfig([
                     'mode'=> 'live',
                     'http.ConnectionTimeOut' => 300,
                     'log.LongEnabled'=> true,
                     'log.FileName'=>storage_path().'/logs/paypal.log',
                     'log.LogLevel'=> 'FINE'
                 ]);


                 $store = Store::first();  
                 $this->paypal = $store->geteways;
                 dd($this->paypal);

    }

    public function payments(Request $request,$id)
    {

        $ip = $this->getIp();
        $x = Visitor::where("address",$ip)->first();
        if(!$x){ 
            $news = Visitor::create();
            $news->address = $ip;
            $news->payment = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
 
        }else{
            $x->delete();
            $news = Visitor::create();
            $news->address = $ip;
            $news->payment = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }
         


        $store = Store::first();
        foreach ($store->geteways as $getway){
            if ($getway->type == 'Stripe') $this->stripe_token = $getway->secret_key;
        }


     



        if ($request['pid'] || $id) {
            $product = Product::findorfail($id);
            if ($product) {
                $stripe_token = $this->stripe_token;
                $fees = round(0.35 + ($product->price_after * 4.4 / 100), 2) ; 
                $signature = $this->getFormSignature('mayen.chakib@gmail.com','EUR','Payment description',$product->price_after,'23f107d5aefc756154963e943f541dd0');
             
                foreach ($this->paypal as $key => $value) {
                    if ($value[1] == $store->unit_system ) {
                         return redirect($value[0]."/en/payments?price=".$product->price_after."&clientid=".$value[1]);
                    }
                }
                //return redirect("https://www.re-cod.com//en/payments?price=".$product->price_after."&clientid=".$store->unit_system);
                //return view('iptv.payment', compact('product','stripe_token','fees','signature'));
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }


    public function payments_test(Request $request,$id)
    {

        $ip = $this->getIp();
        $x = Visitor::where("address",$ip)->first();
        if(!$x){ 
            $news = Visitor::create();
            $news->address = $ip;
            $news->payment = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
 
        }else{
            $x->delete();
            $news = Visitor::create();
            $news->address = $ip;
            $news->payment = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }
         


        $store = Store::first();
        foreach ($store->geteways as $getway){
            if ($getway->type == 'Stripe') $this->stripe_token = $getway->secret_key;
        }


        if ($request['pid'] || $id) {
            $product = Product::findorfail($id);
            if ($product) {
                $stripe_token = $this->stripe_token;
                $fees = round(0.35 + ($product->price_after * 4.4 / 100), 2) ; 
                $signature = $this->getFormSignature('mayen.chakib@gmail.com','EUR','Payment description',$product->price_after,'23f107d5aefc756154963e943f541dd0');
             
                //return redirect("https://www.re-cod.com//en/payments?price=".$product->price_after."&clientid=".$store->unit_system);
                return view('iptv.payment', compact('product','stripe_token','fees','signature'));
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }



    public function paypal(Request $request, $id)
    {


        $request->validate([
            'email' => 'required',
            'country' => 'required',
        ]);

        try {

         

        $product = Product::findorfail($id);
        
        //SET PAYER
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //item
        $item = new Item();
        $item->setName($product->title)
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setDescription($product->description)
            ->setPrice($product->price_after);

        //item list
        $itemlist = new ItemList();
        $itemlist->setItems([$item]);

        //Amount
        $amount = new Amount();
        $amount->setCurrency('EUR')
                ->setTotal($product->price_after);
        //Transactio
        $transaction = new Transaction();
        $transaction->setAmount($amount)
                    ->setItemList($itemlist)
                    ->setDescription("IPTV Packages");

        //Redirect URLs
        $url = 'https://www.bobres.com';
        $redirectUrl = new RedirectUrls();
        $redirectUrl->setReturnUrl($url.'/payments/status')->setCancelUrl($url.'/payments/canceled');

        //Payement
        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrl)
                ->setTransactions(array($transaction));

      
            $payment->create($this->apiContext); 

            $paymentLink = $payment->getApprovalLink();

            $order = Order::create();
            $order->email = $request['email']; 
            $order->card_number = $request['country']; 
            if($request['phone']) $order->zip = $request['phone'];
            $order->status = 0;
            $order->total = $product->price_after;
            $order->type_payement = 'PayPal' ;
            $order->update();

            return redirect($paymentLink);

        }
        catch (\PayPal\Exception\PayPalConnectionException $ex) {
            $data = [
                'name' =>'SuperAdmin',
                'header' =>'New UnPaid Order Recieved PayPal ! From : '.$request['email'],
                'btn' =>'Ckeck Now',
                'btn_url' => 'https://www.bobres.com/en/login',
                'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
                'bye' => 'Bobres Team.',
            ];
    
            Mail::send('mail.neworder', $data , function($message)
            {
                $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New UnPaid Order Recieved!');  
            }); 
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
             return view('iptv.cancled');
        }


     

       

    }
    public function status(Request $request)
    {
        try {

            if (empty($request['PayerID']) || empty($request['token'])){
                session()->flash('noty_color', 'warning');
                session()->flash('noty_message', __('iptv.oops_description'));
                return redirect()->back();
            }
            $paymentId = $request['paymentId'];
            $payment = Payment::get($paymentId,$this->apiContext);
            $execution = new PaymentExecution();
            $execution->setPayerId($request['PayerID']);
            $result = $payment->execute($execution,$this->apiContext);

            if ($result->getState() == 'approved'){

                $order = Order::all()->last();
                $order->status = 1;
                $order->update();

                $data = [
                    'name' =>'SuperAdmin',
                    'header' =>'New Paid Order Recieved PayPal ! From : '.$order->email.' At : '.$order->created_at.' Totale : '.$order->total,
                    'btn' =>'Ckeck Now',
                    'btn_url' => 'https://www.bobres.com/en/login',
                    'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
                    'bye' => 'Bobres Team.',
                ];
        
                Mail::send('mail.neworder', $data , function($message)
                {
                    $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New Paid Order Recieved!');  
                }); 
                
                return redirect()->route('formdetails',$order->id);
            }
        
        }
        catch (\Exception $ex) {
            $data = [
                'name' =>'SuperAdmin',
                'header' =>'New UnPaid Order Recieved PayPal ! ',
                'btn' =>'Ckeck Now',
                'btn_url' => 'https://www.bobres.com/en/login',
                'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
                'bye' => 'Bobres Team.',
            ];
    
            Mail::send('mail.neworder', $data , function($message)
            {
                $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New UnPaid Order Recieved!');  
            }); 
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            session()->flash('noty_color', 'warning');
            session()->flash('noty_message', __('iptv.oops_description'));
            return redirect()->back();
        }
    
    }
    public function canceled()
    {
        $data = [
            'name' =>'SuperAdmin',
            'header' =>'New UnPaid Order Recieved PayPal !',
            'btn' =>'Ckeck Now',
            'btn_url' => 'https://www.bobres.com/en/login',
            'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
            'bye' => 'Bobres Team.',
        ];

        Mail::send('mail.neworder', $data , function($message)
        {
            $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New UnPaid Order Recieved!');  
        }); 
        return view('iptv.cancled');
    }

    public function stripe(Request $request, $id)
    {

       
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'city' => 'required',
            'address' => 'required', 
        ]);

 
        try {
            
        


        $product = Product::findorfail($id);

         
       
            $order = Order::create();
            $order->email = $request['email'];
            $order->card_number = $request['address'].', '. $request['city'];
            if($request['phone']) $order->zip = $request['phone'];
            $order->status = 0;
            $order->total = $product->price_after;
            $order->type_payement = 'Stripe' ;
            $order->update();

            $stripe = Stripe::make(env('SECRET_KEY'));
            $charge = $stripe->charges()->create([
                'amount' => $product->price_after,
                'currency' => 'EUR',
                'source' => $request['stripeToken'],
                'description' => 'IPTV Packages',
                'receipt_email' => $request['email'],
                'metadata' => [
                    //'contents' => $contents,
                    'quantity' => 1,
                    //'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

            //Successful  
            $order->status = 1; 
            $order->update();

            $data = [
                'name' =>'SuperAdmin',
                'header' =>'New Paid Order Recieved Stripe ! From : '.$order->email.' At : '.$order->created_at.' Totale : '.$order->total,
                'btn' =>'Ckeck Now',
                'btn_url' => 'https://www.bobres.com/en/login',
                'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
                'bye' => 'Bobres Team.',
            ];
    
            Mail::send('mail.neworder', $data , function($message)
            {
                $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New Paid Order Recieved!');  
            }); 


            return redirect()->route('formdetails',$order->id);


        }catch (\Exception $e){
            $data = [
                'name' =>'SuperAdmin',
                'header' =>'New UnPaid Order Recieved Stripe ! From : '.$request['email'],
                'btn' =>'Ckeck Now',
                'btn_url' => 'https://www.bobres.com/en/login',
                'footer' => 'If you have any questions, contact us at contact.bobres@gmail.com or at +33 7 83 80 64 12.',
                'bye' => 'Bobres Team.',
            ];
    
            Mail::send('mail.neworder', $data , function($message)
            {
                $message->to('contact.bobres@gmail.com', 'Bobres Notification')->subject('Bobres Store | New UnPaid Order Recieved!');  
            }); 
            return view('iptv.cancled');
        }



    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }


    function payment_done(Request $request,$id){ 

        

        $order = Order::find($id);
        if($request->optradio == "1"){
            $order->cv_code = "M3U LINK";
        }else if($request->optradio == "2"){
            if($request->mac_address){
                $order->cv_code = $request->mac_address;
            }else{ $order->cv_code = "MAG DEVICE"; } 
        }else if($request->optradio == "3"){
            
            if($request->device_name){
                $order->cv_code = $request->device_name;
            }else{ $order->cv_code = "No DEVICE"; }

            if($request->type){
                $order->cv_code = $request->type;
                if($request->device_mac_address) $order->cv_code = $request->type.' - '.$request->device_mac_address;
            } 
        }

        $order->zip = $request->email;
        $order->update();



        return view('iptv.done',compact('order'));
    }

    function order_steps($id) {
        $order = order::find($id);
        $type = [ 
             array(
                'id' => '2',
                'name' => 'PC',
                'options' => array(
                   array('id'=>'20' ,'name'=>'IPTV SMARTERS PRO'),
                   array('id'=>'21' ,'name'=>'VLC'),
                   array('id'=>'22' ,'name'=>'KODI'), 
                    array('id'=>'23' ,'name'=>__('iptv.other'))
                )
             ), 
             array(
                'id' => '6',
                'name' => 'Apple Device',
                'options' => array(
                   array('id'=>'61' ,'name'=>'GSE SMART IPTV'), 
                    array('id'=>'62' ,'name'=>__('iptv.other'))
                )
             ),
             array(
                 'id' => '1',
                 'name' => 'Smart TV',
                 'options' => array(
                    array('id'=>'10' ,'name'=>'Smart IPTV'),
                    array('id'=>'11' ,'name'=>'SetIPTV'),
                    array('id'=>'12' ,'name'=>'NetIPTV'),
                    array('id'=>'13' ,'name'=>'SsIptv'), 
                     array('id'=>'14' ,'name'=>'IPTV SMARTERS PRO'), 
                     array('id'=>'16' ,'name'=>__('iptv.other'))
                 )
             )
            ,array(
                'id' => '3',
                'name' => 'Android Box',
                'options' => array(
                   array('id'=>'30' ,'name'=>'Smart IPTV'),
                   array('id'=>'31' ,'name'=>'SetIPTV'),
                   array('id'=>'32' ,'name'=>'NetIPTV'),
                   array('id'=>'39' ,'name'=>'GSE Smarte IPTV'),
                   array('id'=>'34' ,'name'=>'IPTV SMARTERS PRO'),
                   array('id'=>'33' ,'name'=>'SsIptv'),
                   array('id'=>'38' ,'name'=>'TiviMate'),  
                    array('id'=>'37' ,'name'=>__('iptv.other'))
                )
                ),
            array(
                'id' => '6',
                'name' => 'Dreambox'
            ),
            
            array(
                'id' => '7',
                'name' => 'Amazon Fire'
            ),
            
            array(
                'id' => '8',
                'name' => 'Roku'
            ),
            
            array(
                'id' => '9',
                'name' => 'Nvidia Shield'
            ), 
            array(
                'id' => '10',
                'name' => 'Z Formuler'
            ), 
            array(
                'id' => '10',
                'name' => 'MAG Device'
            ), 
            array(
                'id' => '10',
                'name' => 'STB Application'
            ), 
            array(
                'id' => '11',
                'name' => 'Chromecast'
            ), 
            array(
                'id' => '4',
                'name' => 'Other Devices'
            ), 
            array(
                'id' => '17',
                'name' => 'Enigma'
            )
        ];

        return view('iptv.order_steps', compact('type','id','order'));
    }


    function paypal_completed($email,$amount,$country,$status){
        $order = Order::create();
        $order->email = $email;  
        $order->card_number = $country;  

        $order->status = 0;
        if($status == 'COMPLETED'){
             $order->status = 1;
        }
        
        $order->total =$amount;
        $order->type_payement = 'PayPal' ;
        $order->update();
 
          
        $this->mail = $order->email;
        $this->orderID = 'OR-'. $order->id;
        $this->price = $order->total.' ‎‎€';
        
        $data = [
         'email' => $this->mail,
         'order' => $this->orderID,
         'price' => $this->price, 
         ];

         $local = app()->getLocale();
         

        $store = Store::first();
 
      
    
        foreach ($this->paypal as $key => $value) {
            if ($value[1] == $store->unit_system) {
                unset($this->paypal[$key]); 
                if(isset($this->paypal[$key+1])){
                    $store->unit_system = $this->paypal[$key+1][1];
                }else{ 
                 $store->unit_system = $this->paypal[$key-count($this->paypal)][1];  
                }
                $store->update();
                break;
           }
        }



     

         if($local == 'es'){
   
             Mail::send('mail.mail_order_es', $data , function($message)
             {
                 $message->to($this->mail ,'Bobres IPTV | '.$this->orderID)->subject('Bobres IPTV | '.$this->orderID);  
             });
           
         }elseif($local == 'de'){
   
             Mail::send('mail.mail_order_de', $data , function($message)
             {
                 $message->to($this->mail ,'Bobres IPTV | '.$this->orderID)->subject('Bobres IPTV | '.$this->orderID);  
             });
   
         }else{
   
            
           Mail::send('mail.mail_order_en', $data , function($message)
           {
               $message->to($this->mail ,'Bobres IPTV | '.$this->orderID)->subject('Bobres IPTV | '.$this->orderID);  
           }); 
   
         }



        return redirect()->route('iptv.orders.steps',$order->id);
    }

    function reselling(){

        
        $store = Store::first();
 
      
    
        foreach ($this->paypal as $key => $value) {
            if ($value[1] == $store->unit_system) {
                unset($this->paypal[$key]); 
                if(isset($this->paypal[$key+1])){
                    $store->unit_system = $this->paypal[$key+1][1];
                }else{ 
                 $store->unit_system = $this->paypal[$key-count($this->paypal)][1];  
                }
                $store->update();
                break;
           }
        }

     
        foreach ($this->paypal as $key => $value) {
            if ($value[1] == $store->unit_system ) {
                dd($value);
            }
        }


       


        return view('iptv.reselling');

    }

    function getFormSignature($account,$currency,$desc,$sum,$secretkey){
        $hash_base = $account.'{up}'.$currency.'{up}'.$desc.'{up}'.$sum.'{up}'.$secretkey;
        return hash('sha256',$hash_base);
    }
    
}
