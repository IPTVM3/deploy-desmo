<?php

return [

    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => 'smtp.gmail.com',
    'port'       => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'contact.bobres@gmail.com',
        'name' => 'Bobres Support',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => 'contact.bobres@gmail.com',
    'password'   => 'ffhnofwrdmjeenuf',
    'sendmail'   => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/mail'),
        ],
    ],

];
