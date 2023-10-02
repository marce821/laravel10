
@extends('layouts.standart-master')

@section('content')

    {{-- <h1 class="container">Responsible</h1> --}}

    @auth

            <div class="container py-4">
                <h2>Listado de Responsables</h2>

                <a href="{{ url('responsible/create') }}" class="btn btn-primary btn-sm" > Nuevo Responsable </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>DNI</th>
                            <th>Name</th>
                            <th>Notas</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach($responsible as $responsible)
                        <tr>
                            <td>{{ $responsible->id }}</td>
                            <td>{{ $responsible->num_doc }}</td>
                            <td>{{ $responsible->name }}</td>
                            <td>{{ $responsible->nota }}</td>
                            <td><a href="{{ url('responsible/'.$responsible->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('responsible/'.$responsible->id ) }}" method="post">
                                    @method("DELETE")
                                    <button type="sumit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

    @endauth

    @guest
        <h3>Para ver el contenido <a href="/login">Inicia sesión</a></h3>
    @endguest

@endsection
