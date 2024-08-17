<!DOCTYPE html>
<html>
<head>
    <title>Buscar Cliente para Editar</title>
</head>
<body>
    <h1>Buscar Cliente para Editar</h1>
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

    <form action="{{ route('clientes.findForEdit') }}" method="POST">
        @csrf
        <label for="id">ID del Cliente:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
