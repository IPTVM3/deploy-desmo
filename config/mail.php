<?php

return [

    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => env('MAIL_HOST', 'smtp.gmail.com'),
    'port'       => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'ehigh.store@gmail.com',
        'name' => env('MAIL_FROM_NAME', 'Bobres Support'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => 'ehigh.store@gmail.com',
    'password'   => 'vezafxlzvcbjrppb',
    'sendmail'   => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/mail'),
        ],
    ],

];
