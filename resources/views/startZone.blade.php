<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zona de Inicio</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: space-evenly;
        }

        .position-ref {
            position: relative;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }

        .message:hover {
            opacity: 0.4;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="message">
        <a href="{{ route('registerVehicleIndex') }}">
            <h2>Registrar Vehiculos</h2>
            <img src="https://icon-library.net/images/register-icon/register-icon-29.jpg" width="100px" height="100px"
                 alt="">
        </a>
    </div>
    <div class="message">
        <a href="{{ route('listVehicles') }}">
            <h2>Listar Vehiculos</h2>
            <img
                src="https://static.vecteezy.com/system/resources/previews/000/353/059/non_2x/vector-checklist-icon.jpg"
                width="150px" alt="">
        </a>
    </div>
    <div class="message">
        <a href="{{ route('vehicleStatistics') }}">
            <h2>Estadisticas Vehiculos</h2>
            <img src="https://cdn2.iconfinder.com/data/icons/business-272/64/STATISTICS-512.png" width="100px"
                 alt="">
        </a>

    </div>
</div>
</body>
</html>
