
@extends('layouts.standart-master')

@section('content')


    @auth

            <div class="container py-4">
                <h2>Listado de Cuentas de Destino</h2>

                <a href="{{ url('destination_bank/create') }}" class="btn btn-primary btn-sm" > Nueva Cuenta </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach($destination_bank as $destination_bank)
                        <tr>
                            <td>{{ $destination_bank->id }}</td>
                            <td>{{ $destination_bank->name }}</td>
                            <td><a href="{{ url('destination_bank/'.$destination_bank->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('destination_bank/'.$destination_bank->id ) }}" method="post">
                                    @method("DELETE")
                                    @csrf
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
