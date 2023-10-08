@extends('layouts.standart-master')

@section('title', 'Registro de Tasa de Compra')


@section('content')


    @auth

        <div class="container py-4">
            <h2>Registro de Tasa de Compra</h2>
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
            <form action="{{ url('purchase_rate') }}" method="post">
                @csrf

                <div class="mb-3 row">
                    <label for="value" class="col-sm-2 col-form-label">Nombre Completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="value" id="value" value="{{ old('value') }}" required />
                    </div>
                </div>

                <a href="{{ url('purchase_rate') }}" class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success" >Guardar</button>

            </form>
        </div>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection
