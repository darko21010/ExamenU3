@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido al menu de INICIO</h1>
    <p>Este es un mensaje de bienvenida para todos los usuarios.</p>
    @auth
        <p>Hola, {{ auth()->user()->name }}. ¡Bienvenido de nuevo!</p>
    @endauth
@endsection
