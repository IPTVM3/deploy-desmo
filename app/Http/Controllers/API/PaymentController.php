<?php

namespace App\Http\Controllers\API;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MailList;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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

                       $order->status = 0;
                       if($request['status'] == 'COMPLETED'){
                            $order->status = 1;
                       }
 
                       
                       $order->total =$request['price'];
                       $order->type_payement = 'PayPal' ;
                       $order->update();

                       //Code to Email Book To User
                       
                       $this->mail = $request['payerEmail'];
                       $this->orderID = 'OR-'. $order->id;
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

  
}
