<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Detail;
use Termwind\Components\Dd;

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
        $detail = new Detail();
        $detail->order_id = $request->idorder;
        $detail->product_id = $request->idproduct;
        $detail->cant = $request->cantidad;
        $valUni = Product::find($request->idproduct)->price;
        $detail->unitp = $valUni;
        $total = $valUni * $request->cantidad;
        $detail->totalp = $total;
        $detail->save();
        return redirect()->route('details.index');
    }

    public function edit(string $id)
    {
        $details = Detail::find($id);
        $orders = Order::all();
        $products = Product::all();
        return view('details.edit_details',compact('details','orders','products'));
    }

    public function update(Request $request, string $id)
    {
        $detail = Detail::find($id);
        $detail->order_id = $request->idorder;
        $detail->product_id = $request->idproduct;
        $detail->cant = $request->cantidad;
        $valUni = Product::find($request->idproduct)->price;
        $detail->unitp = $valUni;
        $total = $valUni * $request->cantidad;
        $detail->totalp = $total;
        $detail->save();
        return redirect()->route('details.index');
    }

    public function destroy(string $id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect()->route('details.index');
    }
}
