<?php

namespace App\Http\Controllers\Dashboard;

use App\Categorie;
use App\Http\Controllers\ActionController;
use App\Product;
use App\ProductOption;
use App\Review;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $products = Product::paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('dashboard.products.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "title" => 'required',
            "band" => 'required',
            "categorie" => 'required',
            "price_before" =>'required',
            "price_after" => 'required',
            "description" => 'required',
            "feature" => 'required',
            "name_option" => 'required',
            "price_option" => 'required',
            "order" => 'required',
            "notice" => 'required',
            "rate" => 'required',
            "img1" => 'max:2048|required',
            "img2"  => 'max:2048|required',
            "img3" => 'max:2048|required',
            "img4"  => 'max:2048|required',
            'property_name'=>'required',
        ]);


        $exept_fields = ['token', '_method','img1','img2','img3','img4','name_option','price_option','categorie'];
        $request_data = $request->except($exept_fields);


        $product = Product::create();

        $product->title = $request['title'];
        $product->band = $request['band'];
        $product->price_before = $request['price_before'];
        $product->price_after = $request['price_after'];
        $product->description = $request['description'];
        $product->feature = $request['feature'];
        $product->order = $request['order'];
        $product->rate = $request['rate'];
        $product->notice = $request['notice'];
        $product->html_details = $request['html_details'];
        $product->sku = $request['notice'];

        $product->categorie_id =  $request['categorie'];
        $product->img1 = ActionController::imageUpload($request, 'img1');
        $product->img2 = ActionController::imageUpload($request, 'img2');
        $product->img3 = ActionController::imageUpload($request, 'img3');
        $product->img4 = ActionController::imageUpload($request, 'img4');

        $count = count($request['name_option']);
        $options = [];
        foreach ($request['name_option'] as $index => $option){
            $b = ProductOption::create();
            $b->name = $option;
            $b->property_name = $request['property_name'];
            $b->product_id = $product->id;
            $options[$index] = $b;
            $b->update();
        }
        foreach ($request['price_option'] as $index => $option){
            $options[$index]->price = $option;
            $options[$index]->product_id = $product->id;
            $options[$index]->update();
        }

        $product->update();





        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('products.index');

    }

    public function show(String $id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Categorie::all();
        return view('dashboard.products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            "title" => 'required',
            "band" => 'required',
            "categorie" => 'required',
            "price_before" =>'required',
            "price_after" => 'required',
            "description" => 'required',
            "feature" => 'required',
            "order" => 'required',
            "notice" => 'required',
            "rate" => 'required'
        ]);

        $product = Product::find($id);

        $product->title = $request['title'];
        $product->band = $request['band'];
        $product->price_before = $request['price_before'];
        $product->price_after = $request['price_after'];
        $product->description = $request['description'];
        $product->feature = $request['feature'];
        $product->order = $request['order'];
        $product->rate = $request['rate'];
        $product->notice = $request['notice'];
        $product->html_details = $request['html_details'];
        $product->sku = $request['notice'];

        $product->categorie_id =  $request['categorie'];

        if ($request['img1']) {
            if($product->img1) ActionController::unlinkImage($product->img1);
            $product->img1 = ActionController::imageUpload($request, 'img1');
        };
        if ($request['img2']) {
            if($product->img2) ActionController::unlinkImage($product->img2);
            $product->img2 = ActionController::imageUpload($request, 'img2');
        }
        if ($request['img3']) {
            if($product->img3) ActionController::unlinkImage($product->img3);
            $product->img3 = ActionController::imageUpload($request, 'img3');
        }
        if ($request['img4']) {
            if($product->img4) ActionController::unlinkImage($product->img4);
            $product->img4 = ActionController::imageUpload($request, 'img4');
        }


        $options = [];
        if($request['name_option'] && $request['property_name']  ){
            $count = count($request['name_option']);
            foreach (ProductOption::all() as $po){
                if($po->product_id == $product->id) $po->delete();
            }
            foreach ($request['name_option'] as $index => $option){
                $b = ProductOption::create();
                $b->name = $option;
                $b->property_name = $request['property_name'];
                $b->product_id = $product->id;
                $options[$index] = $b;
                $b->update();
            }
            foreach ($request['price_option'] as $index => $option){
                $options[$index]->price = $option;
                $options[$index]->product_id = $product->id;
                $options[$index]->update();
            }

        }


        $product->update();



        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect()->route('products.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.deleted_success'));
        return redirect()->route('products.index');
    }


    public function review_store(Request $request,$id){
        $request->validate([
            "by" => 'required',
            "body" => 'required'
        ]);

        $review = Review::create();
        $review->by = $request['by'];
        $review->body = $request['body'];
        $review->product_id = $id;
        $review->update();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        $product = Product::findOrFail($id);
        return redirect()->route('products.show',$id);
    }
    public function review_delete(Request $request,$id,$idp){

        Review::find($id)->delete();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.deleted_success'));
        return redirect()->route('products.show',$idp);
    }
}
