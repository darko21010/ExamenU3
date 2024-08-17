<nav>
    <a href="{{ route('home') }}">Inicio</a> -
    <a href="{{ route('proyectos.index') }}">Proyectos</a> - <!-- Nueva opción -->
    <a href="{{ route('servicios.index') }}"> Servicios</a> - <!-- Nueva opción -->
<!--    <a href="{{ route('servicios.create') }}"> Crear Servicios</a> -  Nueva opción -->
    <a href="{{ route('clientes.options') }}">Clientes</a> -
    <a href="{{ route('blog.index') }}">Blog</a> - <!-- Nueva opción -->
    <a href="{{ route('contact.show') }}">Contacto</a> 
    
    @auth
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endauth
</nav>
