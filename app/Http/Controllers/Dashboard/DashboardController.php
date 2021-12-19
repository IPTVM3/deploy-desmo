<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\MailList;
use App\Order;
use App\Visitor;
use App\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Charts;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //TOP 10 COUNTRIES - LAST 3 MONTHS(€)
        $today = Carbon::today();
        /*
        $order_of_last_3_months  = DB::select('select card_number as country , sum(total) as amount from orders o where created_at between ? and ? group by country order by amount desc;',[Carbon::now()->subMonth(3) , $today ]);
        $label = [];
        $values = [];
        foreach($order_of_last_3_months as $key => $order){
            $label[$key] = $order->country;
            $values[$key] = $order->amount;
            if($key == 10) break;
        }
        $chart_3_months = Charts::create('donut', 'highcharts')
            ->title('TOP 10 COUNTRIES - LAST 3 MONTHS(€)')
            ->labels($label)
            ->values($values)
            ->dimensions(500,500)
            ->responsive(true);


        //TOP 10 COUNTRIES - LAST 1 MONTHS(€)
        $today = Carbon::today();
        $order_of_last_1_months  = DB::select('select card_number as country , sum(total) as amount from orders o where created_at between ? and ? group by country order by amount desc;',[Carbon::now()->subMonth(1) , $today ]);
        $label = [];
        $values = [];
        foreach($order_of_last_1_months as $key => $order){
            $label[$key] = $order->country;
            $values[$key] = $order->amount;
            if($key == 10) break;
        }
        $chart_1_months = Charts::create('donut', 'highcharts')
            ->title('TOP 10 COUNTRIES - LAST 1 MONTH(€)')
            ->labels($label)
            ->values($values)
            ->dimensions(500,500)
            ->responsive(true);



        //ORDERS AMOUNT BY MONTHS
        $allOrders  = Order::select(
            DB::raw('sum(total) as sums'),
            DB::raw("DATE_FORMAT(created_at,'%m') as monthKey")
            )
            ->whereYear('created_at', date('Y'))
            ->groupBy('monthKey')
            ->orderBy('created_at', 'ASC')
            ->get();


        $label = [];
        $values = [];
        foreach($allOrders as $key => $order){
            $label[$key] = $order->monthKey;
            $values[$key] = $order->sums;
        }

        $chart_months = Charts::create('line', 'highcharts')
            ->title('TOTAl AMOUNTS BY MONTHS')
            ->elementLabel('AMONTS €')
            ->labels($label)
            ->values($values)
            ->dimensions(500,500)
            ->responsive(true);
            */

        //STATISTICS ONE DAY
        $todayOrders = $this->getAmountNet(Order::whereDate('created_at', Carbon::today())->get());
        $lastDayOrders = $this->getAmountNet(Order::whereDate('created_at', Carbon::yesterday())->get());
        $last15Days = $this->getAmountNet(Order::where("created_at",">", Carbon::now()->subDays(15))->get());
        $last30days = $this->getAmountNet(Order::where("created_at",">", Carbon::now()->subDays(30))->get());



        Visitor::where("date","<", Carbon::yesterday())->delete();
        $today_visitor = Visitor::whereDate('date', Carbon::today())->get();
        $yestardy_visitor = Visitor::whereDate('date', Carbon::yesterday())->get();
        $last15days_visitor = Visitor::whereDate('date', Carbon::now()->subDay(15))->get();
        $last30days_visitor = Visitor::whereDate('date', Carbon::now()->subDay(30))->get();



        if(\Auth::user()->name = "Said Rafiq") return redirect()->route('orders.new');
        return view('dashboard.dashboard',compact('last30days_visitor','last15days_visitor','todayOrders','lastDayOrders','last15Days','last30days','today_visitor','yestardy_visitor'));
        //return view('dashboard.dashboard',compact('last30days_visitor','last15days_visitor','todayOrders','lastDayOrders','last15Days','last30days','today_visitor','yestardy_visitor','chart_1_months','chart_3_months','chart_months'));
      
    }

    public function getAmountNet($orders){
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


    function send_email_auto_extend(){

        try {

            $store = Store::first();
            $key = "";

            foreach ($store->geteways as $value){

                  $bas_url = $value->mode;
                  $client_id = $value->api_key;

                 if ($value->id == $store->unit_system) {
                        $key = $client_id;
                        //return redirect($bas_url."/en/payments?price=".$product->price_after."&txt=".$product->title."&clientid=".$client_id);
                  }
             }

            $orders = Order::orderBy('created_at','desc')->get();
            foreach ($orders as $order) {
                if($order->period_sub_days){
                 $end = date('Y-m-d', strtotime($order->created_at->format('Y-m-d'). ' + '.$order->period_sub_days.' days'));
                 $date = new DateTime($end);
                 $now = new DateTime();

                $diff = date_diff($date, $now);

                   $this->data = [
                        'id' => $order->id,
                        'email' => $order->email,
                        'days_left' => $diff->format("%a"),
                        'created_at' => $order->created_at,
                        'paid_amount' => $order->total.' €',
                        'period_sub_days' => $order->period_sub_days,
                        'expired_at' => $end,
                        'local' => $order->card_number,
                        'client_id' => $key,
                   ];



                if($diff->format("%a") == 1 && $order->period_expired != "1"){

                                  $order->period_expired = "1";
                               Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                                                  {
                                                        $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                                                        ->subject('Bobres IPTV | Your Order About To Expire ');
                                           $order->update();
                                                                                                               });


                              }
                              /*
                                 elseif($diff->format("%a") == 15 && $order->period_expired != "15"){

                                                   $order->period_expired = "15";
                                                Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                                                                   {
                                                                         $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                                                                         ->subject('Bobres IPTV | Your Order About To Expire ');
                                                         $order->update();
                                                                                                                             });


                                               }
                                               elseif($diff->format("%a") == 5 && $order->period_expired != "5"){


                    $order->period_expired = "5";
                    Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                     {
                           $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                           ->subject('Bobres IPTV | Your Order About To Expire ');
                    $order->update();
                                                                                        });




                }elseif($diff->format("%a") == 10 && $order->period_expired != "10"){


                    $order->period_expired = "10";
                     Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                                      {
                                            $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                                            ->subject('Bobres IPTV | Your Order About To Expire ');
                                       $order->update();
                                                                                                           });




                }elseif($diff->format("%a") == 0  && $order->period_expired != "0"){


                                     $order->period_expired = "0";
                                       Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                                                        {
                                                              $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                                                              ->subject('Bobres IPTV | Your Order About To Expire ');
                                                       $order->update();
                                                                                                                           });



                                 }

                                 elseif($diff->format("%a") < 0  && $diff->format("%a") < -3  && $order->period_expired != "-1"){


                                                     $order->period_expired = "-1";
                                                       Mail::send('mail.mail_expired', $this->data , function($message) use ($order)
                                                                        {
                                                                              $message->to($order->email ,'Bobres IPTV | Your Order About To Expire ')
                                                                              ->subject('Bobres IPTV | Your Order About To Expire ');
                                                                              $order->update();
                                                                       });


                                                 }
*/


            }


            }


            } catch (\Exception $e) {

                return $e->getMessage();
            }

            }


    function overview(){


        $this->send_email_auto_extend();
        if(\Auth::user()->name == "Said Rafiq") return redirect()->route('orders.new');
        return view('dashboard.overview');

    }


}


