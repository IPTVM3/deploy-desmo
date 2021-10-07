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
                    "paypal hemza maroc",
                    "AYJp58GxGCHrV-Q7vVxliZhtdNbOX7yWG4jQfhIyQy5dkg6RsIkeEYwEUQ1UXoNYkL-2EpdFp6D41maN"
                ) 
                ,
                array(
                    "paypal bnbihi",
                    "AdfAF_Et7FsT0XaFiRnojjSByq-ShnQkULfe1xQyR-HNYRNAUAdKXLr__JRLMb5FNnqz5pF260LY9tYd"
                )

                ,
                array(
                    "paypal khadija (pplkhadija@outlook.com)",
                    "AZSLDfjLfrBacuVmkOIjUA9vFGiVHgSkuO3yluX6l9_hpNigAkLacz_UpZ3kjCc6Mx8O0mkzIIkzS2st"
                )

                ,
                array(
                    "paypal chafik (paypal chafik)",
                    "AWhPhTxl4gtr9ArEL4lN_-i_59ZF-h1KxQaPbIVLSNprWOnalZk2RocAvc67HPC8Bj-j9L4vxKw-e1-O"
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
