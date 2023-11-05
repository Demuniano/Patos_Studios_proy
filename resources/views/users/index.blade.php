@extends('layout.template')
@section('content')
<div class="container text-center">
        <div>
        <h1>Administrar usuarios</h1>
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <label for="name">Nombre de usuario: </label>
            <input type="text" name="nameUser"  id="name" class="form-control mn-3" required>
            <label for="Rolname">Nombre del rol: </label>
            <select name="rolId" id="Rolname" class="form-control mn-3">
                <option value="">Seleccione un rol</option>
                @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach
            </select>
            <label for="emailField">Correo: </label>
            <input type="text" id="emailField"class="form-control mn-3" name="emailUser" required>
            <label for="AdressField">Dirección: </label>
            <input type="text" id="AdressField"class="form-control mn-3" name="mainAdress" >
            <label for="passwordField">Contraseña: </label>
            <input type="password" id="passwordField"class="form-control mn-3" name="passw" required>
            <button type="submit" class="btn btn-success mt-4">Guardar</button>
        </form>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection