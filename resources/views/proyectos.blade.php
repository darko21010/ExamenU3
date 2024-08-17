<!-- resources/views/proyectos/proyectos.blade.php -->

@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')

<div class="container">

@include('menu')

    <h1 class="my-4">Proyectos</h1>

   

    USUARIO, USTED SE ENCUENTRA EN LA OPCION DE PROYECTOS!!!!!

    <!-- Lista de Proyectos -->
    <div class="row">
        <!-- Proyecto 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/proyectos/proyecto1.jpg') }}" alt="Proyecto 1">
                <div class="card-body">
                    <h4 class="card-title">Título del Proyecto 1</h4>
                    <p class="card-text">Descripción corta del proyecto 1.</p>
                </div>
                <div class="card-footer">
                <a class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/proyectos/proyecto2.jpg') }}" alt="Proyecto 2">
                <div class="card-body">
                    <h4 class="card-title">Título del Proyecto 2</h4>
                    <p class="card-text">Descripción corta del proyecto 2.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/proyectos/proyecto3.jpg') }}" alt="Proyecto 3">
                <div class="card-body">
                    <h4 class="card-title">Título del Proyecto 3</h4>
                    <p class="card-text">Descripción corta del proyecto 3.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection
