<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.info',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->nombre;
        $order->user_id = $request->iduser;
        $order->product_id = $request->idproduct;
        $order->amount = $request->cantidad;
        $order->date = $request->fecha;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function edit(string $id)
    {
        $order = Order::find($id);
        return view('admin.info',compact('order'));
    }

    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->name = $request->nombre;
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
