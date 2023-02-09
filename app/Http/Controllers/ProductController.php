<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
       return view("product.index",["products"=>$products]); 
    }

    public function create()
    {
        return view("product.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"      =>  "required|unique:products,name",
            "price"     =>  "required|integer|min:5|max:500",
        ]);
        Product::create([
            "name"          =>  $request->input("name"),
            "price"         =>  $request->input("price"),
            "description"   =>  $request->input("description")
        ]);

        return redirect()->route("product.index")->with("success","Product created successfully.");

    }

    public function show(Product $product)
    {
        return view("product.show",["product"=>$product]);
    }

    public function edit(Product $product)
    {
        return view("product.edit",["product"=>$product]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            "name"          =>      "required|unique:products,name,".$product->id,
            "price"         =>      "required|integer|min:5|max:500"
        ]);
        $product->update([
            "name"      =>      $request->input("name"),
            "price"     =>      $request->input("price"),
            "description"=>     $request->input("description")
        ]);

        return redirect()->route("product.index")->with("success","Product data updated successfully.");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("product.index")->with("success","Product deleted successfully.");
    }
}
