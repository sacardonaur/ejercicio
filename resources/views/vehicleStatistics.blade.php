<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estadisticas Vehiculos</title>

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

    </style>
</head>
<header>
    <a href="A765">Zona de Inicio</a>
</header>
<body>
<div class="message">
    <h1>Estadisticas Vehiculos</h1>
</div>
<hr/>
<div class="flex-center position-ref full-height">
    <div class="message">
        <h2>Mazda</h2>
        <img src="http://www.car-brand-names.com/wp-content/uploads/2016/02/Mazda-logo.png" height="100px" alt="">
        <h3>{{$vehiclesCount[0]}}</h3>
    </div>
    <div class="message">
        <h2>Toyota</h2>
        <img
            src="http://www.oogazone.com/wp-content/uploads/2019/03/best-15-toyota-logo-history-library.jpg"
            width="150px" alt="">
        <h3>{{$vehiclesCount[1]}}</h3>    </div>
    <div class="message">
        <h2>Chevrolet</h2>
        <img
            src="http://2.bp.blogspot.com/-ZziK-pFjiGk/Tm1uSvMEV2I/AAAAAAAAGeY/imVlv5AG_n4/s1600/Chevrolet_logo.jpg"
            height="100px"
            alt="">
        <h3>{{$vehiclesCount[2]}}</h3>
    </div>
</div>
</body>
</html>
