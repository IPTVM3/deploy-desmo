<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordMail extends Notification  implements ShouldQueue
{
    use Queueable;

    public $token;
    public $store;

    public function __construct($token,$store)
    {
        $this->token = $token;
        $this->store = $store;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password')
            ->markdown('mail.resetpassword',['token' => $this->token,'store'=>$this->store]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
