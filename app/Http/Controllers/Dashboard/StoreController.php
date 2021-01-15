<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\ActionController;
use App\SocialMedia;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }

    public function index()
    {
        $store = Store::findOrFail(1)->first();
        //if(!$store->policy) 
        return view('dashboard.settings.store',compact('store'));
    }


    //EDIT STORE INFORMAIONS - GENERAL DETAILS - FORMATS & STANDARD - SOCIAL PROFILES
    public function  edit_general_details(Request $request){

        $request->validate([
            'name' => 'required',
            'legal_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric' ,
            'fix' => 'required|numeric' ,
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'logo' => 'max:2048',
        ]);

        $old_image = null;
        $file_name = null;
        $exept_fields = ['_token', '_method'];
        if ($request->logo == null) {
            $exept_fields[2] = 'logo';
        } else {
            $file_name = ActionController::imageUpload($request, 'logo');
            $old_image = Store::first()->logo;
        }


        $request_data = $request->except($exept_fields);
        if ($file_name) $request_data['logo'] = $file_name;

        $store = Store::findOrFail(1);
        $store->bio_desc = $request->bio_desc;
        $store->update($request_data);

        if($old_image) ActionController::unlinkImage($old_image);

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect('/dashboard/settings/store');
    }
    public function  edit_format_standard(Request $request){
     

        //$request_data = $request->except(['_token', '_method']);
        $store = Store::findOrFail(1);
        $store->unit_system = $request->unit_system;
        $store->update();

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect('/dashboard/settings/store');
    }
    public function  edit_social_profiles(Request $request){
        $request->validate([
            'social' => 'required',
        ]);

        //GET STORE OBJECT
        $store = Store::findOrFail(1);
        $store->configured_at = Carbon::now();

        //SOCIAL PROFILES
        $social_list = [];
        if ($request->social){
            foreach ($request->social as $index => $item){
                if(preg_match("/facebook.com/i", strtolower($item))) {
                    $social_list[$index] = SocialMedia::create([ 'type'=> 'facebook', 'address'=> $item  ]);
                }elseif (preg_match("/instagram.com/i", strtolower($item))){
                    $social_list[$index] = SocialMedia::create([ 'type'=> 'instagram', 'address'=> $item  ]);
                }elseif (preg_match("/twitter.com/i", strtolower($item))){
                    $social_list[$index] = SocialMedia::create([ 'type'=> 'twitter', 'address'=> $item  ]);
                }elseif (preg_match("/pinterest.fr/i", strtolower($item))){
                    $social_list[$index] = SocialMedia::create([ 'type'=> 'pinterest', 'address'=> $item  ]);
                }

            }
        }

        $store->socialmedias()->delete();
        $store->socialmedias()->saveMany($social_list);


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect('/dashboard/settings/store');
    }

    //EDIT STORE POLICY
    public function edit_store_policy(Request $request){


        $exept_fields = ['_token', '_method'];
        $request_data = $request->except($exept_fields);

        $store = Store::first();
        $policy = $store->policy;

        $policy->update($request_data);


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect('/dashboard/settings/store');
    }
}
