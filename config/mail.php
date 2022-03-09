<?php

return [

    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => 'smtp.gmail.com',
    'port'       => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'service.lordlyiptv@gmail.com',
        'name' => 'LordlyIPTV Support',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => 'service.lordlyiptv@gmail.com',
    'password'   => 'vevdjncmszhvkcyi',
    'sendmail'   => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/mail'),
        ],
    ],

];
