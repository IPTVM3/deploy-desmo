<?php

use App\Frais;
use App\MailList;
use App\Order;
use App\Trial;
use App\User;
use App\Review;
use App\Visitor;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 

Route::post('/checkout/paypal/order/completed', 'API\PaymentController@completed');
Route::post('/sendmail', 'API\PaymentController@sendMail');
Route::post('/contact/message', function (Request $request){ 


    $message = \App\Review::create();
    $message->by = $request['email'];
    $message->ordernumber = $request['order_number'];
    $message->body = $request['message'];
    $message->subject = $request['subject'];
    $message->update();




    return Response::json([
        'isSuccessful'=> true
    ], 200);
});
 
Route::POST('/register', function (Request $request) {
   $user = null;
 
   try {
        if(\App\User::where('email', '=', $request['email'])->first()){
            return Response::json([ 
                'isSuccessful'=> false,
                'user' => null,
                'message' => 'user Already Exist'
            ], 200);  
        }
        $user = \App\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]); 
        //$user->attachRole('user');
         
        return Response::json([ 
            'isSuccessful'=> true,
            'user' => $user,
            'message' => 'User Created'
        ], 200);   
         
      
  
   } catch (\Throwable $th) {
        $isSuccess = false;
        if($user) return Response::json([ 
                    'isSuccessful'=> true,
                    'user' => $user,
                    'message' => 'Welcome'
                ], 200); 
 
   }
   
});
 
 
 

 
 
 
Route::POST('/login', function (Request $request) {

   
    
    $user = \App\User::where('email', '=', $request['email'])->first();
    $status = Hash::check($request['password'], $user->password);
    if($status) return Response::json([ 
                            'isSuccessful'=> true,
                            'user' => $user,
                            'message' => 'Welcome '.$user->name
                        ], 200); 
    
    return Response::json([ 
        'isSuccessful'=> false,
        'user' => null,
        'message' => 'Email Or Password Incorrect !'
    ], 200);   
});

Route::POST('/orders/create', function (Request $request) {

     $order = Order::create();
     $order->email = $request->email;
     $order->productName = $request->productName;
     $order->card_number = $request->country;
     $order->total = $request->total;
     $order->status = 0;

     switch ($request->total) {
        //ONE MONTH
     case "18.99":
       $order->period_sub_days = 30;
       break;
       //6 MONTHS
     case "48.99":
       $order->period_sub_days = 183;
       break; 
     case "39.99":
         $order->period_sub_days = 183;
         break;
         //3 MONTHS
     case "39.97":
         $order->period_sub_days = 91;
         break;  
     case "29.98":
         $order->period_sub_days = 91;
         break; 
         //ONE YEAR
     default:
       $order->period_sub_days = 365;
   }

     $order->update();

    return Response::json([
        'isSuccessful'=> true,
        'order' => $order,
        'message' => 'Order Created'
    ], 200);
});

Route::get('/orders', function () {
    $orders = Order::orderBy('created_at','desc')->get();
    return response($orders, 200)
        ->header('Content-Type', 'application/json');
});


Route::get('/orders/size', function (Request $request) { 
    $orders = Order::orderBy('created_at','desc')->paginate($request->size);
    return response($orders, 200)
        ->header('Content-Type', 'application/json');
});

Route::get('/orders/cases', function (Request $request) {
    $cases = Order::where('case','=','opened'); 
    return response($cases, 200)
        ->header('Content-Type', 'application/json');
});


Route::get('/orders/search', function (Request $request) {

        $orders = Order::where('email', $request->txt)
                             ->orWhere('email', 'like', '%' . $request->txt . '%')
                             ->orWhere('zip', 'like', '%' . $request->txt . '%')
                             ->orWhere('id', 'like', '%' . $request->txt . '%')->get();
    return response($orders, 200)
        ->header('Content-Type', 'application/json');
});

Route::get('/orders/getone', function (Request $request) {

    $order = Order::findOrFail($request->id);
    return response($order, 200)
        ->header('Content-Type', 'application/json');
});

Route::post('/orders/completed', function (Request $request) {
    $order = Order::findOrFail($request['id']);
    $data = [];

        if($request->m3u != "" and $request->mac == ""){
            $query = parse_url($request->m3u, PHP_URL_QUERY);
            parse_str($query, $params);
            $username =  $params['username'];
            $password =  $params['password'];

            $parse = parse_url($request->m3u);
            $base = $parse['host'];
            $port = parse_url($request->m3u, PHP_URL_PORT);
            if($port) $base = $base.':'.$port;

            $order->support = $base;
             $data = [
                     'id' => $request->id,
                     'email' => $request->email,
                     'm3u' => $request->m3u,
                     'username' => $username,
                     'password' => $password,
                     'host' => $base,
                     'local' => $order->card_number,
             ];


              Mail::send('mail.order_m3u', $data , function($message) use ($request)
                 {
                   $message->to($request->email ,'Bobres IPTV | N21-'.$request->id)->subject('Bobres IPTV | N21-'.$request->id);
               });



        }else{

            $order->support = $request->portal; 
            $data = [
                  'id' => $request->id,
                  'email' => $request->email,
                  'mac'=> $request->mac,
                  'portal' => $request->portal,
                  'local' => $order->card_number,
            ];

            Mail::send('mail.order_mag', $data , function($message) use ($request)
             {
                  $message->to($request->email ,'Bobres IPTV | N21-'.$request->id)->subject('Bobres IPTV | N21-'.$request->id);
            });
        }
        $order->exp_date = Carbon::now();
        $order->mac = $request->support;
        $order->update();


     return response([
       'isSuccessful'=> true,
       'message' => 'Order Completed'
     ], 200)->header('Content-Type', 'application/json');

});

Route::delete('/orders/delete', function (Request $request) {

    Order::find($request->id)->delete();
     return response([
       'isSuccessful'=> true,
       'message' => 'Order Deleted'
     ], 200)->header('Content-Type', 'application/json');
});

Route::get('/orders/submited', function (Request $request) {

    $order = Order::findOrFail($request->id);
    $order->exp_date = Carbon::now();
    $order->mac = $request->support;
    $order->update();

     return response([
       'isSuccessful'=> true,
       'message' => 'Order Submited'
     ], 200)->header('Content-Type', 'application/json');
});


Route::get('/orders/notify', function (Request $request) {

    $order = Order::find($request->id);
    $local = "en";
        if($order->card_number) $local = $order->card_number;

        $data = [
         'email' => $order->email,
         'order' => $order->id,
         'price' => $order->total,
         'local' => $local,
         ];


        Mail::send('mail.mail_undone', $data , function($message) use ($request) {

            $message->to($request->email ,'Bobres IPTV | N21-'.$request->id)->subject('Bobres IPTV | N21-'.$request->id);
        });

     return response([
       'isSuccessful'=> true,
       'message' => 'Cutomer Notifyed'
     ], 200)->header('Content-Type', 'application/json');
});


Route::get('/messages', function (Request $request) {
    $reviews = Review::orderBy('created_at','desc')->get();
    return response($reviews, 200)
        ->header('Content-Type', 'application/json');
});

Route::get('/messages/size', function (Request $request) {
    $reviews = Review::orderBy('created_at','desc')->paginate($request->size);
    return response($reviews, 200)
        ->header('Content-Type', 'application/json');
});

Route::post('/messages/send', function (Request $request) {
         $data = [
             'email' => $request->email,
             'question' => $request->oldmessage,
             'answer' => $request->newmessage
         ];

        Review::find($request->id)->delete();

        Mail::send('mail.mail_answermessage', $data , function($message) use ($request) {

            $message->to($request->email ,'Bobres IPTV About Your Question')->subject('Bobres IPTV ');
        });

});

Route::get('/messages/getone', function (Request $request) {

    $order = Review::findOrFail($request->id);
    return response($order, 200)
        ->header('Content-Type', 'application/json');
});


Route::get('/trials', function () {
    $trials = Trial::orderBy('created_at','desc')->get();
    return response($trials, 200)
        ->header('Content-Type', 'application/json');
});

Route::get('/maillist', function () {
    $maillist = MailList::orderBy('created_at','desc')->get();
    return response($maillist, 200)
        ->header('Content-Type', 'application/json');
});

Route::get('/frais', function () {
    $frais = Frais::orderBy('created_at','desc')->get();
    return response($frais, 200)
        ->header('Content-Type', 'application/json');
});

    function getAmountNet($orders){
                $valueOfRowMetrial = 17;
                $todayOrders = 0;
                foreach($orders as $key => $order){
                    $todayOrders = $todayOrders + ($order->total - (0.35 + ($order->total * 4.4 / 100 )));
                    if($order->total == '59.98' or $order->total == '49.99') $todayOrders = $todayOrders - $valueOfRowMetrial;
                    if($order->total == '48.99' or $order->total == '39.99') $todayOrders = $todayOrders - $valueOfRowMetrial/2;
                    if($order->total == '39.97' or $order->total == '29.98') $todayOrders = $todayOrders - $valueOfRowMetrial/3;
                    if($order->total == '99.98') $todayOrders = $todayOrders - $valueOfRowMetrial*2;
                    if($order->total == '69.99') $todayOrders = $todayOrders - $valueOfRowMetrial+4;
                }
                return $todayOrders;
            }

