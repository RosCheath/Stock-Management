<?php

namespace App\Http\Controllers;

use App\Models\ProductStock;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::get();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $product_stocks = ProductStock::get();
        $categories = Category::get();
        return view('products.create', [
            'categories' => $categories,
            '$product_stocks' => $product_stocks
        ]);
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product -> user_id = Auth::id();
        $product -> name = $request->name;
        $product -> category_id = $request->category_id;
        $product -> unit_price = $request->unit_price;
        $product -> selling_price = $request->selling_price;
        $product -> year = $request->year;



        if($request->hasFile('photo')){
            $photo = $request->photo;
            $name = Str::random(60) . '' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/product_image',$name);
            $product->photo = $photo;
        }
        $product->save();

                $product_stocks = new ProductStock();
                $product_stocks->product_id = $product->id;
                $product_stocks->location = $request->location;
                $product_stocks->quantity = $request->quantity;
                $product_stocks->save();

        return redirect(route('products.index'));
    }

    public function show(Product $product)
    {
        return view('product.show',
        [
            'product' => $product
        ]);
    }
    public function edit(Product $product)
    {
        $categories = Category::get();
        $product_stocks = ProductStock::get();
        return view('products.edit',
        [
            'product' => $product,
            'categories' => $categories,
            'product_stocks' => $product_stocks
        ]);
    }
    public function update(Request $request ,Product $product)
    {
        $product->update($request->all());
        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
