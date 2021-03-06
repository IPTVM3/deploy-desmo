<?php

return [

    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => 'info.bobres@gmail.com',
    'port'       => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'info.bobres@gmail.com',
        'name' => 'Bobres Support',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => 'info.bobres@gmail.com',
    'password'   => 'cbsyxaxxftwbelbk',
    'sendmail'   => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/mail'),
        ],
    ],

];
