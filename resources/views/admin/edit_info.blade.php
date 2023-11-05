<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>Pedidos</h1>
    <div class="container text-center">
        <div>
        <h1>Editar pedidos</h1>
        <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <label for="iduser">Ingrese el cliente del pedido: </label>
                <select name="iduser" id="iduser" class="form-control mb-3" required>
                    <option>Seleccione un cliente</option>
                    @foreach ($users as $user)
                        <option value={{$user->id}}>{{$user->name}}</option>
                    @endforeach
                </select>
                <label for="idproduct">Ingrese el producto: </label>
                <select name="idproduct" id="idproduct" class="form-control mb-3" required>
                    <option>Seleccione un producto</option>
                    @foreach ($products as $product)
                        <option value={{$product->id}}>{{$product->name}}</option>
                    @endforeach
                </select>
                <label for="cantidad">Ingrese la cantidad: </label>
                <input type="text" name="cantidad" id="cantidad" class="form-control mb-3" required>
                <label for="fecha">Fecha del pedido: </label>
                <input type="date" name="fecha" id="fecha" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</body>
</html>