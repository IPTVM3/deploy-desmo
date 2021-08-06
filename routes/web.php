<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\blogger;
use App\MailList;
use App\Order;
use App\OrderLine;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]],
    function () {

        //PUBLIC ROUTES--------------------------------------------------------------------------------------------------------------->
        Auth::routes();
         
 
        //PAYEMNT LAST VERSION
        Route::get('/payments/paypal/completed/{email}/{amount}/{country}/{status}/{txt}', ['as' => 'iptv.paypal.completed', 'uses' => 'IptvController@paypal_completedNew']);
        Route::get('/payments/paypal/completed/{email}/{amount}/{country}/{status}', ['as' => 'iptv.paypal.ss', 'uses' => 'IptvController@paypal_completed']);

        Route::get('/reselling', ['as' => 'iptv.reselling', 'uses' => 'IptvController@reselling']);

        Route::get('/terms', function (){
            return view('iptv.terms');
        })->name('terms');

               

        Route::get('/test/mail', function(){

            
            
            $data = [
            'email' => 'chakib.phisique@gmail.com',
            'order' => 'OR-54124',
            'price' => '151 $', 
            ];
    
            Mail::send('mail.neworder', $data , function($message)
            {
                $message->to('chakib.phisique@gmail.com' , 'OR-54124')->subject('OR-54124');  
            }); 
        });
            //TRIALS LIST
            Route::get('/contact', ['as' => 'whatsapp.contact', 'uses' => 'TrialController@contact']);
            Route::get('/trials', ['as' => 'trials.index', 'uses' => 'TrialController@index']);
            Route::post('/whastapp/save', ['as' => 'whatsapp.save', 'uses' => 'TrialController@store']);
            Route::get('/trials/{id}/done', ['as' => 'trials.done', 'uses' => 'TrialController@done']);
       
           

        Route::get('/maillist', ['as' => 'maillist.index', 'uses' => 'MailListController@index']);
        Route::get('/maillist/send/{id}', function($id){
                
            $email = MailList::find($id);
            $products =Product::all()->take(3); 
            
            Mail::send('mail.maillist', [ 'products' => $products ] , function($message)  use($email) 
            {
                $message->to($email->email, 'Bobres')->subject(__('iptv.description'));  
            }); 
                
            
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', 'Thanks');
            return back();
        })->name('maillist.email.send');

        
     

        Route::get('/order/steps/{id}', ['as' => 'iptv.orders.steps', 'uses' => 'IptvController@order_steps']);
        Route::post('/test/detals/save/{id}',function (Illuminate\Http\Request $request,$id){

            $request->validate([
                'email' => 'required',
                'type' => 'required'
            ]);
                
        $order = Order::find($id);
        $orderLine = OrderLine::create();
        $orderLine->order_id = $id;
        $orderLine->qty = $request['type'];
        if($request['app']) $orderLine->price = $request['app'];
        $orderLine->update();

        return view('iptv.success');

        })->name('details');

 
        Route::group(['middleware' => 'visitor'], function () {
            //HOME CUSTOMER
            

            
          
            Route::get('/v1/iptv', 'HomeController@v1');  
            Route::get('/shipping', 'HomeController@shipping'); 
            Route::get('/blogger/{id}', 'HomeController@blggeritem')->name('blog');  
            Route::get('/blogger', 'HomeController@blog')->name('blogger');  
            Route::get('/', 'HomeController@index')->name('home');    
            //Route::get('/', 'HomeController@tohome');
            Route::get('/channels', 'HomeController@channels');
            Route::get('/google939c15bc1c211332.html',function(){
                return view('iptv.google');
            });
            Route::get('/sitemap',function(){ 
                $pages = Page::all();

                $blogs = blogger::all();
                $product = Product::all();

                return response()->view('iptv.sitemap', compact('pages','blogs','product'))->header('Content-Type', 'text/xml'); 
            });

            Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
            Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
            Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
            Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

            //TESTING
            Route::group(['prefix' => 'products','namespace' => 'Product'], function () {
                Route::get('/filter', ['as' => 'profile.customers.filter', 'uses' => 'ProductController@filter']);
                Route::get('/search', ['as' => 'profile.customers.search', 'uses' => 'ProductController@search']);
                Route::get('/filter/categorie/{id}', ['as' => 'profile.customers.filter.categorie', 'uses' => 'ProductController@filter_categorie']);
                Route::get('/', 'ProductController@index');
                Route::get('/{id}', 'ProductController@show');
                Route::post('/customer/review/{id}', ['as' => 'products.customer.review.store', 'uses' => 'ProductController@review_store']);
            });

            //UnitPay
            Route::get('/unitpay/payment/{id}', ['as' => 'iptv.unitpay', 'uses' => 'UnitpayController@payNow']); 
            Route::get('/unitpay/payments', ['as' => 'iptv.unitpay.response', 'uses' => 'UnitpayController@response']); 
            Route::get('/unitpay/payment/failed',function(){
                return view('iptv.payment_failed');
            }); 
            Route::get('/unitpay/payment/success',function(){
                return view('iptv.payment_success');
            }); 


            Route::get('/payments/{id}', ['as' => 'iptv.payments', 'uses' => 'IptvController@payments']); 
            Route::get('/payments/{price}/{txt}', ['as' => 'iptv.payments.pricetxt', 'uses' => 'IptvController@payments_pricetxt']);

            Route::get('/payments/unit/{id}', ['as' => 'iptv.payments', 'uses' => 'IptvController@payments_test']); 
            Route::get('/payment/success/{id}', ['as' => 'iptv.payments.success', 'uses' => 'IptvController@payment_done']);
            Route::post('/payments/paypal/{id}', ['as' => 'iptv.payments.paypal', 'uses' => 'IptvController@paypal']);
            //Route::post('/payments/stripe/{id}', ['as' => 'iptv.payments.stripe', 'uses' => 'IptvController@stripe']);
            Route::post('/payments/stripe/{id}', function(){
                dd('dfdf');
            })->name('iptv.payments.stripe');
            Route::get('/payments/status', ['as' => 'iptv.payments.status', 'uses' => 'IptvController@status']);
            Route::get('/payments/canceled', ['as' => 'iptv.payments.canceled', 'uses' => 'IptvController@canceled']);

            //MAIL LIST
            Route::post('/maillist', ['as' => 'maillist.store', 'uses' => 'MailListController@store']);
         

        });

        
        
        
        Route::get('/v1',function (){ 
        $products = Product::all();
         return view('iptv.iptvfamos',compact('products')); 
        })->name('v1');
        Route::get('/channels',function (){  return view('iptv.channels'); })->name('channels');
        Route::get('/movies',function (){  return view('iptv.movies'); })->name('movies');
        Route::get('/series',function (){  return view('iptv.series'); })->name('series');
        Route::get('/mentions',function (){  return view('iptv.mentionLegal'); })->name('mentionLegal');
        Route::get('/conditions',function (){  return view('iptv.condition'); })->name('condition');
        Route::get('/resseling',function (){  return view('iptv.resselling'); })->name('resseling');

        //DASHBOARD ROUTES------------------------------------------------------------------------------------------------------------>
        Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => ['auth', 'admin', 'force_reset_password']], function () {
            Route::get('/', 'DashboardController@index')->name('index');


        Route::get('/sendmails', ['as' => 'orders.sec.multi_send', 'uses' => 'DashboardController@multi_send']);

            //USER ROUTES
            Route::group(['prefix' => 'users'], function () {
                Route::put('/changestatus/{id}', ['as' => 'users.changestatus', 'uses' => 'UserController@changestatus']);
                Route::get('/export', ['as' => 'users.export', 'uses' => 'UserController@export']);
                Route::get('/print', ['as' => 'users.print', 'uses' => 'UserController@print']);
                Route::get('/customers', ['as' => 'users.customers.index', 'uses' => 'UserController@index_customer']);

            });
            Route::resource('/users', 'UserController');

            //PROFILE
            Route::group(['prefix' => 'profile'], function () {
                Route::get('/', ['as' => 'profile.show', 'uses' => 'UserController@profile']);
                Route::put('/', ['as' => 'profile.edit', 'uses' => 'UserController@profile_edit']);
            });

            //SETTINGS
            Route::group(['prefix' => 'settings'], function () {
                Route::resource('/', 'SettingController');
                //STORE SETTINGS
                Route::get('/store', ['as' => 'settings.store', 'uses' => 'StoreController@index']);
                Route::put('/store/edit_general_details', ['as' => 'settings.store.editgeneral', 'uses' => 'StoreController@edit_general_details']);
                Route::put('/store/edit_format_standard', ['as' => 'settings.store.editformat', 'uses' => 'StoreController@edit_format_standard']);
                Route::put('/store/edit_social_profiles', ['as' => 'settings.store.editprofile', 'uses' => 'StoreController@edit_social_profiles']);
                Route::put('/store/edit_store_policy', ['as' => 'settings.store.editpolicy', 'uses' => 'StoreController@edit_store_policy']);
                //GATEWAYS SETTINGS
                Route::get('/gateway', ['as' => 'settings.gateway', 'uses' => 'GetewayController@index']);
                Route::get('/paypal', ['as' => 'settings.paypal', 'uses' => 'GetewayController@paypal']);
                Route::post('/paypal/change', ['as' => 'settings.paypal.change', 'uses' => 'GetewayController@paypal_change']);
                //NOTIFICATIONS
                Route::get('/notifications', ['as' => 'notifications.index', 'uses' => 'NotificationController@index']);
                Route::put('/notifications/read_all', ['as' => 'notifications.readall', 'uses' => 'NotificationController@read_all']);
                Route::delete('/notifications/delete_all', ['as' => 'notifications.deleteall', 'uses' => 'NotificationController@delete_all']);
            });

            //STORE
            Route::group(['prefix' => 'store'], function () {
                Route::resource('/', 'StoreController');
            });

            //Categorie
            Route::group(['prefix' => 'categorie'], function () {
                Route::get('/', ['as' => 'categories.index', 'uses' => 'CategorieController@index']);
                Route::get('/create', ['as' => 'categories.create', 'uses' => 'CategorieController@create']);
                Route::post('/store', ['as' => 'categories.store', 'uses' => 'CategorieController@store']);
                Route::get('/edit/{id}', ['as' => 'categories.edit', 'uses' => 'CategorieController@edit']);
                Route::put('/update/{id}', ['as' => 'categories.update', 'uses' => 'CategorieController@update']);
                Route::delete('/destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'CategorieController@destroy']);
            });

            //Products
            Route::group(['prefix' => 'products'], function () {
                Route::resource('/', 'ProductController');
                Route::get('/', ['as' => 'products.index', 'uses' => 'ProductController@index']);
                Route::get('/show/{id}', ['as' => 'products.show', 'uses' => 'ProductController@show']);
                Route::post('/store', ['as' => 'products.store', 'uses' => 'ProductController@store']);
                Route::get('/edit/{id}', ['as' => 'products.edit', 'uses' => 'ProductController@edit']);
                Route::put('/update/{id}', ['as' => 'products.update', 'uses' => 'ProductController@update']);
                Route::post('/review/{id}', ['as' => 'products.review.store', 'uses' => 'ProductController@review_store']);
                Route::delete('/review/{id}/{idp}', ['as' => 'products.review.destroy', 'uses' => 'ProductController@review_delete']);
            });

            //Orders 
            Route::group(['prefix' => 'orders'], function () {
                Route::get('/', ['as' => 'orders.index', 'uses' => 'OrderController@index']);
                Route::get('/create', ['as' => 'orders.create', 'uses' => 'OrderController@create']);
                Route::post('/store', ['as' => 'orders.store', 'uses' => 'OrderController@store']);
                Route::delete('/destroy/{id}', ['as' => 'orders.destroy', 'uses' => 'OrderController@destroy']);
                Route::post('/undone/{id}', ['as' => 'orders.undone', 'uses' => 'OrderController@undone']);
                Route::post('/expired/{id}', ['as' => 'orders.expired', 'uses' => 'OrderController@expired']);
                Route::get('/search', ['as' => 'orders.search', 'uses' => 'OrderController@search']);
                Route::post('/multi_send', ['as' => 'orders.multi_send', 'uses' => 'OrderController@multi_send']);
                Route::put('/paid/{id}', ['as' => 'orders.paid', 'uses' => 'OrderController@paid']);
                Route::post('/done/{id}', ['as' => 'orders.done', 'uses' => 'OrderController@done']);
                
                Route::get('/lines/{id}', ['as' => 'orders.lines', 'uses' => 'OrderController@lines']);
                Route::delete('/lines/{id}', ['as' => 'orders.lines.destroy', 'uses' => 'OrderController@line_destroy']);
                Route::post('/line/store/{id}', ['as' => 'orders.line.store', 'uses' => 'OrderController@store_line']);
                Route::get('/line/create/{id}', ['as' => 'orders.line.create', 'uses' => 'OrderController@create_line']);
            });
            //RESTE PASSWORD AFTER FISRT LOGIN
            //Route::get('/reset/reset_password_without_token',  'AccountsController@validateEmailRequest')->name('validateEmailRequest');
            //Route::post('/reset/reset_password_with_token', 'AccountsController@resetPassword');


            //Frais
            Route::group(['prefix' => 'frais'], function () {
                Route::get('/', ['as' => 'frais.index', 'uses' => 'FraisController@index']);
                Route::get('/create', ['as' => 'frais.create', 'uses' => 'FraisController@create']);
                Route::post('/store', ['as' => 'frais.store', 'uses' => 'FraisController@store']);
            });
        });




        //PAYMENTS ROUTES
        Route::group(['prefix' => 'payment', 'namespace' => 'Payment', 'middleware' => ['auth', 'admin', 'force_reset_password']], function () {
            Route::post('/payment/paypal', ['as' => 'payment.paypal.active', 'uses' => 'PayPalController@active_paypal']);
            Route::delete('/payment/paypal', ['as' => 'payment.paypal.disable', 'uses' => 'PayPalController@disable_paypal']);
            Route::post('/payment/stripe', ['as' => 'payment.stripe.active', 'uses' => 'StripeController@active_stripe']);
            Route::delete('/payment/stripe', ['as' => 'payment.stripe.disable', 'uses' => 'StripeController@disable_stripe']);
        });
        //CUSTOMER ROUTES------------------------------------------------------------------------------------------------------------>
        Route::group(['prefix' => 'customer', 'namespace' => 'Customer', 'middleware' => ['auth', 'customer']], function () {
            //HOME CUSTOMER
            Route::get('/', 'CustomerController@index')->name('index');

        });

        // AUTH ROUTES--------------------------------------------------------------------------------------------------------------->
        Route::group(['middleware' => 'auth'], function () {
            //REST PASSWORD AFTER FIRST LOGIN
            Route::get('/password/reset_after_first_login', 'AccountsController@reset_password_first_login');
            Route::get('/password/reset_password', 'AccountsController@index');
            Route::put('/password/reset_password_update', ['as' => 'password.reste.update', 'uses' => 'AccountsController@update_password']);

            //MESSANGER 
            Route::get('/messenger', 'MessengerController@index')->name('messenger');


            //FORCE FIRST CONFIG STORE
            Route::get('/force_first_config_store', 'ActionController@force_first_congfig_store');
            Route::put('/valide_config_store', ['as' => 'store.valide_config_store', 'uses' => 'ActionController@valide_config_store']);
            //LOGOUT
            Route::get('/logout', 'ActionController@logout');
        });
         

    });



