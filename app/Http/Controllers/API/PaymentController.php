<?php

namespace App\Http\Controllers\API;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MailList;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


use App\Visitor;

class PaymentController extends Controller
{

    public $mail,$orderID,$price ;

    public function create(Request $request){
        $order = Order::create();
        if (is_null($order)) {
            return $this->sendError('order can not created.');
        }
        return $order->toArray();
    }

    public function completed(Request $request){  
      

                       $order = Order::create();
                       $order->email = $request['payerEmail'];  
                       $order->card_number = $request['country']; 
                       $order->tested = 'NO';  
                       if($request['tested']) $order->tested = 'YES';  

                       $order->status = 0;
                       if($request['status'] == 'COMPLETED'){
                            $order->status = 1;
                       }

                       switch ($request['price']) {
                           //ONE MONTH
                        case "18.99":
                          $order->period_sub_days = 30;
                          break;
                          //6 MONTHS
                        case "48.99":
                          $order->period_sub_days = 183;
                          break; 
                        case "39.99":
                            $order->period_sub_days = 183;
                            break;
                            //3 MONTHS
                        case "39.97":
                            $order->period_sub_days = 91;
                            break;  
                        case "29.98":
                            $order->period_sub_days = 91;
                            break; 
                            //ONE YEAR
                        default:
                          $order->period_sub_days = 365;
                      }
 
                       
                       $order->total =$request['price'];
                       $order->type_payement = 'PayPal' ;
                       $order->update();

                       //Code to Email Book To User
                       
                       $this->mail = $request['payerEmail'];
                       $this->orderID = 'L22R-'. $order->id;
                       $this->price = $request['price'].' ‎‎€';
                       
                       $data = [
                        'email' => $this->mail,
                        'order' => $this->orderID,
                        'price' => $this->price, 
                        ];

                        $local = app()->getLocale();
                        
                    

                        if($local == 'es'){
                  
                            Mail::send('mail.mail_order_es', $data , function($message)
                            {
                                $message->to($this->mail ,'IPTVM3U | '.$this->orderID)->subject('IPTVM3U | '.$this->orderID);  
                            });
                          
                        }elseif($local == 'de'){
                  
                            Mail::send('mail.mail_order_de', $data , function($message)
                            {
                                $message->to($this->mail ,'IPTVM3U | '.$this->orderID)->subject('IPTVM3U | '.$this->orderID);  
                            });
                  
                        }else{
                  
                           
                          Mail::send('mail.mail_order_en', $data , function($message)
                          {
                              $message->to($this->mail ,'IPTVM3U | '.$this->orderID)->subject('IPTVM3U | '.$this->orderID);  
                          }); 
                  
                        }


                
                   

       return $order;
      

      
   
   }

        public function getTopCountriesRecievedAmountByDay($datestart,$dateend)
        {
            //TOP COUNTRIES RECIEVED AMOUNT FROM TODAY
            $country_BY_TODAY = DB::table('orders')
                ->select(DB::raw('sum(total) as totalamount, card_number'))
                ->whereBetween('created_at', [$datestart, $dateend])
                ->groupBy('card_number')
                ->orderBy('totalamount', 'desc')
                ->take(10)
                ->get();

            $dataX = [
                'country_BY_TODAY' => $country_BY_TODAY
            ];

            return response($dataX, 200)
                ->header('Content-Type', 'application/json');
        }
      public function index()
      {
          //TOP 10 COUNTRIES - LAST 3 MONTHS(€)
          $today = Carbon::today();


          //STATISTICS ONE DAY
          $todayOrders = $this->getAmountNet(Order::whereDate('created_at', Carbon::today())->get());
          $lastDayOrders = $this->getAmountNet(Order::whereDate('created_at', Carbon::yesterday())->get());
          $last15Days = $this->getAmountNet(Order::where("created_at",">", Carbon::now()->subDays(15))->get());
          $last30days = $this->getAmountNet(Order::where("created_at",">", Carbon::now()->subDays(30))->get());


 
          Visitor::where("date","<", Carbon::yesterday())->delete();
          $today_visitor = Visitor::whereDate('date', Carbon::today())->get();
          $yestardy_visitor = Visitor::whereDate('date', Carbon::yesterday())->get();

            $months = Order::select(
                   DB::raw('sum(total) as `sums`'),
                   DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"),
                   DB::raw('max(created_at) as createdAt')
            )
          ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(12))
          ->orderBy('createdAt', 'desc')
          ->groupBy('months')
          ->get();

