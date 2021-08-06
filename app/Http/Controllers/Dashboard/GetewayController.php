<?php

namespace App\Http\Controllers\Dashboard;

use App\Geteway;
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
                    "MOROCCO PAYPAL (chakib.mayen@gmail.com)",
                    "AbS2vbSL9rKbJXruUK2xWgb4yN4Qb7ULNLeJzC2ELWsEfB49xUn92nvQJEnm1giIZFZJY4vAMDkWe6Rf"
                ),
                array(
                    "PPLMAROC 3 (pplmaroc3@outlook.com)",
                    "AVFpw_weyQPl1mu9499iT678qEguMUGBt-qRX6WtIjd882FRvJYAUtih5oYpuRexaThkOhkRWGn9P8XP"
                )
            ,
                array(
                    "PPLMAROC 2 (pplmaroc2@outlook.com)",
                    "AQ2Exy1ssF5qRpK5wt0PYptuIsyjKnmS7NClVVBOwS2quqR2G5G4-5yRGUvOw2gYs2lqd3iLeSsknO6J"
                )
            ,
                array(
                    "PPLMAROC 7 (pplmaroc7@outlook.com)",
                    "AUDYODHm4kDZfR8J66MRYkXUpWW8W-F3WDmE7u0E1u0-LkdTquLrKcHiTbJp3ybnf3ngpCpJmcjQj2cG"
                )
            ,
                array(
                    "UK 1 (howells.kate.97@gmail.com)",
                    "AevrKMEYncxar9TGOi63wElDkPSHp5rmnnDs9ql5bLnb3qyE1d5IU8rkLBbg6HEON2FsfHv44VyKrpqH"
                )

            ,
                array(
                    "GERMANY 2 PAYPAL (Pplgermany2@outlook.com)",
                    "AU0Qm0Q_4BGtHVXtANBpB5-DArCZ63M9sue4GecE7eQyD74gmcKTny-QYj6rCYmV-o2n8bmB1EOE8WfE"
                )
 
              );
          

        return view('dashboard.settings.paypal', compact(['store','geteways','paypal']));
    }

    public function paypal_change(Request $request){
        $store = Store::first();

        if($request->operation_delete == 'operation_delete') {
                $mygetGeteway = Geteway::find($request->client_id);
                $lastgetway = Geteway::all()->last();
                $mygetGeteway->delete();
                if($lastgetway->id != $mygetGeteway->id){
                    $lastgetway->id = $request->client_id;
                    $lastgetway->update();
                }
                $store->unit_system = 1;
            $store->update();
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.deleted_success'));
        }

        if($request->operation_create == 'operation_create') {
            $id = Geteway::all()->last()->id + 10;
            $getos = Geteway::create();
            $getos->client_account = $request->name;
            $getos->api_key = $request->api_key;
            $getos->mode = "https://www.re-cod.com";
            $getos->id = $id;
            $getos->is_active = 1;
            $getos->store_id = 1;
            $store->unit_system = 1;
            $store->update();
            $getos->update();
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.added_success'));
        }
        return redirect()->route('settings.paypal');
    }
    

    
}
