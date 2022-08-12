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
                "PAYPAL AFS4-loschebenjamin242",
                "ARxJXKriozMdRPM6yGbcYQeJvNDojddm9yFvEZYnHHNrgmBinY1PjO7EhmSMoSuQXMuMG20NSLk8Bneg"
            ),
            array(
                "PAYPAL AFS4-wilsonlee1973",
                "AfksiIjKgl_igwXqq_Dgl3vqADjGMc8aqRuPR-qLHqjUg1Wkzwm2h1nOJO1rhXxRM6MyxF9kH0WKnMKl"
            ),
            array(
                "PAYPAL AFS4-danialliuno1977",
                "AUldKZu4mHrfABsZg1OUhd4fK5yY6dc_PkbYbQtzuK1hRZ_YkVqhXX3U0Sed1A0-hnEUtJfW_jNvg8mz"
            ),
            array(
                "PAYPAL AFS4-vandenbergan",
                "AZuSVmD4iGwYVT0euJrAChg1zkUf7YsvJeDQilLhBA3OWvFxu7RfD9Qke83mPUu0fRhAGdfSMBhdDP7n"
            ),
            array(
                "PAYPAL MAR-elmazadi22anour",
                "AWcu5_BMx4DX4H2NgwcqruTvxDHRzOx8nPu-zs7soh8x7cGbCvrkSh6q-JQTshBJ0q9MCbtlFkEeDsc8"
            ),
            array(
                "PAYPAL MAR-medbaha2121",
                "AYW10kP1zIfSxEvdN0EeYV2vhmTX4BWvL57wWkXfTQXkm1lHgHRENgMMpFpk5HdUQqOY19Ey45qWtfEG"
            ),
            
            array(
                "PAYPAL MAR-zboklbok01",
                "AccF8iqMqP7qXSyd6wg3lsKM2ToIDFgifqkak2OI6tIc8flPs8u_ybwC-TPToeZ_wUi4nmTzY0Ih4Zlg"
            ),
            array(
                "PAYPAL AFS4-sebelljefferey",
                "ATxlaP73U7VQSkbGTVB0KxodwuHtfB8EIKDsvIBIp1loUcDHeOYb_OFQuJjw6bujJ0GDLBdUu8hJ15NT"
            ),
            array(
                "PAYPAL AFS4-rustamoveldar",
                "AcELGNUhlTwRzDn_y-zDw0BKrpDcTolb1dz_ZAX-BI5BDMkKpSqy08S6Bbq6PvC0Nq4x-gqIqjPhACxk"
            ),
            array(
                "PAYPAL M4-marouaneguerrach0",
                "AXKBl6IeKSRFRpA_8U2s7UAuMISeCIYoxDz4fMq3EbX0CfxItc1kBqpHsXy_IEb0sp7Tt0m1CoFVPPWi"
            ),
            array(
                "PAYPAL CA4-my.buslove23",
                " AcTT4D-4tqBmewm4clrOkDmp18PTpl9l7sL1kmMPV9t9_SchgvYA0wk4yQgfTlwjevqLCuOzPSe75uhm"
            ),
            array(
                "PAYPAL AF4-petrovdimitar65",
                "Ac4vHSazCVy_i9bwLFt0pdMUmwkOG5y_TLnWIara6wFBZNmyiNH3VqD1I4UZcBZ_JaMwchfWO9XmXHTj"
            ),
            array(
                "PAYPAL AF4-asenovaleksanar11",
                "AYBSj_EQdZJ5m4YOl1Ss04qAQbv43Q_RID-Ffu1EscLeCQw-lqkGLFgtPkahzd6cork1KNoRwDEjI1X0"
            ),
            array(
                "PAYPAL AF4-Rustenburg8",
                "ARDmNE0j1qJelSO1-5t_p5LE7eST_iwJoa52GerfTyX78gCHUOvAk59FcHTtvqqVmKcbhWQCmH2JBcZM"
            ),array(
                "PAYPAL AF4-LUKSICIVAN22",
                "AZvEbA7oyIEEuQDgMogWMxCfFEqYkjzoElNIjdiBJ7tmNWibM_f7casnibVzn_Deuht-Ln2CXlMlrHIf"
            ),
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
