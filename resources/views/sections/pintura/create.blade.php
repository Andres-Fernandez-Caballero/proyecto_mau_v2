@extends('layouts.appv2')

@section('content')

<!-- navbar principal -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-toggler" type="button" href="{{route('home')}}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a class="navbar-brand mx-auto" href="#">Agregar Pintura</a>
</nav>

<!-- contenido de la pagina -->
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <div class="card shadow align-middle m-5">
                <div class="card-body">
                    <form action="{{route('pinturas.store')}}" method="POST" class="">
                        @csrf
                        <!-- color_name input -->
                        <div class="form-group row m-2">
                            <label class="col col-form-label text-md-rigth" for="color_name">Nombre del
                                color</label>
                            <input type="text" id="color_name" name="color_name" class="form-control" placeholder="EJ: Turquesa"/>
                        </div>
                        <div class="row mx-1">
                            <div class="col">
                                <div class="form-group">
                                    <label for="marca_id" class="form-label">Marca</label>
                                    <select name="marca_id" id="marca_id" class="form-control">
                                        <option value="1">Eterna</option>
                                        <option value="1">Otra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="color_number" class="form-label">Nº color</label>
                                    <input type="number" id="color_number" name="color_number" class="form-control" placeholder="EJ: 001">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-2">
                            <label for="color_hex" class="form-label">Muestra de color</label>
                            <div class="input-group">
                                <!--
                                <span class="input-group-text" id="basic-addon1">#</span>
                                -->
                                <input type="color" id="color_hex" name="color_hex" class="form-control" value="#ffffff">
                            </div>
                        </div>
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

@endsection
