<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Dashboard\NotificationController;
use App\Notifications\SimpleMail;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Socialite;

class FacebookController extends Controller
{



    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $name_list = explode(" ", $user->getName());
            $create['first_name'] = $name_list[0] ;
            $create['last_name'] =  $name_list[1] ;
            $create['name'] =  $user->getId().'_'.$name_list[0] ;
            $create['email'] = $user->getEmail() ? $user->getEmail() : $user->getId()."@facebbok.com";
            //$create['picture'] =  $user->getAvatar() ;
            $create['facebook_id'] = $user->getId();

            $user = User::where('facebook_id', '=', $user->getId())->firstOrFail();
            if($user){
                Auth::loginUsingId($user->id);
                session()->flash('noty_color', 'success');
                session()->flash('noty_message', __('notif.welcome_title'));
                return redirect('/customer');
            }

            $userModel = new User();
            $createdUser = $userModel->addNew($create);

            //Mail registration & notification
            NotificationController::new_user_notification_mail($createdUser);

            $createdUser->attachRole('user');
            Auth::loginUsingId($createdUser->id);


            return redirect('/customer');


        } catch (Exception $e) {


            return redirect('auth/facebook');


        }
    }

}
