@extends('layout.template')
@section('content')
<div class="container product-box mb-4">
    <div class="row">
        <div class="col-lg-5 mt-5">
            @if ($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid width="50">
            @else
                No image available
            @endif
        </div>
        <div class="col-lg-7 mt-5">
            <div class="product-details">
                <div class="detail-box">
                    <h1>{{$product->name}}</h1>
                    <p><strong>Price:</strong> ${{$product->price}}</p>
                    <p><strong>Description:</strong> {{$product->description}}</p>
                    <p><strong>Sabor:</strong> {{$product->flavor}}</p>
                    
                    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="post" class="">
                        @csrf
                        <label for="cant">Cantidad:</label>
                        <input type="number" id="cant" name="quantity" class="mb-3" value="1" min="1" max="50">
                        <div>
                            <button type="submit" name="action" value="buy" class="btn btn-primary btn-sm mb-3">Comprar</button>
                            <button type="submit" name="action" value="add_to_cart" class="btn btn-success btn-sm mb-3">Añadir a carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="comments">
                <div class="comment-detail">
                    <h2>Comentarios</h2>
                    @if ($comments->count() > 0)
                        @foreach ($comments as $coment)
                        <div class="user-comment">
                            <div class="comment-detail">
                            <h4>{{ $coment->user->name }}</h4>
                            <p>{{ $coment->description }}</p>
                            <p><strong>Calificacion: </strong>{{ $coment->qualification }}</p>
                            <p><strong>Fecha: </strong>{{ $coment->date }}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>No hay comentarios disponibles.</p>
                    @endif
                    <a href="{{route('comentsUser.show', $product->id)}}" class="btn btn-primary mt-3 mb-4">Escribir comentario</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
