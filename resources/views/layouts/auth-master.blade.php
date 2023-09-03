<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicacion de Login</title>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container{
            width: 400px;
        }

    </style>

</head>
<body>

    <main class="for-container">

        @yield('content')
    </main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
