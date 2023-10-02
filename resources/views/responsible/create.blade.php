@extends('layouts.standart-master')

@section('title', 'Registro de Responsables')


@section('content')


    @auth

        <div class="container py-4">
            <h2>Registro de </h2>
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
            <form action="{{ url('responsible') }}" method="post">
                @csrf

                <div class="mb-3 row">
                    <label for="num_doc" class="col-sm-2 col-form-label">DNI</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="num_doc" id="num_doc" value="{{ old('num_doc') }}"  />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre Completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nota" class="col-sm-2 col-form-label">Notas</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nota" id="nota" value="{{ old('nota') }}"  />
                    </div>
                </div>

                <a href="{{ url('responsible') }}" class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success" >Guardar</button>

            </form>
        </div>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection
