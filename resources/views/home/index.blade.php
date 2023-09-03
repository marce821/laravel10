@extends('layouts.app-master')

@section('content')

    <h1 class="container">HOME</h1>

    @auth
        Bienvenido {{ auth()->user()->name ?? auth()->user()->username }} estas autenticado.
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection


