
@extends('layouts.standart-master')

@section('content')


    @auth

            <div class="container py-4">
                <h2>Listado de Tasa de Compra</h2>

                <a href="{{ url('purchase_rate/create') }}" class="btn btn-primary btn-sm" > Nueva Cuenta </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Valor</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach($purchase_rate as $purchase_rate)
                        <tr>
                            <td>{{ $purchase_rate->id }}</td>
                            <td>{{ $purchase_rate->value }}</td>
                            <td><a href="{{ url('purchase_rate/'.$purchase_rate->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('purchase_rate/'.$purchase_rate->id ) }}" method="post">
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
