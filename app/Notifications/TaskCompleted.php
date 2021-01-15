<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskCompleted extends Notification
{
    use Queueable;

    private $notif;



    public function __construct($notif)
    {
        $this->notif = $notif;
    }

    public function via($notifiable)
    {
        return [CustomeNotifDbChannel::class]; //<-- important custom Channel defined here
    }

    public function toDatabase($notifiable)
    {
        return [
            'header' => $this->notif['header'],
            'url' => $this->notif['url'],
            'data' => $this->notif['data'],
            'color' => $this->notif['color'],
        ];
    }
}
