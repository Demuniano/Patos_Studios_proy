@extends('layout.template')
@section('content')
<div class="container text-center">
        <div>
        <h1>Editar Usuario</h1>
        <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Nombre de usuario: </label>
            <input type="text" name="nameUser" placeholder="Juan" id="name" class="form-control mn-3" value="{{$user->name}}" required>
            <label for="Rolname">Nombre del rol: </label>
            <select name="rolId" id="Rolname" class="form-control mn-3">
                <option value="{{$user->idRol}}">{{$user->role->name}}</option>
                @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach
            </select>
            <label for="emailField">Correo: </label>
            <input type="text" id="emailField"class="form-control mn-3" name="emailUser" placeholder="juan@gmail.com" value="{{$user->email}}">
            <label for="AdressField">Dirección: </label>
            <input type="text" id="AdressField"class="form-control mn-3" name="mainAdress" value="{{$user->address}}">
            <label for="passwordField">Contraseña: </label>
            <input type="password" id="passwordField"class="form-control mn-3" name="passw">
            <button type="submit" class="btn btn-success mt-4">Guardar</button>
        </form>
        </div>
    </div>
@endsection