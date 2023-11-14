@extends('layout.template')

<div class="container">
    <h2 class="mb-4"><strong>Registro de compras</strong></h2>

    @foreach($orders as $order)
        <div class="row">
            <div class="col">
                <h4 class="mt-4">Ref pedido: {{ $order->id }}</h4>
                <a href="{{ route('UserOrders.pdf', $order->id) }}" class="btn btn-success">Generar PDF</a>
                <table class="table table-dark table-sm mt-4 mx-auto table-responsive">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach($order->detail as $detail)
                            @php
                                $subtotal = $detail->unitp * $detail->cant;
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td>
                                    @if ($detail->product->image)
                                        <img src="{{ asset('images/' . $detail->product->image) }}" alt="{{ $detail->product->name }}" class="img-fluid" width="110">
                                    @else
                                        No image available
                                    @endif
                                </td>
                                <td>{{ $detail->product->name }}</td>
                                <td>{{ $detail->cant }}</td>
                                <td>{{ $detail->unitp }}</td>
                                <td>{{ $subtotal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
