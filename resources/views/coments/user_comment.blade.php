@extends('layout.template')
@section('content')
<body>
<h1>Comentarios</h1>
    <div class="container text-center">
    <div>
        <h1>Crear comentario</h1>
        <form action="{{route('comentsUser.store')}}" method="post">
            @csrf
            <label for="descriptionComent">Descripcion: </label>
            <input type="text" name="descriptionComent" id="description" class="form-control mn-3" required >
            <label for="qualificationComent">Calificacion: </label>
            <input type="number" id="qualification"class="form-control mn-3" name="qualificationComent" min="1" max="5">
            <button type="submit" class="btn btn-success mt-4">Crear</button>
        </form>
        </div>
    </div>


</body>
@endsection