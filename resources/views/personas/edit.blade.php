<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
</head>
<body>
    <h1>Editar Persona</h1>
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

    <form action="{{ route('personas.update', $persona->nPerCodigo) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="cPerApellido">Apellido:</label>
        <input type="text" id="cPerApellido" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}" required>
        <br><br>
        
        <label for="cPerNombre">Nombre:</label>
        <input type="text" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}" required>
        <br><br>
        
        <label for="cPerDireccion">Dirección:</label>
        <input type="text" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}" required>
        <br><br>
        
        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" id="dPerFecNac" name="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}" required>
        <br><br>
        
        <label for="nPerEdad">Edad:</label>
        <input type="number" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad) }}" required>
        <br><br>
        
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}" required>
        <br><br>
        
        <label for="cPerRnd">Rnd:</label>
        <input type="text" id="cPerRnd" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}" required>
        <br><br>
        
        <label for="nPerEstado">Estado:</label>
        <select id="nPerEstado" name="nPerEstado" required>
            <option value="1" {{ old('nPerEstado', $persona->nPerEstado) == '1' ? 'selected' : '' }}>1</option>
            <option value="0" {{ old('nPerEstado', $persona->nPerEstado) == '0' ? 'selected' : '' }}>0</option>
        </select>
        <br><br>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
