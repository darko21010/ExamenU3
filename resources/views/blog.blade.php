@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">

@include('menu')
    <h1 class="my-4">Blog</h1>
    

    USUARIO, USTED SE ENCUENTRA EN LA OPCION DE BLOG!!!!!

    <!-- Lista de Artículos del Blog -->
    <div class="row">
        <!-- Artículo 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/blog/imagen1.jpg') }}" alt="Artículo 1">
                <div class="card-body">
                    <h4 class="card-title">Título del Artículo 1</h4>
                    <p class="card-text">Descripción corta del artículo 1.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary">Leer Más</a>
                </div>
            </div>
        </div>

        <!-- Artículo 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/blog/imagen2.jpg') }}" alt="Artículo 2">
                <div class="card-body">
                    <h4 class="card-title">Título del Artículo 2</h4>
                    <p class="card-text">Descripción corta del artículo 2.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary">Leer Más</a>
                </div>
            </div>
        </div>

        <!-- Artículo 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/blog/imagen3.jpg') }}" alt="Artículo 3">
                <div class="card-body">
                    <h4 class="card-title">Título del Artículo 3</h4>
                    <p class="card-text">Descripción corta del artículo 3.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary">Leer Más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection