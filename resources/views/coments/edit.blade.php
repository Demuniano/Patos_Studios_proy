<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>Comentarios</h1>
    <div class="container text-center">
        <div>
        <h1>Editar comentario</h1>
        <form action="{{route('coments.update',$coment->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="user">Nombre del usuario: </label>
            <select name="user" id="user" class="form-control mn-3">
                <option value="{{$coment->idUser}}">{{$coment->user->name}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <label for="product">Nombre del producto: </label>
            <select name="product" id="product" class="form-control mn-3">
                <option value="{{$coment->idProduct}}">{{$coment->product->name}}</option>
                @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
            <label for="date">Ingrese la fecha del comentario: </label>
            <input type="date" name="dateComent" id="date" class="form-control mn-3" required value="{{$coment->date}}">
            <label for="descriptionComent">Description: </label>
            <input type="text" name="descriptionComent" id="description" class="form-control mn-3" required value="{{$coment->description}}">
            <label for="qualificationComent">Calificacion: </label>
            <input type="text" id="qualification"class="form-control mn-3" name="qualificationComent" value="{{$coment->qualification}}">
            <button type="submit" class="btn btn-success mt-4">Actualizar</button>
        </form>
        </div>
    </div>


</body>

</html>