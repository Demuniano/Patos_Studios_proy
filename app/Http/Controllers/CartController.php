<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Obtiene los elementos del carrito para el usuario autenticado
        $cartItems = CartItem::where('user_id', auth()->id())->get();
        return view('shoplist.index', compact('cartItems'));
    }
    public function removeItem($id)
    {
        $cartItem = CartItem::where('id', $id)
            ->where('user_id', auth()->id())
            ->first();

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Item not found in the cart.');
        }

        // Elimina el elemento del carrito
        $cartItem->delete();

        // Redirige al usuario a la página del carrito con un mensaje de éxito
        return redirect()->route('cart.index')->with('success', 'Item removed from the cart successfully!');
    }

    public function updateQuantity(Request $request, $id)
    {
        // Encuentra el elemento del carrito por su ID y el usuario autenticado
        $cartItem = CartItem::where('id', $id)
            ->where('user_id', auth()->id())
            ->first();

        // Verifica si el elemento del carrito existe
        if (!$cartItem) {
            return response()->json(['error' => 'Item not found in the cart.'], 404);
        }

        // Valida la cantidad ingresada en el formulario
        $request->validate([
            'quantity' => 'required|numeric|min:1|max:50',
        ]);

        // Actualiza la cantidad del elemento del carrito
        $cartItem->update(['quantity' => $request->input('quantity')]);

        // Retorna una respuesta JSON indicando el éxito
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }
    public function clearCart()
    {
        CartItem::where('user_id', auth()->id())->delete();
        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully!');
    }
}


