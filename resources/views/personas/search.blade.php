<!DOCTYPE html>
<html>
<head>
    <title>Buscar Persona para Editar</title>
</head>
<body>
    <h1>Buscar Persona para Editar</h1>
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

    <form action="{{ route('personas.findForEdit') }}" method="POST">
        @csrf
        <label for="nPerCodigo">ID de la Persona:</label>
        <input type="number" id="nPerCodigo" name="nPerCodigo" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
