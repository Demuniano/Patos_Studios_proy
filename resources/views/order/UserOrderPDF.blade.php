<!-- resources/views/order/UserOrderPDF.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>

</head>
<body>
    <h2>Factura</h2>

    <div>
        <p><strong>Fecha:</strong> {{ $order->date }}</p>
        <p><strong>Usuario:</strong> {{ $order->user->name }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($details as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->cant }}</td>
                    <td>${{ $detail->unitp }}</td>
                    <td>${{ $detail->totalp }}</td>
                </tr>
                @php
                    $total += $detail->totalp;
                @endphp
            @endforeach
        </tbody>
    </table>

    <p><strong>Total: </strong>${{$total}}</p>
</body>
</html>
<style>

body {
    font-family: Arial, sans-serif;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

</style>
