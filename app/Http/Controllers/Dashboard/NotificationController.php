<?php

namespace App\Http\Controllers\Dashboard;

use App\Notifications\ResetPasswordMail;
use App\Notifications\SimpleMail;
use App\Notifications\TaskCompleted;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class NotificationController extends Controller
{
    public function read_all(Request $request)
    {
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    public function delete_all(Request $request)
    {
        Auth::user()->notifications()->delete();
        return redirect()->back();
    }

    public static function new_user_notification_mail($user){
        $link = Config::get('app.url'). '/';
        $store = Store::first();
        $simple = [
            'subject' => $store->name.__('team'),
            'title' =>__('notif.welcome_title'),
            'body1' => __('notif.welcome_body1'),
            'body2' => __('notif.welcome_body2'),
            'btn_url' => $link,
            'btn_title' => __('notif.welcome_btn_title')
        ];
        $user->notify(new SimpleMail($simple));

        $users = User::whereHas(
            'roles', function ($q) {
            $q->where('name', 'administrator')->orwhere('name', 'superadministrator');
        } )->get();
        $notif = [
            'header' => __('notif.new_user_header') ,
            'url' => 'users.customers.index' ,
            'data' =>$user->email.', '.__('notif.new_user_body'),
            'color' => 'new_customer.png' ,
        ];
        foreach ($users as $i){
            $i->notify(new TaskCompleted($notif));
        }

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('notif.welcome_title'));

    }

    public static function password_changed_notification(){
        $notif = [
            'header' => __('notif.password_change_header') ,
            'url' => 'profile.show' ,
            'data' => __('notif.password_change_body'),
            'color' => 'setting_notif.png' ,
        ];
        Auth::user()->notify(new TaskCompleted($notif));
    }

    public static function password_reset_email_notification($user,$token){
        $notif = [
            'header' => __('notif.reset_password_change_header') ,
            'url' => 'profile.show' ,
            'data' => __('notif.reset_password_change_body'),
            'color' => 'setting_notif.png' ,
        ];
        $link = Config::get('app.url'). '/password/reset/' . $token;
        $user->notify(new TaskCompleted($notif));
        $user->notify(new ResetPasswordMail($link,Store::first()));


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('notif.verfied_email_link_send'));
    }

    public static function should_complete_profile(){
        $notif_password= [
            'header' => __('notif.complete_profile_header') ,
            'url' => 'profile.show' ,
            'data' => __('notif.complete_profile_body'),
            'color' => 'warning_notif.png' ,
        ];
        Auth::user()->notify(new TaskCompleted($notif_password));
    }

    public static function should_complete_store(){
        $notif_store = [
            'header' => __('notif.complete_store_header') ,
            'url' => 'settings.store' ,
            'data' => __('notif.complete_store_body'),
            'color' => 'warning_notif.png' ,
        ];
        Auth::user()->notify(new TaskCompleted($notif_store));
    }



}
