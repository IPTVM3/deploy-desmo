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
                
                "PAYPAL MIMO",
                "Adgp471Afe81Sa8Ed4lH58osYyI1dRWTKeccGe28YoRb_sKI_ge_N0Sr4v3HBN_oOZsRe-4lhZAbEkwL"
            ),
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
                "PAYPAL AFS4-rsebelljefferey",
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
            ),
            array(
                "PAYPAL IS4-LUKSICIVAN22",
                "AZvEbA7oyIEEuQDgMogWMxCfFEqYkjzoElNIjdiBJ7tmNWibM_f7casnibVzn_Deuht-Ln2CXlMlrHIf"
            ),
            array(
                "PAYPAL IS4'-ASONGANYIDERICK44",
                "AVtspBiCXebkVXN-mLei2oQVilaUFMxmU-NjbHOu1Gc6FMBix-PQd72YAjAATbw5rUMLbvhotmdQne8l"
            ),
            array(
                "PAYPAL AF4'-alexmorgarn22",
                "AZM7slo0aw9cQm_00nmem2hrVbYSfqzgVHE5Gb05g4YZP1dWydUFiAuJCUNdFDVlvlmrc1rrY3fEs1US"
            ),
            array(
                "PAYPAL AF4'-soumanmouha",
                "AQj0mrtlF0A1PkL5Lq_1FRSheKKV1XAti5ddhRRTL_Vm7iFvtuC4fkFPWNlFEPtLmDUaCTsbbLrd70q8"
            ),
            array(
            "PAYPAL US4'-jemesherman33",
            "AdyB-Uf6ch5U8k_T7ts_lFnNBTuKPGKMiOnQg3pjftZdjOi1gLQcVDFP8fSspo4UaNkSXYSprDlqhf7i"
        ),
        array(
            "PAYPAL US4'-juliegonzalez08",
            "AZ2fIwojPft071Vj58LHLUE77LFudHgKt0ay9Z16pxJ5K_peM0SPMZW264ouh4ye-JS0fw2LJkEV5Q-f"
        ),
        array(
            "PAYPAL US4-luchanskaaglika57",
            "AX5X_aaVLHJy8GUDRLpgM_QINDbh_ZDzUhepRwlVwyWnCsXAfnzO2X25E5A_YmyEICZAjwxjsjKDmR0d"
        ),
        array(
            "PAYPAL US4-naydenova13",
            "AeCPjE3EH2JRsIFKafa2fCHzpiDvtgK4abA_5QaFZPXWakGE1JCP6WE5XFFcnlMRWhMKPBdck_D_IsuY"
        ),
        array(
            "PAYPAL US4-stoichkovdimitar34",
            "AdkL3tJgwD9yc6bdIpOOCnr4CCfsOoK7_feNmggJ5w2YSvsxANmHN8dMgBvb6MUCwVxDSTek4lXgyts9"
        ),
        array(
            "PAYPAL SW4-SHEEHANPAULMICHAEL34",
            "AUpVu-u6aev7TzLiVRvHyp4kFQw-pIVvtyxS0542aleNPhmcUGc5jJaw0FdLzYSrOD5zifC8VakO8Nol"
        ),
        array(
            "PAYPAL SA4-endykaliiop",
            "AYct4PBi4hTbATjsMD4x1B4nmtCvFs2oeRtAes4O3rZ7YgCAuTlBpCANSwSZMetAuN4824civpfBHNo6"
        ),
        array(
            "PAYPAL SA4-adedeasaue",
            "AZtmWm4hBP41Snmh6osaNT2o5puj6a72XnY0nzi4GtMl4ru8d9PezL3Z1ZNnOIpdY7sNJE_yYJe6gOUC"
        ),
        array(
            "PAYPAL ARG4D-jonathan.reusela",
            "AWT4ke9OZGutwUfjn--gGSskRVuIQXC07U7TITm_twscExlJpiR_Dp0EKbLPEK8BGL_qQaiJnBMqWuwB"
        ),
        array(
            "PAYPAL SW4-ngcheunsee63r5",
            "ATyRft5uJqPkILsR5T_TjwTyKkS6UyIgCWDgFhQiZhOjQeWd8Uo1B4hbskc3vlss9rV0rmEDfNjX8mHY"
        ),
        array(
            "PAYPAL SA4-louzatariik",
            "AcnZ_On6MJGPP2nhyFriYV2J95WCjZYtaY157AGUsrlQ7O-1mWDYel-dB25Xew2TgEowivtoNazWqhZ7"
        ),
        array(
            "PAYPAL SW4-richfield3r45",
            "AWs-i36d7I9pXX9oIPvAn7VdNVe6l34RNFbkIZQJ9y26MzzH1YDa9BYbFKCU1PdwlBXCkzKL4nxS4EKA"
        ),
        array(
            "PAYPAL SW4-nuguidjaeallen6r5",
            "AfPlAt5AvbTzOxxmTqrK-i5KGLDbc9k3Kf12GJJ3NzWwj8aAHQHCZEfzjnSkqjIhZpk26yIHDbdwggEG"
        ),
        array(
            "PAYPAL uK4-mohammedoubadi21",
            "AbF8sU0WvKcV7Yz3nDSZLINS9_kcBjleuk7JGN-i7qy2CcltFVinilz4SximhcyQra0ilsToF3Y1uZj1"
        ), 
        array(
            "PAYPAL PH4D-Vasiliollilis105",
            " Ab7OMiAOrFvMINlXUyo20hO75KlpA0eLF92kBuGtZxoWtP0IiksQA4GgfyiuqqoqNfVpzBbzrBdp8RKO"
        ),
        array(
            "PAYPAL 4D-greyson.brock820",
            " AVbCYC4EFtoI9z_KOqswa55bU3C9LW6mrzJHkC8IIjhEH7erksgduhcWjgE4L-1NdcddrXsqyd1X4SDs"
        ),
        array(
            "PAYPAL F4D-Nicolas.george90",
            "ATUmoC-rwrlR6yXLeW8rJh2wX-T-tAE3lPUll-L2zoQl3GLT9tlqKs-rh-Jl2TIXs6fqqoxINSBXIu4g"
        ),
        array(
            "PAYPAL CD4-Jacop.peoples3021",
            "Ac36s950TzBZGd_shIwQAlSCF7QI9jK667PLvpN2H4XotclNlcmtWrOlm0M7Q3ce8M_JITdSPRVokJg4"
        ),
        array(
            "PAYPAL CD4-Sergio.howell5319",
            "AYYpketcy82Byy0xFF9e4p1n9-JmhCALGaTU3O2Z0tDCKErG0Wzm577bvP70sttgfnSp_N9rr-Wohmg8"
        ),
        array(
            "PAYPAL AF4-jacquelinebooker22",
            "ARRPo4aTqd5-PR_4EMU4kek1WIiIWsfjZQSYHdy5Y7nRvJQizH_pFwAcdZ-vmO1j0qtnE5gYf6PU04QF"
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
