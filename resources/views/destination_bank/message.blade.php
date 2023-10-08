@extends('layouts.standart-master')

@section('title', 'Registro de Cuentas')


@section('content')
@auth

    <div class="container py-4">
        <h2>{{ $msg }}</h2>

        <a href="{{ url('destination_bank') }}" class="btn btn-secondary">Regresar</a>

    </div>

@endauth

@guest
    <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
@endguest

@endsection
