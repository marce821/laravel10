@extends('layouts.standart-master')

@section('title', 'Editar Tasa de Cambio')


@section('content')


    @auth

        <div class="container py-4">
            <h2>Editar Tasa de Cambio</h2>
            @if($errors->any())

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
            <form action="{{ url('exchange_rate/'.$exchange_rate->id) }}" method="post">
                @method("PUT")
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre Completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $exchange_rate->name }}" required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="value" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="value" id="value" value="{{ $exchange_rate->value }}" required />
                    </div>
                </div>

                <a href="{{ url('exchange_rate') }}" class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success" >Guardar</button>

            </form>
        </div>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection
