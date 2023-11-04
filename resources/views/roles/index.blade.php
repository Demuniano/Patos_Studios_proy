@extends("layout.template")
@section("content")
<body>
    <h1>Roles</h1>
    <div class="container text-center">
        <div>
        <h1>Crear un Rol</h1>
        <form action="{{route('roles.store')}}" method="post">
            @csrf
            <label for="nameRol">Ingrese el nombre del Rol: </label>
            <input type="text" name="nameRol" id="nameRol" class="form-control mn-3" required >
            <button type="submit" class="btn btn-success mt-4">Crear</button>
        </form>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rol</th>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td>
                                <a href="{{route('roles.edit', $rol->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('roles.destroy', $rol->id)}}" method="post">
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
</body>
@endsection