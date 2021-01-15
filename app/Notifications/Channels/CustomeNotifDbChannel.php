<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;

class CustomeNotifDbChannel
{

    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toDatabase($notifiable);

        return $notifiable->routeNotificationFor('database')->create([
            'id' => $notification->id,
            'type' => get_class($notification),
            'read_at' => null,
            //customize here
            'header' => $data['header'], //<-- comes from toDatabase() Method below
            'data' =>  $data['data'],
            'color' =>  $data['color'],
            'url' =>  $data['url'],
        ]);
    }

}