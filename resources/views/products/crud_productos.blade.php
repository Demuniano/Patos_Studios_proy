<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
    <script src="{{ asset('js/validacion_products.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

        <div id="app">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>

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
            <div class="row">
                <div class="col">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            mounted() {
                this.createChart();
            },
            methods: {
                createChart() {
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const totalVapes = {!! json_encode($totalVapes) !!};
                    const products = {!! json_encode($products) !!};

                    const vapeProducts = products.filter(product => product.flavor === 'vape');
                    const vapeQuantities = vapeProducts.map(product => product.quantity);
                    const vapeNames = vapeProducts.map(product => product.name);

                    const vapePercentages = vapeQuantities.map(quantity => ((quantity / totalVapes) * 100).toFixed(2));

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: vapeNames,
                            datasets: [{
                                label: 'Porcentaje de Vapes',
                                data: vapePercentages,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Porcentaje'
                                    }
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Vapes'
                                    }
                                }
                            }
                        }
                    });
                }
            }
        });
    </script>
</body>
</html>

