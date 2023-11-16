<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Grafica</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        canvas {
            width: 80%;
            max-width: 600px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gráfico de Cantidad de Productos</h1>

        <canvas id="pieChart" width="400" height="400"></canvas>
    </div>
    <script>
    const nombresProductos = {!! json_encode($products->pluck('name')) !!};
    const porcentajes = {!! json_encode($percentages) !!};

    const ctx = document.getElementById('pieChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: nombresProductos,
            datasets: [{
                label: 'Porcentaje',
                data: porcentajes,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(231, 233, 237, 0.5)',
                    'rgba(245, 192, 50, 0.5)',
                    'rgba(66, 245, 197, 0.5)',
                    'rgba(123, 31, 162, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(231, 233, 237, 1)',
                    'rgba(245, 192, 50, 1)',
                    'rgba(66, 245, 197, 1)',
                    'rgba(123, 31, 162, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += parseFloat(context.parsed.toFixed(2)) + '%';
                            return label;
                        }
                    }
                }
            }
        }
    });
</script>
</body>
</html>


