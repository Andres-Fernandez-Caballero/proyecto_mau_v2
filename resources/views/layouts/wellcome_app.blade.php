<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        
        <!-- titulo -->
        <title>{{config("app.name")}}</title>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/wellcome.css')}}" rel="stylesheet">
    </head>
    <body class="">
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>    
    <!-- fin -->
    </body>
</html>