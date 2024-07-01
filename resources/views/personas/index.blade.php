<!DOCTYPE html>
<html>
<head>
    <title>Listado de Personas</title>
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
    <h1>Listado de Personas</h1>
    @include('menu')

    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad</th>
                <th>Sueldo</th>
                <th>Rnd</th>
                <th>Estado</th>
                <th>Sexo</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nPerCodigo }}</td>
                    <td>{{ $persona->cPerApellido }}</td>
                    <td>{{ $persona->cPerNombre }}</td>
                    <td>{{ $persona->cPerDireccion }}</td>
                    <td>{{ $persona->dPerFecNac }}</td>
                    <td>{{ $persona->nPerEdad }}</td>
                    <td>{{ $persona->nPerSueldo }}</td>
                    <td>{{ $persona->cPerRnd }}</td>
                    <td>{{ $persona->nPerEstado }}</td>
                    <td>{{ $persona->cPerSexo }}</td>
                    <td>{{ $persona->created_at }}</td>
                    <td>{{ $persona->updated_at }}</td>
                    <td>
                        <a href="{{ route('personas.edit', $persona->nPerCodigo) }}">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar esta persona?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
