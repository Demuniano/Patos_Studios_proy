<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $users = User::all();
        return view('order.info',compact('orders','users'));
    }

    public function pdf(){
        $orders = Order::all();
        $pdf = Pdf::loadView('admin.pdf', compact('orders'));
        return $pdf->download('invoice.pdf');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->iduser;
        $order->date = $request->fecha;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function edit(string $id)
    {
        $order = Order::find($id);
        $users = User::all();
        return view('order.edit_info',compact('order','users'));
    }

    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->user_id = $request->iduser;
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
