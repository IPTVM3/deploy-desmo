<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\NotificationController;
use App\Mail\RestPasswordValidation;
use App\Notifications\TaskCompleted;
use App\Rules\MatchOldPassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AccountsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        auth()->logout();
        return redirect('/password/reset');
        //return view('auth.reset_password_after_login');
    }

    public function  reset_password_first_login(){
        return view('auth.reset_password_after_login');
    }

    public  function update_password(Request $request){

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);


        //NOTIFICATION
        NotificationController::should_complete_profile();



        Auth::user()->fill(['password' => bcrypt($request['password'])]);
        Auth::user()->password_change_at = Carbon::now();
        Auth::user()->save();




        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));

        return redirect('/dashboard');
    }

    public function validateEmailRequest(Request $request)
    {
        if (Auth::user()->email == $request->email){
            $user = DB::table('users')->where('email', '=', $request->email)
                ->first();
            //Check if the user exists
            if (!$user->email) {
                return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
            }

            //Create Password Reset Token
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => str_random(60),
                'created_at' => Carbon::now()
            ]);
            //Get the token just created above
            $tokenData = DB::table('password_resets')
                ->where('email', $request->email)->first();

            if ($this->sendResetEmail($request->email, $tokenData->token)) {
                session()->flash('noty_color', 'success');
                session()->flash('noty_message', __('site.link_sended'));
                return redirect()->back();
            } else {
                session()->flash('noty_color', 'danger');
                session()->flash('noty_message', __('site.error_netword'));
                return redirect()->back() ;
            }}
        session()->flash('noty_color', 'warning');
        session()->flash('noty_message',  __('site.email_not_belong') );
        return redirect()->back();
    }

    private function sendResetEmail($email, $token)
    {
        //Retrieve the user from the database
        $user = DB::table('users')->where('email', $email)->select('last_name','first_name', 'email')->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);
        $name = $user->last_name.' '.$user->first_name;

        $to_name = $name;
        $to_email = $email;
        $data = array('name'=>$name , 'link' =>$link);
        Mail::send('mails.RestPasswordValidation', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                     ->subject('Rest Password Notification');
                    $message->from('chakib.phisique@gmail.com','Info Store');
                    return true;
        });
        return false;

    }

    public function resetPassword(Request $request)
    {
        //Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required|confirmed'
        ]);

        //check if input is valid before moving on
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['email' => 'Please complete the form']);
        }

        $password = $request->password;
        // Validate the token
        $tokenData = DB::table('password_resets')
            ->where('token', $request->token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
        if (!$tokenData) return view('auth.passwords.email');

        $user = User::where('email', $tokenData->email)->first();
        // Redirect the user back if the email is invalid
        if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
        //Hash and update the new password
        $user->password = \Hash::make($password);
        $user->update(); //or $user->save();

        //login the user immediately they change password successfully
        Auth::login($user);

        //Delete the token
        DB::table('password_resets')->where('email', $user->email)
            ->delete();

        //Send Email Reset Success Email
        if ($this->sendSuccessEmail($tokenData->email)) {
            return view('index');
        } else {
            return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
        }

    }
}
