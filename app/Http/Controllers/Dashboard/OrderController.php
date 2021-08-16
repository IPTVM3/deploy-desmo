<?php

namespace App\Http\Controllers\Dashboard;

use App\Order;
use App\OrderLine;
use App\Product;
use App\ProductOption;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{


    public  $email,$id;

    public function index(){
        $products = Product::all();
        $orders = Order::orderBy('created_at','desc')->paginate(20);
        $orders_undone = Order::whereNull('mac')->orderBy('created_at','desc')->paginate(20);
 


        return view('dashboard.orders.index',compact('orders','products','orders_undone'));
    }

    public function create(){
        $products = Product::all();
        return view('dashboard.orders.create',compact('products'));
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
        ]);

        $exept_fields = ['_token', '_method'];
        $request_data = $request->except($exept_fields);

        $order = Order::create($request_data);
        $order->status = 0;
        $order->type_payement = 'PayPal' ;
        if($request['card_number']) $order->type_payement = 'Stripe';
        $order->update();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('orders.line.create',$order->id);

    }


    public function destroy($id){
        Order::find($id)->delete();
        return redirect()->route('orders.index');
    }

    public function lines($id){
        $order = Order::find($id);
        $order->exp_date = Carbon::now();
        $order->mac =  Auth::user()->name;
  
        $order->update();
        return redirect()->route('orders.index');
        //return view('dashboard.orders.lines.index',compact('order'));
       
    }

    public function line_destroy($id){
        $orderline = OrderLine::find($id);
        $order = $orderline->order;
        $order->total = $order->total - $orderline->price;
        $orderline->delete();
        $order->update();

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.deleted_success'));
        return view('dashboard.orders.lines.index',compact('order'));
    }

    public function create_line($id){
        $order = Order::find($id);
        $products = Product::all();
        return view('dashboard.orders.lines.create',compact('order','products'));
    }

    public function store_line(Request $request,$id){
        $option = ProductOption::find($request['product_poperty']);
        $order  = Order::find($id);
        $orderLine = OrderLine::create();
        $orderLine->order_id = $id;
        $orderLine->product_id = $request['product'];
        $orderLine->productoption_id = $option->id;
        $orderLine->qty = $request['qty'];
        $orderLine->price =  $request['qty'] * $option->price ;
        $orderLine->update();

        $order->total = $order->total + $orderLine->price;

        $order->update();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('orders.line.create',$order->id);

    }

    public function paid($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->update();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect()->route('orders.index');
    }


    public function undone($id){


        $order = Order::find($id);
        

        $local = "en";
        if($order->card_number) $local = $order->card_number;
         
        $data = [
         'email' => $order->email,
         'order' => $order->id,
         'price' => $order->total, 
         'local' => $local, 
         ];


         $this->email =  $order->email; 
        if($order->zip){
            $this->email =  $order->zip; 
        }
         
         $this->id =  $order->id;

        Mail::send('mail.mail_undone', $data , function($message){
                
            $message->to($this->email ,'Bobres IPTV | N21-'.$this->id)->subject('Bobres IPTV | N21-'.$this->id);  
        });

        return redirect()->route('orders.index');
         
    }

    public function expired($id){

        $order = Order::find($id); 
          
        $data = [
         'email' => $order->email,
         'order' => $order->id, 
         'local' => $order->card_number, 
         ];

         $this->email =  $order->email;
 
         
         Mail::send('mail.mail_expired', $data , function($message) {
                
            $message->to($this->email ,'Bobres IPTV')->subject('Bobres IPTV');  
        });

        return redirect()->route('orders.index');
    }

    public function search(Request $request){

        $orders = Order::all();
        $id = $request->order_id;   
        $or_emai = [];
        $var = 0 ;
        if (strpos($id,'@') !== false) {
            foreach ($orders as $key => $value) {
                if($value->email == $id){
                    array_push($or_emai,$value);
                }
            }
            $orders = $or_emai; 
        }else{
            $orders = [Order::findOrFail($id)];
        }
        $orders_undone = Order::whereNull('mac')->orderBy('created_at','desc')->paginate(20);
        return view('dashboard.orders.search',compact('orders','orders_undone'));
    }

    function multi_send(Request $request){

        $IDs = $request->order_ids;
        foreach ($IDs as $key => $value) {
           $order = Order::find($value);
           if($order != null) sleep(3);
                  

            $data = [
                'email' => $order->email,
                'order' => $order->id, 
                'local' => $order->card_number, 
            ];
   
            $this->email =  $order->email;
    
            
            Mail::send('mail.mail_expired', $data , function($message) {
               $message->to($this->email ,'Bobres IPTV')->subject('Bobres IPTV');  
           });
        }
       

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', 'done');
        return redirect()->route('orders.index');
    }

    function done(Request $request,$id){
        $order = Order::find($id);
        $this->id = $id;
        $this->mail = $request->email; 
        $data = [];
        if($order){
            $type = $request->type; 
            $email = $request->email;


            $local = "en";
            if($order->card_number) $local = $order->card_number;


            if($request->m3u != "" and $request->mac == ""){

                $query = parse_url($request->m3u, PHP_URL_QUERY);
                parse_str($query, $params);  

                $username =  $params['username'];
                $password =  $params['password'];
             

                $parse = parse_url($request->m3u); 
                $base = $parse['host'];
                $port = parse_url($request->m3u, PHP_URL_PORT);
                if($port) $base = $base.':'.$port;
               
  
                $data = [
                    'id' =>$id,
                    'email' => $email,
                    'm3u' => $request->m3u, 
                    'username' => $username,
                    'password' => $password,
                    'host' => $base,
                    'local' => $local, 
                ];
                
                $order->support = $base;

                
                Mail::send('mail.order_m3u', $data , function($message)
                {
                    $message->to($this->mail ,'Bobres IPTV | N21-'.$this->id)->subject('Bobres IPTV | N21-'.$this->id);  
                });
 

            }else{ 
                     
                $data = [
                    'id' =>$id,
                    'email' => $email,
                    'mac'=> $request->mac, 
                    'portal' => $request->portal, 
                    'local' => $local, 
                ];

                $order->support = $request->portal;
                Mail::send('mail.order_mag', $data , function($message)
                {
                    $message->to($this->mail ,'Bobres IPTV | N21-'.$this->id)->subject('Bobres IPTV | N21-'.$this->id);  
                });
            }
            $order->exp_date = Carbon::now();
            $order->mac =  Auth::user()->name;
    
            $order->update();
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', 'done');
            return redirect()->route('orders.index');
        }
        session()->flash('noty_color', 'danger');
        session()->flash('noty_message', 'Undone');
        return redirect()->route('orders.index');

    }
}
