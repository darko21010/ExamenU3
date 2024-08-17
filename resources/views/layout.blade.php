<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Incluye aquí tus estilos y otros elementos del head -->
</head>
<body>
    @include('menu')
    <div class="container">
        @yield('content')
    </div>
    <!-- Incluye aquí tus scripts -->
</body>
</html>
