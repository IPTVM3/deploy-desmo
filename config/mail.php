<?php

return [

    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => 'smtp.gmail.com',
    'port'       => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'iptv21m3u@gmail.com',
        'name' => 'IPTVM3U Support',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => 'iptv21m3u@gmail.com',
    'password'   => 'pkqwyrqoyhdyuwla',
    'sendmail'   => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/mail'),
        ],
    ],

];  
