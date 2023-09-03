@extends('layouts.standart-master')

@section('content')

    {{-- <h1 class="container">Responsible</h1> --}}

    @auth
        <form action="/create" method="POST">
            @csrf
            <h1>Crear Responsable</h1>
            @include('layouts.partials.messages')
            <div class="form-floating mb-3">
                <input type="text" placeholder="name" class="form-control" id="name" name="name">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="num_doc" class="form-control" id="num_doc" name="num_doc">
                <label for="num_doc" class="form-label">DNI</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="notas" class="form-control" id="notas" name="notas">
                <label for="notas" class="form-label">Notas</label>
            </div>

            <button type="submit" class="btn btn-primary">Crear Responsable</button>
        </form>
    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection


