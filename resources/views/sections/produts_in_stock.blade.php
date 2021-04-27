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
            <!-- Muestra de Color -->
            <div class="col-4">
              <svg class="mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                    viewBox="0 0 120 100">
                    <rect x="10" y="10" width="80" height="80" rx="20" ry="20" fill="{{$pintura->color_hex}}" />
                </svg>
            </div>
            <!-- informacion de la Pintura -->
            <div class="col-6">
              <div class="">
                <h2 class="mt-2">{{$pintura->color_name}}</h2>
              <p class="my-2">Eterna N <strong>{{$pintura->color_number}}</strong></p>
              </div>
            </div>
            <!-- Boton de opciones -->
            <div class="col-2 d-flex align-self-center">
              <div class=" dropdown">
                <a
                  class=""
                  href="#"
                  role="button"
                  id="dropdownMenuLink{{$pintura->id}}"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                <i class="fas fa-ellipsis-v"></i>
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink{{$pintura->id}}">
                  <li><a class="dropdown-item" href="#">Sin Stock</a></li>
                  <li><a class="dropdown-item" href="{{route('pinturas.edit', $pintura)}}">Editar</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <form action="{{route('pinturas.destroy', $pintura)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="dropdown-item text-danger" type="submit">Eliminar</button>  
                    </form>
                    
                  </li>
                </ul>
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