
@extends('layouts.standart-master')

@section('content')


    @auth

            <div class="container py-4">
                <h2>Listado de Cuentas</h2>

                <a href="{{ url('payment_type/create') }}" class="btn btn-primary btn-sm" > Nueva Cuenta </a>

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
                        @foreach($payment_type as $payment_type)
                        <tr>
                            <td>{{ $payment_type->id }}</td>
                            <td>{{ $payment_type->name }}</td>
                            <td><a href="{{ url('payment_type/'.$payment_type->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('payment_type/'.$payment_type->id ) }}" method="post">
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
