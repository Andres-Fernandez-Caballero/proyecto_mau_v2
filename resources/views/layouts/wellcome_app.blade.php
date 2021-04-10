<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <title>{{config("app.name")}}</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/wellcome.css') }}" rel="stylesheet">    
    </head>
    <body>
        <div>
            <main>
                @yield('content')
            </main>
        </div>
    <!-- fin -->
    </body>
</html>