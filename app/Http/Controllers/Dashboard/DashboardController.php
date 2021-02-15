<?php

namespace App\Http\Controllers\Dashboard;

use App\Frais;
use App\Notifications\ResetPasswordMail;
use App\Notifications\SimpleMail;
use App\Notifications\TaskCompleted;
use App\Product;
use App\Store;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MailList;
use App\Order;
use App\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
     
        $paid_orders = 0;
        $paid_orders_stripe = 0;
        $lastday = 0;
        $lastday7 = 0;
        $lastday15 = 0;
        $lastday30 = 0;
        $Ungrous = 0;
        $Ungrous7 = 0;
        $count_mail_list = MailList::all()->count(); 

        $lastdayorders = Order::whereDate('created_at', Carbon::today())->get();
        $lastdayorders7 = Order::whereDate("created_at", Carbon::yesterday())->get();
        $lastdayorders15 = Order::where("created_at",">", Carbon::now()->subDays(15))->get();
        $lastdayorders30 =Order::where("created_at",">", Carbon::now()->subDays(30))->get();

        $months = 0 ;
        $months7 = 0 ;
      

        foreach ($lastdayorders as $key => $order) {
            $lastday = $lastday + ($order->total - (0.35 + ($order->total * 4.4 / 100 ))); 
            if($order->total == '59.99' ||$order->total == '59.98' || $order->total == '49.98'|| $order->total == '49.99' || $order->total == '39.99'  || $order->total == '40.99'|| $order->total == '40'){
                $Ungrous = $Ungrous +  16;
                $months = $months + 12;
            }
            if($order->total == '38.98' || $order->total == '29.98' || $order->total == '42.98 '){
                $Ungrous =  $Ungrous + 16/2;
                $months = $months + 6;
            }
            if($order->total == '29.97'  || $order->total == '22.98' ||  $order->total =='32.99'){
                $Ungrous =  $Ungrous + 16/4;
                $months = $months + 3;
            } 
            if($order->total == '13.99'|| $order->total == '18.99'){
                $Ungrous =  $Ungrous + 16/12;
                $months = $months + 1;
            }
            if($order->total == '89.98'|| $order->total == '109.98'){
                $Ungrous =  $Ungrous + 16 * 2;
                $months = $months + 24;
            }

        }
        foreach ($lastdayorders7 as $key => $order) {    $lastday7 = $lastday7 + ($order->total - (0.35 + ($order->total * 4.4 / 100 ))); 
            if($order->total == '59.99' ||$order->total == '59.98' || $order->total == '49.98'|| $order->total == '49.99' || $order->total == '39.99'  || $order->total == '40.99'|| $order->total == '40'){
                $Ungrous7 = $Ungrous7 +  16;
                $months7 = $months7 + 12;
            }
            if($order->total == '38.98' || $order->total == '29.98' || $order->total == '42.98 '){
                $Ungrous7 =  $Ungrous7 + 16/2;
                $months7 = $months7 + 6;
            }
            if($order->total == '29.97'  || $order->total == '22.98' ||  $order->total =='32.99'){
                $Ungrous7 =  $Ungrous7 + 16/4;
                $months7 = $months7 + 3;
            } 
            if($order->total == '13.99'|| $order->total == '18.99'){
                $Ungrous7 =  $Ungrous7 + 16/12;
                $months7 = $months7 + 1;
            }
            if($order->total == '89.98'|| $order->total == '109.98'){
                $Ungrous7 =  $Ungrous7 + 16 * 2;
                $months7 = $months7 + 24;
            }
        }

        foreach ($lastdayorders15 as $key => $order) {
            $lastday15 = $lastday15 + ($order->total - (0.35 + ($order->total * 4.4 / 100 ))); 
        }
        foreach ($lastdayorders30 as $key => $order) {
            $lastday30 = $lastday30 + ($order->total - (0.35 + ($order->total * 4.4 / 100 ))); 
        }
 
        $lastday = $lastday - $Ungrous ;
        $lastday7 = $lastday7 - $Ungrous7 ;

        Visitor::where("date","<", Carbon::yesterday())->delete();
        $today_visitor = Visitor::whereDate('date', Carbon::today())->get();
        $yestardy_visitor = Visitor::whereDate('date', Carbon::yesterday())->get();


        if(Auth::id() == '271'){
            return redirect()->route('orders.index');
        }
         
        return view('dashboard.dashboard',compact('lastday','lastday7','lastday15','lastday30','months','months7','today_visitor','yestardy_visitor'));
      
    }



}


