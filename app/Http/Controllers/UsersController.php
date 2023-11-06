<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UsersController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index',compact('users','roles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->nameUser;
        $user->address = $request->mainAdress;
        $user->email = $request->emailUser;
        $user->password = $request->passw;
        $user->idRol = $request->rolId;
        $user->save();
        return redirect()->route('users.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit',compact('user','roles'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->nameUser;
        $user->address = $request->mainAdress;
        $user->email = $request->emailUser;
        $user->password = $request->passw;
        $user->idRol = $request->rolId;
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
