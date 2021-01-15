<?php

namespace App\Http\Controllers\Payment;

use App\Geteway;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;


class PayPalController extends Controller
{

    private $apiContext;
    private $secret;
    private $cliendId;

    public function __construct()
    {
        $this->middleware(['ability:superadministrator, edit_settings'])->only(['active_paypal','disable_paypal']);
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

    public function  active_paypal(Request $request){
        $request->validate([
            'client_account' => 'required|email',
            'api_key' => 'required',
            'secret_key' => 'required',
        ]);

        $request_data = $request->except(['_token', '_method']);

        $paypal_gateway = Geteway::create($request_data);
        Store::first()->geteways()->save($paypal_gateway);

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.paypal_active_success'));
        return redirect()->route('settings.gateway');
    }

    public function  disable_paypal(){

        $geteways = Store::first()->geteways;
        foreach ($geteways as $geteway){
            if ($geteway->type == 'PayPal'){
                $geteway->delete();
            }
        }

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.paypal_disable_success'));
        return redirect()->route('settings.gateway');
    }
}
