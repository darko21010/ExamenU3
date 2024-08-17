@extends('layouts.app')

@section('content')

    @include('menu')
    @include('partials.validation-errors')

    <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
