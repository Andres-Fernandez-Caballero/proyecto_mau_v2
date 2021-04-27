@extends('layouts.appv2')

@section('content')

<!-- navbar principal -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-toggler" type="button" href="{{route('home')}}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a class="navbar-brand mx-auto" href="#">{{config('app.name')}}</a>
</nav>

<!-- contenido de la pagina -->
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <div class="card shadow align-middle m-5">
                <div class="card-header bg-primary text-white">
                    <h2>Agregar Pintura</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('pinturas.store')}}" method="POST" class="">
                        @csrf
                        <!-- color_name input -->
                        <div class="form-group row m-2">
                            <label class="col col-form-label text-md-rigth" for="color_name">Nombre del
                                color</label>
                            <input type="text" id="color_name" name="color_name" class="form-control"
                                placeholder="EJ: Turquesa" />
                        </div>
                        <!-- marca -->
                        <div class="m-2 mt-3">
                            <label for="marca_id" class="form-label">Marca</label>
                        <div class="input-group">
                            
                            <select name="marca_id" id="marca_id" class="form-select">
                                <option >Elija una...</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>    
                                @endforeach
                                
                            </select>
                            <button class="btn btn-outline-primary" data-mdb-toggle="modal"
                                data-mdb-target="#exampleModal" type="button"><i class="fas fa-plus"></i></button>
                        </div>
                        </div>
                        
                        <div class="row">
                            <!-- selector de color -->
                            <div class="col">
                                <div class="form-group m-2">
                                    <label for="color_hex" class="form-label">Color</label>
                                    <div class="input-group">
                                        <input type="color" id="color_hex" name="color_hex" class="form-control" value="#ffffff">
                                    </div>
                                </div>
                            </div>
                            <!-- numero de color -->
                            <div class="col m-2">
                                <div class="form-group">
                                    <label for="color_number" class="form-label">Nº color</label>
                                    <input type="number" id="color_number" name="color_number" class="form-control"
                                        placeholder="EJ: 001">
                                </div>
                            </div>
                        </div>  
                </div>
                <!-- guardar campos -->
                <div class="fixed-action-btn">
                    <button type="submit" class="btn btn-primary btn-lg btn-floating"><i
                            class="fas fa-save"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- modal form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title " id="exampleModalLabel">Agregar Marca</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('sections.Marca.create')
            </div>
        </div>
    </div>
</div>
@endsection
