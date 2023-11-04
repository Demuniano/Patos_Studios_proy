<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products=Product::all();
        return view("products.crud_productos",compact("products"));
        
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->nameProduct;
        $product->quantity = $request->quantityProduct;
        $product->price = $request->priceProduct;
        $product->description = $request->descriptionProduct;
        $product->flavor = $request->flavorProduct;
        $product->save();
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    } 

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->nameProduct;
        $product->quantity = $request->quantityProduct;
        $product->price = $request->priceProduct;
        $product->description = $request->descriptionProduct;
        $product->flavor = $request->flavorProduct;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route("products.index");
    }
}
