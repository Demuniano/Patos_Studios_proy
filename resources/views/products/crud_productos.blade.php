<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
    <script src="{{ asset('js/validacion_products.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
    <div class="container text-center">
        <div>
        <h1>Crear producto</h1>
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Ingrese el nombre del producto: </label>
            <input type="text" name="nameProduct" id="name" class="form-control mn-3" required >
            <label for="quantityProduct">Cantidad: </label>
            <input type="number" name="quantityProduct" id="quantity" class="form-control mn-3" required >
            <label for="priceProduct">Precio: </label>
            <input type="number" id="price"class="form-control mn-3" name="priceProduct">
            <label for="descriptionProduct">Descripcion: </label>
            <input type="text" id="description"class="form-control mn-3" name="descriptionProduct">
            <label for="flavorProduct">Sabor: </label>
            <input type="text" id="flavor"class="form-control mn-3" name="flavorProduct">
            <label for="image">Imagen: </label>
            <input type="file" name="image" id="image" class="form-control mn-3">
            <button type="submit" class="btn btn-success mt-4">Crear</button>
            <a href="{{route('products.export')}}" class="btn btn-warning mt-4">Exportar</a>         
        </form>
        </div>
        <canvas id="barChart" width="400" height="400"></canvas>

    <script>
        // Datos de ejemplo
        const nombresProductos = {!! json_encode($products->pluck('name')) !!}; // Obtén los nombres de los productos desde tu controlador
        const cantidades = {!! json_encode($products->pluck('quantity')) !!}; // Obtén las cantidades desde tu controlador

        // Configuración del gráfico
        const ctx = document.getElementById('barChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: nombresProductos,
                datasets: [{
                    label: 'Cantidad',
                    data: cantidades,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Color de las barras
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
        <div class="row">
            <div class="col">
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Sabor</th>
                            <th>Imagen</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->flavor}}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100px; max-height: 100px;">
                                @else
                                    No image available
                                @endif
                            </td>
                            <td>
                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Editar</a>
                                <form action="{{route('products.destroy', $product->id)}}" method="post">
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

