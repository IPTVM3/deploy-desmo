<?php

namespace App\Http\Controllers\Dashboard;

use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetewayController extends Controller
{
    public function index(){
        $store = Store::first();
        $geteways = $store->geteways;
        return view('dashboard.settings.geteway', compact(['store','geteways']));
    }

    public function paypal(){
        $store = Store::first();
        $geteways = $store->geteways;


       


            $paypal = array(
                array(
                    "re-cod.com",
                    "AbS2vbSL9rKbJXruUK2xWgb4yN4Qb7ULNLeJzC2ELWsEfB49xUn92nvQJEnm1giIZFZJY4vAMDkWe6Rf"
                ),
                array(
                    "ora-market.com",
                    "AR-LyFrg4mz5axs92W5NUYw5VEe_Z5GzJmwyQI6QF9vfYlZGKAng0PoAPciT41J67TxPpb4ZV_36EL_v"
                )
              );
          

        return view('dashboard.settings.paypal', compact(['store','geteways','paypal']));
    }

    public function paypal_change(Request $request){
        $store = Store::first(); 
        $store->unit_system = $request->client_id;  
        $store->update();
        return redirect()->route('settings.paypal');
    }
    

    
}
