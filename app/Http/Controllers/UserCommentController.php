<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Coment;
class UserCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $productId = session()->get('productId');
        if (auth()->check()) {
            $user_id = auth()->user()->id;
            // Ahora puedes usar $user_id para obtener el ID del usuario autenticado.
        } 
        else {
            return redirect()->route('login');
        }
        $coment = new Coment();
        $coment->date = date("Y-m-d"); 
        $coment->description = $request->descriptionComent;
        $coment->qualification = $request->qualificationComent;
        $coment->idUser = $user_id;
        $coment->idProduct = $productId;
        $coment->save();
        session()->forget('productId');
        return redirect()->route('products.show', $productId);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        if (auth()->check()) {
            $user_id = auth()->user()->id;
            // Ahora puedes usar $user_id para obtener el ID del usuario autenticado.
        } 
        else {
            return redirect()->route('login');
        }
        session()->put('productId', $id);
        $user=User::find($user_id);
        $product=Product::find($id);
        return view("coments.user_comment",compact("product","user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
