<?php

namespace App;

use App\Http\Controllers\Dashboard\NotificationController;
use App\Notifications\ResetPasswordMail;
use App\Notifications\TaskCompleted;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Laratrust\Traits\LaratrustUserTrait;

class User  extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'phone',
        'picture',
        'activeAccount',
        'deleted_at',
        'facebook_id',
        'google_id',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        NotificationController::password_reset_email_notification($this,$token);
    }

    public function MatchOldPassword ($value)
    {
        return Hash::check($value, auth()->user()->password);
    }

    public function isSuperAdmin()
    {
        if($this->hasRole('superadministrator')) return true;
        return false;
    }

    public function isAdmin()
    {
        if($this->hasRole('administrator') || $this->hasRole('superadministrator')) return true;
        return false;
    }
    public function isCustomer()
    {
        if($this->hasRole('user')) return true;
        return false;
    }

    //FACEBOOK
    public function addNew($input)
    {
        $check = static::where('facebook_id',$input['facebook_id'])->first();


        if(is_null($check)){
            return static::create($input);
        }


        return $check;
    }

}
