<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.   <a></a>min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>Clientes</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('cliente.create') }}" class="btn btn-link">Insertar Clientes</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar clientes Clientes</a>
            </div>
            <div class="cold-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>
