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


Route::group(  [ 'prefix' => LaravelLocalization::setLocale(),  'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]  ], function() {

    Route::get('/', function () {  return view('welcome'); });

    Auth::routes();


    //DASHBOARD ROUTES
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard','middleware'=>['auth','admin']], function() {
        Route::get('/', 'DashboardController@index')->name('index');
        //USER ROUTES------------------------------------------------------------------------------------------------------------>
        Route::put('/users/changestatus/{id}',['as'=>'users.changestatus','uses'=>'UserController@changestatus']);
        Route::get('/users/export',['as'=>'users.export','uses'=>'UserController@export']);
        Route::get('/users/print',['as'=>'users.print','uses'=>'UserController@print']);

        //PROFILE
        Route::get('/users/profile',['as'=>'users.profile','uses'=>'UserController@profile']);
        Route::put('/users/profile',['as'=>'users.profile_edit','uses'=>'UserController@profile_edit']);
        //USERS RESOURCE
        Route::resource('/users', 'UserController');
    });

    //CUSTOMER ROUTES
    Route::group(['prefix' => 'customer', 'namespace' => 'Customer','middleware'=>['auth','customer']], function() {
        //Home customer
        Route::get('/', 'CustomerController@index')->name('index');

    });


    //User LogOut
    Route::get('/logout', 'ActionController@logout');

    /*
    Route::prefix('dashboard')->name('Dashboard.')->group(function (){

        //Home Dashboard Administrator
        Route::get('/index', 'DashboardController@index')->name('index');

        //User Routes
        Route::resource('users', 'UserController')->except(['show']);


    });

/*
    Route::group(['prefix' => 'dashboard', 'middleware' => 'is.superadministrator', 'as'=> 'admin.'], function () {
        Route::get('/', 'DashboardController@index')->name('index');
        Route::resource('users', 'UserController')->except(['show']);
    });
*/

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
