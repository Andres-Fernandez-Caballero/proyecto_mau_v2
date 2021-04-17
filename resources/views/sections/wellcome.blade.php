@extends('layouts.wellcome_app')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                            
                        @if(env('APP_USER_REGISTER',false))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <main class="wellcome-container">
                <header class="wellcome-card">
                    <div class="wellcome-content">
                        <h1 class="wellcome-title wellcome-m16 flex-center">
                            Proyecto-Mau
                        </h1>
                        <p class="wellcome-m16">Bienvenida Maumosa esta pagina la hice para vos con amor <span class="wellcome-heart">♥</span>.</p>
                    </div>
                </header>
            </main>
        </div>
        <footer>
            <!-- Agregar un footer lindo ;) -->
            
        </footer>
@endsection