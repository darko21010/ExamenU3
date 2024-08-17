<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
</head>
<body>
    <h1>Crear Cliente</h1>
    @include('menu')

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="{{ old('Apellido') }}" >
        {{ $errors->first('Apellido') }}
        <br><br>
        
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="{{ old('Nombre') }}" >
        {{ $errors->first('Nombre') }}
        <br><br>
        
        <label for="Email">Email:</label>
        <input type="mail" id="Email" name="Email" value="{{ old('Email') }}" >
        {{ $errors->first('cPerDireccion') }}
        <br><br>

        <label for="Direccion">Dirección:</label>
        <input type="text" id="Direccion" name="Direccion" value="{{ old('Direccion') }}" >
        {{ $errors->first('Direccion') }}
        <br><br>

        <label for="Telefono">Telefono:</label>
        <input type="number" id="Telefono" name="Telefono" value="{{ old('Telefono') }}" >
        {{ $errors->first('Telefono') }}
        <br><br>
        
        
        <button type="submit">Crear</button>
    </form>
</body>
</html>
