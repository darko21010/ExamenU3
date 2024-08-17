<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    @include('menu')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="{{ old('Apellido', $cliente->Apellido) }}" required>
        <br><br>
        
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="{{ old('Nombre', $cliente->Nombre) }}" required>
        <br><br>
        
        <label for="Email">Email:</label>
        <input type="text" id="Email" name="Email" value="{{ old('Email', $cliente->Email) }}" required>
        <br><br>

        <label for="Direccion">Direccion:</label>
        <input type="text" id="Direccion" name="Direccion" value="{{ old('Direccion', $cliente->Direccion) }}" required>
        <br><br>

        <label for="Telefono">Telefono:</label>
        <input type="number" id="Telefono" name="Telefono" value="{{ old('Telefono', $cliente->Telefono) }}" required>
        <br><br>
        
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
