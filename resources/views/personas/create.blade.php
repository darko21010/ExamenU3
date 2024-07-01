<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h1>Crear Persona</h1>
    @include('menu')

    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <label for="cPerApellido">Apellido:</label>
        <input type="text" id="cPerApellido" name="cPerApellido" value="{{ old('cPerApellido') }}" >
        {{ $errors->first('cPerApellido') }}
        <br><br>
        
        <label for="cPerNombre">Nombre:</label>
        <input type="text" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre') }}" >
        {{ $errors->first('cPerNombre') }}
        <br><br>
        
        <label for="cPerDireccion">Dirección:</label>
        <input type="text" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion') }}" >
        {{ $errors->first('cPerDireccion') }}
        <br><br>
        
        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" id="dPerFecNac" name="dPerFecNac" value="{{ old('dPerFecNac') }}" >
        {{ $errors->first('dPerFecNac') }}
        <br><br>
        
        <label for="nPerEdad">Edad:</label>
        <input type="number" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad') }}" >
        {{ $errors->first('nPerEdad') }}
        <br><br>
        
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo') }}" >
        {{ $errors->first('nPerSueldo') }}
        <br><br>
        
        <label for="cPerRnd">Rnd:</label>
        <input type="text" id="cPerRnd" name="cPerRnd" value="{{ old('cPerRnd') }}" >
        {{ $errors->first('cPerRnd') }}
        <br><br>
        
        <label for="nPerEstado">Estado:</label>
        <select id="nPerEstado" name="nPerEstado" >
            <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>1</option>
            <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>0</option>
        </select>
        {{ $errors->first('nPerEstado') }}
        <br><br>
        
        <button type="submit">Crear</button>
    </form>
</body>
</html>
