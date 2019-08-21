<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listar Vehiculos</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

        h2{
            text-align: center;
        }
        .container{
            padding-top: 5%;
        }
        table{
            padding-top: 10%;
        }
        b{
            color: red;
            font-weight: bold;
        }

    </style>
</head>
<header>
    <a href="A765">Zona de Inicio</a>
</header>
<body>

<div class="container">
    <h2>Listado de Vehiculos</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Dueño</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>
                    @if($vehicle->brand == "Mazda")
                        {{ $vehicle->plate }} - Los de Mazda son los mejores
                    @elseif($vehicle->brand == "Toyota")
                        <b>{{$vehicle->plate}}</b>
                    @else
                        {{ $vehicle->plate }}
                    @endif
                </td>
                <td>{{ $vehicle->brand }}</td>
                <td>{{ $vehicle->owner }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
