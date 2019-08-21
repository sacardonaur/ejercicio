<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrar Vehiculo</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        h1, h4 {
            text-align: center;
        }

    </style>
</head>

<header>
    <a href="A765">Zona de Inicio</a>
</header>
<body>
<div class="container">
    <form role="form" method="POST" action="{{ route('registerVehicle') }}">
        @csrf
        <h1>Registrar Vehiculo</h1>
        <hr/>
        @if ($message = session('successMessage'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> {{ $message }} </strong>
            </div>
        @endif
        <div class="col-sm-6">

            <h4 class="page-header">Datos Vehiculo</h4>

            <div class="form-group float-label-control">
                <label for="">Placa</label>
                <input name="plate" id="plate" type="text" class="form-control" placeholder="Placa">
            </div>

            <div class="form-group float-label-control">
                <label for="">Marca</label>
                <select class="form-control custom-select" id="brand" name="brand">
                    <option selected>Seleccione una marca</option>
                    <option value="Mazda">Mazda</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Chevrolet">Chevrolet</option>
                </select>
                @error('brand')
                <div class="alert alert-danger" role="alert">
                    <strong>La marca seleccionada no es correcta</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <h4 class="page-header">Datos dueño</h4>
            <div class="form-group float-label-control">
                <label for="">Nombre</label>
                <input id="name" name="name" type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group float-label-control">
                <label for="">Cedula</label>
                <input id="cc" name="cc" type="number" class="form-control" placeholder="Cedula">
            </div>

        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Registrar vehiculo') }}
        </button>
    </form>
</div>
</body>
