@extends('layouts.appv2')
@section('content')

@include('components.navbarv2')

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