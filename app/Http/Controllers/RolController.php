<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{

    public function index()
    {
        $rols = Rol::all();
        return view('rols.crud_rols',compact('rols'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->name = $request->nameRol;
        $rol->save();
        return redirect()->route('rols.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $rol = Rol::find($id);
        return view('rols.editar_rols',compact('rol'));
    }

    public function update(Request $request, string $id)
    {
        $rol = Rol::find($id);
        $rol->name = $request->nameRol;
        $rol->save();
        return redirect()->route('rols.index');
    }

    public function destroy(string $id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return redirect()->route('rols.index');
    }
}
