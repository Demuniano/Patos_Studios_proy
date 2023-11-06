<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Detail;

class DetailsController extends Controller
{
    public function index()
    {
        $details = Detail::all();
        $orders = Order::all();
        $products = Product::all();
        return view('details.crud_details',compact('orders','details','products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $detail = new Order();
        $detail->order_id = $request->idorder;
        $detail->product_id = $request->idproduct;
        $detail->cantidad = $request->preciouni;
        $detail->unitp = $request->preciouni;
        $detail->totalp = $request->precioto;
        $detail->save();
        return redirect()->route('details.index');
    }

    public function edit(string $id)
    {
        $details = Detail::find($id);
        $orders = Order::all();
        $products = Product::all();
        return view('details.crud_details',compact('details','orders','products'));
    }

    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->order->id = $request->idAuthor;
        $order->product->name = $request->nameProduct;
        $order->unitp = $request->preciouni;
        $order->totalp = $request->precioto;
        $order->save();
        return redirect()->route('details.index');
    }

    public function destroy(string $id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect()->route('details.index');
    }
}
