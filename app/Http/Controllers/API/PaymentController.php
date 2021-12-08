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
 
                       
                       $order->total =$request['price'];
                       $order->type_payement = 'PayPal' ;
                       $order->update();

                       //Code to Email Book To User
                       
                       $this->mail = $request['payerEmail'];
                       $this->orderID = 'N21-'. $order->id;
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


                
                   

       return $order;
      

      
   
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

}
