<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{

    public function index()
    {
        $rols = Role::all();
        return view('rols.crud_rols',compact('rols'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->nameRole;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $role = Role::find($id);
        return view('roles.editar_roles',compact('role'));
    }

    public function update(Request $request, string $id)
    {
        $role = Role::find($id);
        $role->name = $request->nameRole;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
