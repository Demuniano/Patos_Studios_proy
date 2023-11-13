@extends('layout.template') 

@section('content')
<script src="{{asset('js/edit_Shoplist.js')}}"></script>
<div class="container">
    <div class="text-center mb-5">
      <h3>Carrito de compras</h3>
    </div>
    <div class="row">
    <div class="col">
        <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
            <thead>
                <tr>
                    <th></th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>SubTotal</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>
                        @if ($item->product->image)
                            <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="img-fluid ms-4" width="150">
                        @else
                            No image available
                        @endif
                    </td>
                    <td>{{$item->product->name}}</td>
                    <td>
                        <form action="{{ route('cart.update', ['id' => $item->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="50">
                            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                        </form>
                    </td>
                    <td>{{$item->product->price}}</td>
                    <td>{{$item->product->price * $item->quantity}}</td>
                    <td>
                        <form action="{{ route('cart.remove', ['id' => $item->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>
@endsection