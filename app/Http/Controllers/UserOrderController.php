<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\CartItem;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
class UserOrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get();
        $details = Detail::whereIn('order_id', $orders->pluck('id'))->get();
        return view('order.UserOrders', compact('orders', 'details'));
    }


    public function sale()
    {
        $user = auth()->user();
        $cartItems = CartItem::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'El carrito está vacío. No se puede realizar la venta.');
        }
        $order = Order::create([
            'user_id' => $user->id,
            'date' => now(), 
        ]);
    
        foreach ($cartItems as $cartItem) {
            Detail::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product->id,
                'cant' => $cartItem->quantity,
                'unitp' => $cartItem->product->price,
                'totalp'=> $cartItem->product->price * $cartItem->quantity
            ]);
        }
        CartItem::where('user_id', $user->id)->delete();
        return redirect()->route('UserOrders.index')->with('success', 'Venta realizada con éxito.');
    }
    public function pdf($id)
    {
        $order = Order::find($id);
        $details = Detail::where('order_id', $order->id)->get();
        $pdf = Pdf::loadView('order.UserOrderPDF', compact('order', 'details'));
        return $pdf->download('Factura.pdf');
    }
    public function ver($id)
    {
        $order = Order::find($id);
        $details = Detail::where('order_id', $order->id)->get();
        return view('order.UserOrderPDF', compact('order', 'details'));
    }

    
}
