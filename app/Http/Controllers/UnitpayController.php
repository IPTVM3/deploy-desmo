<?php


namespace App\Http\Controllers;

use App;
use App\Order;
use App\Product; 
 
require_once __DIR__ . '/UnitPay.php';

use Illuminate\Http\Request;

class UnitpayController extends Controller
{

    
     
    private $domain = "unitpay.money"; 
    private $secretKey  = '23f107d5aefc756154963e943f541dd0';
    private $publicId   = '368521-e4d9d';

    
    function payNow(Request $request,$id){
  

        $product = Product::find($id);
   

        $order = Order::create();
        
        $orderId        = $order->id;
        $orderSum       = $product->price_after;
        $orderDesc      = 'Payment for item "' . $product->title . '"';
        $orderCurrency  = 'EUR';

        $unitPay = new UnitPay($domain, $secretKey);

        $unitPay
            ->setBackUrl('http://bobres.com')
            ->setCustomerEmail('customer@domain.com')
            ->setCustomerPhone('79001235555')
            ->setCashItems(array(
        new CashItem($product->title , 1, $orderSum) 
        ));

        $redirectUrl = $unitPay->form(
            $publicId,
            $orderSum,
            $orderId,
            $orderDesc,
            $orderCurrency
        );

        dd($redirectUrl);

        return redirect($paymentLink); 

    }
    function response(Request $request){ 
   
        $method = $request->method;
        
        $data = [ 
            "result" => [
                "message" => "Payment status : ".$method           
            ]
        ]; 
        return $data;
    }
         
  
}