
@extends('layouts.standart-master')

@section('content')


    @auth

            <div class="container py-4">
                <h2>Listado de Tasa de Cambio</h2>

                <a href="{{ url('exchange_rate/create') }}" class="btn btn-primary btn-sm" > Nueva Cuenta </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach($exchange_rate as $exchange_rate)
                        <tr>
                            <td>{{ $exchange_rate->id }}</td>
                            <td>{{ $exchange_rate->name }}</td>
                            <td>{{ $exchange_rate->value }}</td>
                            <td><a href="{{ url('exchange_rate/'.$exchange_rate->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('exchange_rate/'.$exchange_rate->id ) }}" method="post">
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
