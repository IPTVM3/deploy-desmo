<?php

namespace App\Http\Controllers\Product;

use App\Categorie;
use App\Product;
use App\Review;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::paginate(6);
        $categories = Categorie::all();
        return view('customer.products.index', compact('products', 'categories'));
    }


    public function show(Request $request, $id)
    {
        $product = Product::find($id);

        return view('customer.products.show', compact('product'));

    }

    public function filter(Request $request)
    {

        if ($request['sorting_normal'] && $request['sorting_normal'] != 'default') {
            if ($request['sorting_normal'] == 0) {
                $products = Product::orderBy('price_after', 'asc')->paginate(6);
                $categories = Categorie::all();
            } elseif ($request['sorting_normal'] == 'popularity') {
                $products = Product::orderBy('notice', 'asc')->paginate(6);
                $categories = Categorie::all();

            } else {
                $products = Product::orderBy('price_after', 'desc')->paginate(6);
                $categories = Categorie::all();

            }
        }

        return view('customer.products.index', compact('products', 'categories'));
    }

    public function filter_categorie($id)
    {
        $products = Categorie::find($id)->products()->paginate(6);
        $categories = Categorie::all();
        return view('customer.products.index', compact('products', 'categories'));
    }

    public function search(Request $request)
    {
        $products = Product::query()
            ->where('title', 'LIKE', "%{$request['search_product']}%")
            ->paginate(6);
        $categories = Categorie::all();
        return view('customer.products.index', compact('products', 'categories'));
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
        $product = Product::findOrFail($id);
        return view('customer.products.show', compact('product'));
    }
}
