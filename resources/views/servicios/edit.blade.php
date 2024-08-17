@extends('layouts.app')

@section('content')

    @include('menu')
    @include('partials.validation-errors')

    <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $servicio->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $servicio->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
            @if($servicio->imagen)
                <img src="{{ asset($servicio->imagen) }}" alt="{{ $servicio->titulo }}" style="width: 100px; height: auto;">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
