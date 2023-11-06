<!DOCTYPE html>
<html lang="en">
    @extends("layout.template")
    <script src="{{ asset('js/validacion_products.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Productos</h1>
    <div class="container text-center">
        <div>
        <h1>Editar producto</h1>
        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name">Ingrese el nombre del producto: </label>
            <input type="text" name="nameProduct" id="name" class="form-control mn-3" required value="{{ $product->name }}">
            <label for="quantityProduct">Cantidad: </label>
            <input type="number" name="quantityProduct" id="quantity" class="form-control mn-3" required value="{{ $product->quantity }}">
            <label for="priceProduct">Precio: </label>
            <input type="number" id="price" class="form-control mn-3" name="priceProduct" value="{{ $product->price }}">
            <label for="descriptionProduct">Descripcion: </label>
            <input type="text" id="description" class="form-control mn-3" name="descriptionProduct" value="{{ $product->description }}">
            <label for="flavorProduct">Sabor: </label>
            <input type="text" id="flavor" class="form-control mn-3" name="flavorProduct" value="{{ $product->flavor }}">
            <label for="image">Imagen: </label>
            <input type="file" name="image" id="image" class="form-control mn-3">
            @if ($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100px; max-height: 100px;">
            @endif
            <button type="submit" class="btn btn-success mt-4">Actualizar</button>
        </form>
        </div>
    </div>
</body>
</html>
