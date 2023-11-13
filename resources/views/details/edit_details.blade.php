@extends('layout.template')
<script src="{{ asset('js/validacion_details.js') }}" defer></script>
<h1>Detalles pedido</h1>
    <div class="container text-center">
        <div>
        <h1>Editar detalle pedido</h1>
        <form action="{{ route('details.update', $details->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="idorder">Seleccion el id del pedido: </label>
                <select name="idorder" id="idorder" class="form-control mb-3" required>
                    <option value="{{$details->order_id}}">{{$details->order_id}}</option>
                    @foreach ($orders as $order)
                        <option value='{{$order->id}}'>{{$order->id}}</option>
                    @endforeach
                </select>
                <label for="idproduct">Ingrese el producto: </label>
                <select name="idproduct" id="idproduct" class="form-control mb-3" required>
                    <option value="{{$details->product_id}}">{{$details->product->name}}</option>
                    @foreach ($products as $product)
                        <option value='{{$product->id}}'>{{$product->name}}</option>
                    @endforeach
                </select>
                <label for="cantidad">Cantidad: </label>
                <input type="number" name="cantidad" id="cantidad" class="form-control mb-3" value="{{$details->cant}}" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>