@extends('layouts.auth-master')

@section('content')

    <form action="/login" method="POST">
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="username" class="form-label">Username/Email</label>
            <input type="username" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
            <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <a href="/register">Crear Usuario</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection
