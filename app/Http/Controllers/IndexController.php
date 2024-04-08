<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){

        $categories = Category::all();

        if($request->all() && $request->all()['category']){
            $products = Product::query()->where('category_id' , '=', $request->all()['category'])->get();
        }else{
            $products = Product::all()->skip(0)->take(8);
        }
        return view('pages.index', compact('products', 'categories'));
    }

    public function productPage($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('pages.product', compact('product'));
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function catalog(Request $request)
    {
        $categories = Category::all();

        if($request->all() && $request->all()['category']){
            $products = Product::query()->where('category_id' , '=', $request->all()['category'])->get();
        }else{
            $products = Product::all();
        }
        return view('pages.catalog', compact('products', 'categories'));
    }


}
