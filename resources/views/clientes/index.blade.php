<!DOCTYPE html>
<html>
<head>
    <title>Listado de Clientes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Listado de Clientes</h1>
    @include('menu')

    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->Apellido }}</td>
                    <td>{{ $cliente->Nombre }}</td>
                    <td>{{ $cliente->Direccion }}</td>
                    <td>{{ $cliente->Telefono }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar este cliente?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
