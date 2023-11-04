<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Roles</h1>
    <div class="container text-center">
        <div>
        <h1>Crear un Rol</h1>
        <form action="{{route('rols.store')}}" method="post">
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
                        @foreach($rols as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td>
                                <a href="{{route('rols.edit', $rol->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('rols.destroy', $rol->id)}}" method="post">
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
</html>