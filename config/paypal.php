<?php



return [

    //SANDBOX
    'sandbox.client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
    'sandbox.secret' => env('PAYPAL_SANDBOX_SECRET'),

    //LIVE
    'live.client_id' => env('PAYPAL_LIVE_CLIENT_ID'),
    'live.secret' => env('PAYPAL_LIVE_SECRET'),

    //PAYPAL SDK CONFIGURATIONS
    'settings'=>[
        'mode'=> 'sandbox',
        'http.ConnectionTimeOut'=>3000,
        'log.LongEnabled'=> true,
        'log.FileName'=>storage_path().'/logs/paypal.log',
        'log.LogLevel'=> 'DEBUG'
    ]
];