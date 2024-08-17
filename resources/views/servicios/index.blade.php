@extends('layouts.app')

@section('content')

<div class="container">
    @include('menu')

    <h1>Lista de Servicios</h1>
    @if(session('estado'))
        <div class="alert alert-success">
            {{ session('estado') }}
        </div>
    @endif
    @foreach($servicios as $servicio)

    USUARIO, USTED SE ENCUENTRA EN LA OPCION DE SERVICIOS!!!!!

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $servicio->titulo }}</h5>
            <p class="card-text">{{ $servicio->descripcion }}</p>
            @if($servicio->imagen)
                <img src="{{ asset($servicio->imagen) }}" alt="{{ $servicio->titulo }}" style="width: 100px; height: auto;">
            @endif
            <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-primary">Modificar</a>
        </div>
    </div>

    @endforeach
</div>
@endsection
