<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fondo barra explorer -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1266F1">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1266F1">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1266F1">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>