Route::get('/overview','API\PaymentController@index' );



Route::get('/products', function () {
  
    $products = [
        [
           'productId'=>'1001',
           'productCategory'=> 'Android Box',
           'productDescription'=>'La Nvidia Shield TV est une nouvelle version du boîtier multimédia sous Android TV avec un format compact. Elle est équipée d\'un SoC Nvidia Tegra X1 équipé d\'un GPU Custom par Nvidia et elle permet de diffuser des contenus en 4K HDR avec une compatibilité Dolby Vision et Dolby Atmos.',
           'productName'=> 'Nvidia Shield TV',
           'productImage'=> 'https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/10/nvidia-shield-tv-frandroid-2019.png?resize=580,580',
           'productStock'=> true,
           'productPrice'=> '154.389',
           'salePrice'=> '129.389'
        ],
        [
           'productId'=> '1002',
           'productCategory'=> 'Android Box',
           'productDescription'=>'La Xiaomi Mi Box S est une mise à jour mineure de la célèbre box Android TV. Elle profite d\'une intégration directement dans la télécommande, un bouton Netflix sur celle-ci et un nouveau SoC Amlogic S905X épaulé par 2 Go de RAM. Elle tourne à sa sortie sous Android TV 8.1 Oreo.',
           'productName'=> 'Xiaomi Mi Box S',
           'productImage'=> 'https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/04/xiaomi-mi-box-s-2018.png?resize=580,580',
           'productStock'=> true,
           'productPrice'=>'69.4',
           'salePrice'=> '52.4'
        ],
        [
           'productId'=> '1003',
           'productCategory'=> 'Android Box',
           'productDescription'=>'La Amazon Fire TV Stick 4K est une box TV (à l\'image de l\'Apple TV 4K ou de la Nvidia Shield TV) avec un format réduit similaire aux Chromecast de Google. Elle embarque une télécommande à reconnaissance vocale (via Alexa). Elle est compatible avec les contenus HDR (HDR 10, HDR 10+ et Dolby Vision) et avec la technologie de virtualisation Dolby Atmos.',
           'productName'=> 'Amazon Fire TV Stick 4K',
           'productImage'=> 'https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/09/amazon-fire-tv-stick-4k-2019-frandroid.png?resize=580,580',
           'productStock'=> false,
           'productPrice'=> '45217.58',
           'salePrice'=> '9043.516'
        ],
        [
           'productId'=> '1004',
           'productCategory'=> 'Chromecast',
           'productDescription'=>'Le Google Chromecast avec Google TV (ou Chromecast 4) est une évolution de la gamme annoncée en septembre 2020. Il reprend la formule introduite par le Chromecast en offrant la possibilité de diffuser des contenus sur sa TV depuis son téléphone, mais en y ajoutant une télécommande associé à l\'interface Google TV. Celle-ci permet de naviguer dans l\'interface pour lancer des programmes et de faire appel à Google Assistant',
           'productName'=> 'Google Chromecast',
           'productImage'=> 'https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/09/google-chromecast-avec-google-tv-frandroid-2020.png?resize=580,580',
           'productStock'=> false,
           'productPrice'=> '52.99',
           'salePrice'=> '50.197'
        ],
        [
           'productId'=> '1005',
           'productCategory'=> 'Chromecast',
           'productDescription'=>'e Google Chromecast 3 a été annoncé le 9 octobre 2018 par Google. Comme son prédécesseur, il offre une solution pratique pour diffuser des contenus sur sa télévision via son smartphone ou son ordinateur en HDMI qui est présente nativement sur Android et iOS dans de nombreuses applications (Netflix, YouTube, etc).',
           'productName'=> 'Google Chromecast 3',
           'productImage'=> 'https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/04/google-chromecast-3.png?resize=580,580',
           'productStock'=> false,
           'productPrice'=> '39.85',
           'salePrice'=> '30.85'
        ],
        [
           'productId'=> '1006',
           'productCategory'=> 'Apple Tv',
           'productDescription'=>'L\'Apple TV 4K est la nouvelle interaction du média center d\'Apple. Comme son nom l\'indique, elle est compatible HDR & 4K et dispose d\'un SoC A10X Fusion.',
           'productName'=> 'Apple TV 4K',
           'productImage'=> 'https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/04/apple-tv-4k.png?resize=580,580',
           'productStock'=> true,
           'productPrice'=> '993.331',
           'salePrice'=> '918.9329'
        ],
        [
           'productId'=> '1007',
           'productCategory'=> 'Mag',
           'productDescription'=>'MAG322 is a powerful set-top box containing a high-performance processor on the BCM75839 chipset, and 512MB RAM. It’s the optimal solution for quick launch of your IPTV/OTT project. MAG322w1 is a version with a built-in Wi-Fi module of 802.11 b/g/n standard. This modification enables users to establish a network connection without additional equipment. Useful Features ★HEVC support ★ The set-top box plays the HEVC-compressed files. ★ This means the network load will be lower, even when delivering high-quality content.',
           'productName'=> 'MAG 322 W1',
           'productImage'=> 'https://zelostv.com/wp-content/uploads/2019/05/MAG322.png',
           'productStock'=> true,
           'productPrice'=> '78.34',
           'salePrice'=> '71.34'
        ],
        [
           'productId'=> '1008',
           'productCategory'=> 'Android Box',
           'productDescription'=>'Il est temps de mettre fin aux problèmes de coupure et de bugs sur votre smart TV! La TV Box X96 vous offre une expérience inédite et permet de transformer votre téléviseur en véritable Hub multimédia.',
           'productName'=> 'X96 mini (2020)',
           'productImage'=> 'https://x96.fr/wp-content/uploads/2020/02/190657_104.png',
           'productStock'=> true,
           'productPrice'=> '39.58',
           'salePrice'=> '32.58'
        ],
        [
           'productId'=> '1009',
           'productCategory'=> 'Mag',
           'productDescription'=>'MAG424/424w3 is a cost-effective UHD IPTV/OTT solution intended for medium to large sized operators and telecommunication service providers. The set-top box performed in small form-factor. It has 1 GB operative and 8 GB flash memory, which is good enough to playback and store the high-quality video.',
           'productName'=> 'Infomir Mag 424 W3',
           'productImage'=> 'https://i.pinimg.com/originals/b6/13/a3/b613a3722bc0da4db9304a6d730c9c38.png',
           'productStock'=> false,
           'productPrice'=> '92026.54',
           'salePrice'=> '18405.307'
        ] ,
        [
           'productId'=> '1010',
           'productCategory'=> 'Support',
           'productDescription'=>'Le support fix incliné parfait pour votre écrans TV sur vos murs.Installation simple=> Le support mural pré-assemblé est livré avec toutes les vis requises, un manuel, un gabarit de perçage.',
           'productName'=> 'Support mural Vesa',
           'productImage'=> 'https://ae01.alicdn.com/kf/H9988a60b16fc449a9ee010244a35657aQ/VESA-200x200-pour-10-37-inclinable-r-glable-LCD-LED-PLASMA-tv-support-mural-support-de.jpg_Q90.jpg_.webp',
           'productStock'=> false,
           'productPrice'=> '7.54',
           'salePrice'=> '7.307'
        ] ,
        [
           'productId'=> '1010',
           'productCategory'=> 'Support',
           'productDescription'=>'Le support amovible parfait pour votre écrans TV sur vos murs.Pivoter et incliner =>Inclinez votre téléviseur de 20 degrés vers le haut ou le bas pour éviter les reflets gênants et profiter du meilleur angle de vision.Installation simple=> Le support mural pré-assemblé est livré avec toutes les vis requises, un manuel, un gabarit de perçage.',
           'productName'=> 'Support mural Amix',
           'productImage'=> 'https://ae01.alicdn.com/kf/H9988a60b16fc449a9ee010244a35657aQ/VESA-200x200-pour-10-37-inclinable-r-glable-LCD-LED-PLASMA-tv-support-mural-support-de.jpg_Q90.jpg_.webp',
           'productStock'=> false,
           'productPrice'=> '21.54',
           'salePrice'=> '18.307'
        ] 
    ];

    $categories = [
        [
            'catId'=>'0',
            'catname'=>'All'
        ],
        [
            'catId'=>'1',
            'catname'=>'Mag'
        ],
        [
            'catId'=> '2',
            'catname'=>'Support'
        ],
        [
            'catId'=> '3',
            'catname'=>'Android Box'
        ],
        [
            'catId'=> '4',
            'catname'=>'Apple Tv'
        ],
        [
            'catId'=> '5',
            'catname'=>'Chromecast'
        ]
    ];
 

    return Response::json([ 
        'isSuccessful'=> true,  
        'products'=>$products,
        'categories'=> $categories,
        'message' => 'featched success'
    ], 200); 


});