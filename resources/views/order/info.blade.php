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
    <h1>Ordenes</h1>
    <div class="container text-center">
        <div>
        <h1>Crear nueva orden</h1>
        <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <label for="iduser">Ingrese el cliente del pedido: </label>
                <select name="iduser" id="iduser" class="form-control mb-3" required>
                    <option>Seleccione un cliente</option>
                    @foreach ($users as $user)
                        <option value='{{$user->id}}'>{{$user->name}}</option>
                    @endforeach
                </select>
                <label for="fecha">Fecha del pedido: </label>
                <input type="date" name="fecha" id="fecha" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{route('orders.pdf')}}" class="btn btn-danger">PDF</a>
            </form>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>Nombre del cliente</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->date}}</td>
                            <td>
                                <a href="{{route('orders.edit', $order->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('orders.destroy', $order->id)}}" method="post">
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