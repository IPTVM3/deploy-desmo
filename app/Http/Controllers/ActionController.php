<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\NotificationController;
use App\Notifications\TaskCompleted;
use App\SocialMedia;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class ActionController extends Controller
{

    public static function imageUpload(Request $request, String $name_file)
    {

        if ($request->hasFile($name_file)) {  //check the file present or not
            $bfItemPic = $request->file($name_file);
            $filename = time() . '.' . $bfItemPic->getClientOriginalName();
            Image::make($bfItemPic)->resize(250, 250)->save(public_path('/img/' . $filename));


            return $filename;
        }
    }

    public static function unlinkImage(String $old_path_image){
        if($old_path_image != "" and (strpos($old_path_image, 'avatar.jpg') === false)) {
            unlink(public_path('img/') . $old_path_image);
        }

    }



    //FORCE FOR FIRST ADMINISTRATOR LOGIN TO CONFIGURED STORE
    public function force_first_congfig_store(){
        if (Store::findOrFail(1)->configured_at == null)
        {
          return  view('dashboard.settings.force_config_store');
        }
        return redirect('/dashboard');
    }

    public function valide_config_store(Request $request){

        $request->validate([
            'name' => 'required',
            'legal_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric' ,
            'fix' => 'required|numeric' ,
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'timezone' => 'required',
            'currency' => 'required',
            'unit_system' => 'required',
            'logo' => 'max:2048',
        ]);


        //IMAGE
        $file_name = null;
        $exept_fields = ['_token', '_method'];
        if ($request->logo == null) {
            $exept_fields[2] = 'logo';
        } else {
            $file_name = ActionController::imageUpload($request, 'logo');
        }
        $request_data = $request->except($exept_fields);
        if ($file_name) $request_data['logo'] = $file_name;


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
        $store->socialmedias()->saveMany($social_list);

        //NOTIFICATION
        NotificationController::should_complete_store();


        //SAVE
        $store->update($request_data);

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect('/dashboard');
    }

    //LOGOUT
    public function logout()
    {
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('notif.goodby_title'));
        auth()->logout();
        return redirect('/');
    }
}
