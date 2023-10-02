@extends('layouts.standart-master')

@section('title', 'Editar Cuentas')


@section('content')


    @auth

        <div class="container py-4">
            <h2>Editar Responsables</h2>
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
            <form action="{{ url('payment_type/'.$payment_type->id) }}" method="post">
                @method("PUT")
                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre Completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $payment_type->name }}" required />
                    </div>
                </div>

                <a href="{{ url('payment_type') }}" class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success" >Guardar</button>

            </form>
        </div>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection
