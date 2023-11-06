<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;


class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $users = User::all();
        $products = Product::all();
        return view('admin.info',compact('orders','users','products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->iduser;
        $order->product_id = $request->idproduct;
        $order->amount = $request->cantidad;
        $order->date = $request->fecha;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function edit(string $id)
    {
        $orders = Order::find($id);
        $users = User::all();
        $products = Product::all();
        return view('admin.edit_info',compact('orders','users','products'));
    }

    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->user->name = $request->nameAuthor;
        $order->product->name = $request->nameAuthor;
        $order->amount = $request->cantidad;
        $order->date = $request->fecha;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
