<?php

namespace App\Notifications;

use App\Store;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SimpleMail extends Notification implements ShouldQueue
{
    use Queueable;

    public $simple;

    public function __construct($simple)
    {
        $this->simple = $simple;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->simple['subject'])
            ->markdown('mail.simpleemail',['simple' => $this->simple,'store'=>Store::first()]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
