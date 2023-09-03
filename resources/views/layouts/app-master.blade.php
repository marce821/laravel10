<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicacion de Login</title>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @auth
        @include('layouts.partials.navbar')
    @endauth


    <main class="container">
        @yield('content')
    </main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
