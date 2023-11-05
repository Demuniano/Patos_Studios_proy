<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coment;
use App\Models\Product;
use App\Models\User;

class ComentsController extends Controller
{
    public function index()
    {
        $users=User::all();
        $products=Product::all();
        $coments=Coment::all();
        return view("coments.crud_comentarios",compact("coments","products","users"));
    }

    public function store(Request $request)
    {
        $coment = new Coment();
        $coment->date = $request->dateComent;
        $coment->description = $request->descriptionComent;
        $coment->qualification = $request->qualificationComent;
        $coment->idUser = $request->user;
        $coment->idProduct = $request->product;
        $coment->save();
        return redirect()->route('coments.index');
    }

    public function edit(string $id)
    {
        $coment = Coment::find($id);
        $users = User::all();
        $products = Product::all();
        return view('coments.edit', compact('coment','users','products'));
    }

    public function update(Request $request, string $id)
    {
        $coment = Coment::find($id);
        $coment->date = $request->dateComent;
        $coment->description = $request->descriptionComent;
        $coment->qualification = $request->qualificationComent;
        $coment->save();
        return redirect()->route('coments.index');
    }

    public function destroy(string $id)
    {
        $coment=Coment::find($id);
        $coment->delete();
        return redirect()->route("coments.index");
    }
}
