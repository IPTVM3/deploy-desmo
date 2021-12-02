<?php

namespace App\Http\Controllers;

use App\Product;
use App\Trial;
use App\Store;
use App\Blogger;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('visitor');
    }


    public function index(Request $request)
    {

   

        $store = Store::first();
        //$contact = Trial::find($store->apartement);
        $ip = $this->getIp();
        $x = Visitor::where("address",$ip)->first();
        if(!$x){ 
            $news = Visitor::create();
            $news->address = $ip;
            $news->home = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }else{
            $x->delete();
            $news = Visitor::create();
            $news->address = $ip;
            $news->home = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }
         
        
        $products_boxs = [Product::find(214),Product::find(224),Product::find(234)];

         
        $products = [Product::find(111),Product::find(121),Product::find(131)];
        $seelected_product = [Product::find(11),Product::find(31),Product::find(51)];
        $month = [Product::find(161),Product::find(191)];
        $multidevice = [Product::find(181),Product::find(201)];

        $product_prm = [Product::find(111),Product::find(121),Product::find(131)];
        return view('home' ,compact('store','products','seelected_product','product_prm','month','multidevice','products_boxs'));
    }

    public function tohome(){
        return redirect()->route('home');
    }


    public function checkout(){
        return view('iptv.checkout' );
    }


    public function v1(){
        $store = Store::first();
        $products = Product::all();
        return view('iptv.index' ,compact('store','products'));
    }

    public function channels(){
        return view('iptv.channels');
    }

    public function shipping(){ 
        return view('iptv.shipping');
    } 
    public function blog(Request $request){ 
        

        
        $ip = $this->getIp();
        $x = Visitor::where("address",$ip)->first();
        if(!$x){ 
            $news = Visitor::create();
            $news->address = $ip;
            $news->blog = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }else{
            $x->delete();
            $news = Visitor::create();
            $news->address = $ip;
            $news->blog = 1; 
            $news->date = Carbon::now(); 
            $news->update();  
        }
         
        
        
       
        $blogger = Blogger::paginate(10);
        return view('iptv.blog',compact('blogger'));
    }
    public function blggeritem($id){  

        $blogger = Blogger::all();
        $blog = Blogger::find($id);
        return view('iptv.howtouseiptv',compact('blog','blogger'));
    } 

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
}
