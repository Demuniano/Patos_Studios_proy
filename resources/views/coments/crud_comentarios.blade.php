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
    <h1>Comentarios</h1>
    <div class="container text-center">
        <div>
        <h1>Crear comentario</h1>
        <form action="{{route('coments.store')}}" method="post">
            @csrf
            <label for="name">Nombre del usuario: </label>
            <select name="user" id="user" class="form-control mn-3">
                <option value="">Seleccione un usuario</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <label for="name">Nombre del producto: </label>
            <select name="product" id="product" class="form-control mn-3">
                <option value="">Seleccione un producto</option>
                @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
            <label for="date">Ingrese La fecha: </label>
            <input type="date" name="dateComent" id="date" class="form-control mn-3" required >
            <label for="descriptionComent">Descripcion: </label>
            <input type="text" name="descriptionComent" id="description" class="form-control mn-3" required >
            <label for="qualificationComent">Calificacion: </label>
            <input type="text" id="qualification"class="form-control mn-3" name="qualificationComent">
            <button type="submit" class="btn btn-success mt-4">Crear</button>
        </form>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Calificacion</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coments as $coment)
                        <tr>
                            <td>{{$coment->date}}</td>
                            <td>{{$coment->description}}</td>
                            <td>{{$coment->qualification}}</td>
                            <td>
                                <a href="{{route('coments.edit', $coment->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('coments.destroy', $coment->id)}}" method="post">
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