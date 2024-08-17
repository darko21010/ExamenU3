<!DOCTYPE html>
<html>
<head>
    <title>Opciones de Clientes</title>
</head>
<body>
    <h1>Opciones de Clientes</h1>

    @include('menu')
    <ul>
        <li><a href="{{ route('clientes.index') }}">Ver Listado de Clientes</a></li>
        <li><a href="{{ route('clientes.create') }}">Agregar Nuevo Cliente</a></li>
        <li><a href="{{ route('clientes.search') }}">Editar Cliente</a></li>
    </ul>
</body>
</html>
