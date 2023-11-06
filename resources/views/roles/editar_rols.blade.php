<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
    <script src="{{ asset('js/validacion_rols.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>Roles</h1>
    <div class="container text-center">
        <div>
        <h1>Editar Roles</h1>
        <form action="{{route('roles.update',$role->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Ingrese el nombre del Rol </label>
            <input type="text" name="nameRol" id="name" class="form-control mn-3" required value="{{$role->name}}">
            <button type="submit" class="btn btn-success mt-4">Actualizar</button>
        </form>
        </div>
    </div>


</body>

</html>