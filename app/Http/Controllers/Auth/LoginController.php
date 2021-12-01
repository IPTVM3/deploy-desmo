<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Notifications\SimpleMail;
use App\Store;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = '/dashboard/overview';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('notif.welcome_title'));
        if ( $user->hasRole('user') ) {
            return redirect('/customer');
        }
        return redirect($this->redirectTo);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            //dd($user);
            $finduser = User::where('google_id', $user->id)->first();


            if($finduser){

                Auth::login($finduser);
                session()->flash('noty_color', 'success');
                session()->flash('noty_message', __('notif.welcome_title'));
                return  redirect('/customer');

            }else{
                $newUser = User::create([
                    'name' => $user->user['family_name'].'_'.$user->id,
                    'email' => $user->email,
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'google_id'=> $user->id,
                ]);
                $newUser->attachRole('user');
                if($user->user['verified_email']) $newUser->email_verified_at = Carbon::now();
                if($user->user['locale'] == 'fr' or $user->user['locale'] == 'en') App::setLocale($user->user['locale']);

                //Mail registration & notification
                NotificationController::new_user_notification_mail($newUser);

                Auth::login($newUser);

                return redirect('/customer');
            }

        } catch (Exception $e) {
            return redirect('auth/google');
        }
    }

}
