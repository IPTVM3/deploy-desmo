<?php

namespace App\Http\Controllers\Payment;

use App\Geteway;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:superadministrator, edit_settings'])->only(['active_stripe','disable_stripe']);
        /*
        if (config('paypal.settings.mode') == 'live'){
            $this->cliendId = config('paypal.live.client_id');
            $this->secret = config('paypal.live.secret');
        }else{
            $this->cliendId = config('paypal.sandbox.client_id');
            $this->secret = config('paypal.sandbox.secret');
        }
        $this->apiContext = new ApiContext(new OAuthTokenCredential($this->cliendId, $this->secret));
        $this->apiContext->setConfig(config('paypal.settings'));
        */
    }

    public function  active_stripe(Request $request){

        $request->validate([
            'api_key' => 'required',
            'secret_key' => 'required',
            'type' => 'required',
            'mode' => 'required',
        ]);

        $request_data = $request->except(['_token', '_method','token_key']);

        $stripe_gateway = Geteway::create($request_data);
        $stripe_gateway->api_key = $request['api_key'];
        $stripe_gateway->secret_key = $request['secret_key'];
        $stripe = Store::first()->geteways()->save($stripe_gateway);


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.stripe_active_success'));
        return redirect()->route('settings.gateway');

    }

    public function  disable_stripe(){


        $geteways = Store::first()->geteways;
        foreach ($geteways as $geteway){
            if ($geteway->type == 'Stripe'){
                $geteway->delete();
            }
        }

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.stripe_disable_success'));
        return redirect()->route('settings.gateway');

    }
}
