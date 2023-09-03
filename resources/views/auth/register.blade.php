@extends('layouts.auth-master')

@section('content')

    <form action="/register" method="POST">
        @csrf
        <h1>Create account</h1>
        @include('layouts.partials.messages')
        <div class="form-floating mb-3">
            <input type="email" placeholder="name@example.com" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <label for="email" class="form-label">Email address</label>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="name" class="form-control" id="name" name="name">
            <label for="name" class="form-label">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="username" class="form-control" id="username" name="username">
            <label for="username" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="password" class="form-control" id="password" name="password">
            <label for="password" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation">
            <label for="password_confirmation" class="form-label">Password confirmation</label>
        </div>
        <div class="mb-3">
            <a href="/login">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>

@endsection