               //TOP COUNTRIES RECIEVED AMOUNT FOR LAST 30 DAYS
             $country = DB::table('orders')
               ->select(DB::raw('sum(total) as totalamount, card_number'))
               ->where("created_at", ">", Carbon::now()->subDays(30))
               ->groupBy('card_number')
               ->orderBy('totalamount', 'desc')
               ->take(10)
               ->get();




             $typeorders = DB::table('orders')
               ->select(DB::raw('count(*) as numberoforders, total'))
               ->where("created_at", ">", Carbon::now()->subDays(30))
               ->groupBy('total')
               ->orderBy('numberoforders', 'desc')
               ->take(10)
               ->get();



           
                    //GET ALL TESTED Order
            $testedOrders = DB::table('orders')
            ->where('tested',1) 
            ->get();

                 
                 $testOrdersThisMonth = DB::table('orders')
                 ->where('tested',1)
                 ->whereYear('created_at', Carbon::now()->year)
                 ->whereMonth('created_at', Carbon::now()->month)
                 ->get();

            $amountofthismonth = 0;
            foreach($testOrdersThisMonth as $key => $order){

                switch ($order->total) {
                    //ONE MONTH
                 case "18.99":
                    $amountofthismonth += $order->total * 0.02;
                   break;
                   //6 MONTHS
                 case "48.99":
                    $amountofthismonth += $order->total * 0.035;
                   break; 
                 case "39.99":
                    $amountofthismonth += $order->total * 0.02;
                     break;
                     //3 MONTHS
                 case "39.97":
                    $amountofthismonth += $order->total * 0.03;
                     break;  
                case "29.98":
                    $amountofthismonth += $order->total * 0.01;
                    break; 
                case "59.98":
                    $amountofthismonth += $order->total * 0.035;
                    break; 
                    //ONE YEAR  
                 case "49.99":
                    $amountofthismonth += $order->total * 0.02;
                     break; 
                     //ONE YEAR
                 default:
                    $amountofthismonth += $order->total * 0.015;
                
                 }


                 


            }


            $testOrdersPerviousMonth = DB::table('orders')
                    ->where('tested',1)
                    ->whereMonth('created_at', Carbon::now()->subMonth()->format('m'))
                    ->get();
            $amountofPerviousmonth = 0;
            foreach($testOrdersPerviousMonth as $key => $order){
            
                switch ($order->total) {
                    //ONE MONTH
                 case "18.99":
                    $amountofPerviousmonth += $order->total * 0.02;
                   break;
                   //6 MONTHS
                 case "48.99":
                    $amountofPerviousmonth += $order->total * 0.035;
                   break; 
                 case "39.99":
                    $amountofPerviousmonth += $order->total * 0.02;
                     break;
                     //3 MONTHS
                 case "39.97":
                    $amountofPerviousmonth += $order->total * 0.03;
                     break;  
                case "29.98":
                    $amountofPerviousmonth += $order->total * 0.01;
                    break; 
                case "59.98":
                    $amountofPerviousmonth += $order->total * 0.035;
                    break; 
                    //ONE YEAR  
                 case "49.99":
                    $amountofPerviousmonth += $order->total * 0.02;
                     break; 
                     //ONE YEAR
                 default:
                    $amountofPerviousmonth += $order->total * 0.015;

                 }
            }




        $dataX = [
              'typeorders' => $typeorders,
              'country' => $country,
              'orders' =>  $months,
              'today_visitor' => count($today_visitor),
              'yestardy_visitor' => count($yestardy_visitor),
              'todayOrders' => $todayOrders,
              'lastDayOrders' => $lastDayOrders,
              'todayOrders_count' => count(Order::whereDate('created_at', Carbon::today())->get()),
              'lastDayOrders_count' => count(Order::whereDate('created_at', Carbon::yesterday())->get()),
              'last15Days' => $last15Days,
              'last30days' => $last30days,
              'testedOrders' => $testedOrders,
              'testOrders' => [
                    $amountofthismonth,
                    $amountofPerviousmonth
              ]
         ];

        return response($dataX, 200)
         ->header('Content-Type', 'application/json');
      }

      function getAmountNet($orders){
          $valueOfRowMetrial = 17;
          $todayOrders = 0;
          foreach($orders as $key => $order){
              $todayOrders = $todayOrders + ($order->total - (0.35 + ($order->total * 4.4 / 100 )));
              if($order->total == '59.98' or $order->total == '49.99') $todayOrders = $todayOrders - $valueOfRowMetrial;
              if($order->total == '48.99' or $order->total == '39.99') $todayOrders = $todayOrders - $valueOfRowMetrial/2;
              if($order->total == '39.97' or $order->total == '29.98') $todayOrders = $todayOrders - $valueOfRowMetrial/3;
              if($order->total == '99.98') $todayOrders = $todayOrders - $valueOfRowMetrial*2;
              if($order->total == '69.99') $todayOrders = $todayOrders - $valueOfRowMetrial+4;
          }
          return $todayOrders;
      }



      public function completed_create(Request $request){  


        $email= $request['email'];
        $amount= $request['amount'];
        $country= $request['country'];
        $status= $request['status'];
        $txt= $request['txt'];
        
    
    
     
    
    
        
    
        $order = Order::create();
        $order->email = $email;  
        $order->card_number = $country;  
        
    
        $order->status = 0;
        if($status == 'COMPLETED'){
             $order->status = 1;
             $order->total =$amount;
             $order->type_payement = 'PayPal' ;
             
        }
        if($status == 'STRIPE'){
            $order->status = 1;
            $order->total =$amount;
            $order->type_payement = 'Stripe' ;
            
       }
        $order->productName = $txt;
     
    
    
       switch ($amount) {
        //ONE MONTH
     case "18.99":
       $order->period_sub_days = 30;
       break;
       //6 MONTHS
     case "48.99":
       $order->period_sub_days = 183;
       break; 
     case "39.99":
         $order->period_sub_days = 183;
         break;
         //3 MONTHS
     case "39.97":
         $order->period_sub_days = 91;
         break;  
     case "29.98":
         $order->period_sub_days = 91;
         break; 
         //ONE YEAR
     default:
       $order->period_sub_days = 365;
    }
    
        
        $order->update();
    
          
        $this->mail = $order->email;
        $this->orderID = 'N21-'. $order->id;
        $this->price = $order->total.' €';
        
     
       
    
    
         $local = app()->getLocale();
         
    
        $store = Store::first();
    
      
        $price = (float)$this->price;
        $compare = (float)'5';
        $this->ppl = "";
        $global_var = $store->unit_system;
        
     
    
            foreach ($this->paypal as $key => $value) {
                if ($value->id == $store->unit_system) {
                    $this->ppl = $this->paypal[$key]->client_account;
                    unset($this->paypal[$key]); 
                    if(isset($this->paypal[$key+1])){
                        $store->unit_system = $this->paypal[$key+1]->id;
                    }else{ 
                     $store->unit_system = $this->paypal[0]->id;  
                    }
                    $store->update();
                    break;
               }
            }
    
    
    
    
        $data = [
            'email' => $this->mail,
            'order' => $this->orderID,
            'price' => $this->price, 
            'paypal' => $this->ppl,
            'country' => $order->card_number,
            'date' => $order->created_at,
            ];
    
            
      
    
     
    
                    
                if($local == 'es'){
    
    
                    Mail::send('mail.mail_order_es', $data, function($message) {
                        $message->to($this->mail, 'IPTV M3U | '.$this->orderID)->subject('IPTV M3U | '.$this->orderID);
                    });
     
                  
                }elseif($local == 'de'){
           
                    Mail::send('mail.mail_order_de', $data , function($message)
                    {
                        $message->to($this->mail ,'IPTV M3U | '.$this->orderID)->subject('IPTV M3U | '.$this->orderID);  
                    });
           
                }else{
           
                   
                  Mail::send('mail.mail_order_en', $data , function($message)
                  {
                      $message->to($this->mail ,'IPTV M3U | '.$this->orderID)->subject('IPTV M3U | '.$this->orderID);  
                  }); 
           
                }
                
     
    
            
         
         return response(["orderID"=> $order->id], 200)
          ->header('Content-Type', 'application/json');
    
    
    
    } 


}
