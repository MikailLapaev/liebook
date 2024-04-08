<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin()
    {
        $categories = Category::all();
        return view('pages.admin', compact('categories'));
    }

//Product ACTIONS
    public function createProduct()
    {
        $categories = Category::all();
        return view('pages.createProduct', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:5000',
            'price'=>'required|numeric',
            'category_id' => 'required',
            'img' => 'required|image'
        ]);

        if($request->hasFile('img')){
            $validated['img'] = $request->file('img')->store('public/products');
        }

        Product::create($validated);
        return redirect()->route('catalogPage');
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();
        return view('pages.editProduct', compact('categories', 'product'));
    }

    public function  updateProduct(Product $product, Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:5000',
            'price'=>'required|numeric',
            'category_id' => 'required',
            'img' => 'nullable|image'
        ]);

        if($request->hasFile('img')){
            $validated['img'] = 'public/storage/' . $request->file('img')->store('products');
//        if($request->hasFile('img')) {
//            $data['img'] = $request->file('img')->store('public/tasks');
//        }
        }
        $product->update($validated);

        return redirect()->route('productPage', $product->id);
    }

    public function destroyProduct(Product $product)
    {
        if(Storage::exists($product->img)){
            Storage::delete($product->delete());
        }

        $product->delete();
        return redirect()->route('catalogPage');
    }



//    Category ACTIONS
    public function createCategory()
    {
        return view('pages.createCategory');
    }

    public function storeCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255'
        ]);

        Category::create($validated);

        return redirect()->route('admin');
    }

    public function destroyCategory($id)
    {
        $category = Category::query()->find($id);
        $category->delete();
        return redirect()->route('admin');
    }
}
