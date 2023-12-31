<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
    <script src="{{ asset('js/validacion_details.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles pedido</h1>
    <div class="container text-center">
        <div>
        <h1>Crear detalle pedido</h1>
        <form action="{{ route('details.store') }}" method="POST">
                @csrf
                <label for="idorder">Seleccion el id del pedido: </label>
                <select name="idorder" id="idorder" class="form-control mb-3" required>
                    <option>Seleccione el id</option>
                    @foreach ($orders as $order)
                        <option value='{{$order->id}}'>{{$order->id}}</option>
                    @endforeach
                </select>
                <label for="idproduct">Ingrese el producto: </label>
                <select name="idproduct" id="idproduct" class="form-control mb-3" required>
                    <option>Seleccione un producto</option>
                    @foreach ($products as $product)
                        <option value='{{$product->id}}'>{{$product->name}}</option>
                    @endforeach
                </select>
                <label for="cantidad">Cantidad: </label>
                <input type="number" name="cantidad" id="cantidad" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>Id de la orden</th>
                            <th>Nombre del producto</th>
                            <th>Cantidad del producto</th>
                            <th>Precio unitario</th>
                            <th>Precio total</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $detail)
                        <tr>
                            <td>{{$detail->order->id}}</td>
                            <td>{{$detail->product->name}}</td>
                            <td>{{$detail->cant}}</td>
                            <td>{{$detail->unitp}}</td>
                            <td>{{$detail->totalp}}</td>
                            <td>
                                <a href="{{route('details.edit', $detail->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('details.destroy', $detail->id)}}" method="post">
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