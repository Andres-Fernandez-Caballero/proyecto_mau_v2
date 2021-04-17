@extends('layouts.appv2')
@section('content')

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand mx-auto" href="#">Productos en Stock</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li>
                  <!-- logout -->
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control" placeholder="Type query" aria-label="Search" />
                <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>

<section>
    <article class="m-4">
      <div class="list-group-item">
      @forelse ($pinturas as $pintura)
        <div class="card my-2 container">
          <div class="row">
            <div class="col-5">
              <svg class="mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                    viewBox="0 0 120 100">
                    <rect x="10" y="10" width="80" height="80" rx="20" ry="20" fill="{{$pintura->color_hex}}" />
                </svg>
            </div>
            <div class="col-7">
              <div class="">
                <h2 class="mt-2">{{$pintura->color_name}}</h2>
              <p class="my-2">Eterna N <strong>{{$pintura->color_number}}</strong></p>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div><p>Sin pinturas para mostrar</p></div>
      @endforelse
        

    </article>
    <!--fav -->
    <div class="fixed-action-btn">
        <a href="{{ route('pinturas.create')}}" class="btn btn-primary btn-lg btn-floating"><i class="fas fa-plus"></i></a>
    </div>
</section>

@endsection