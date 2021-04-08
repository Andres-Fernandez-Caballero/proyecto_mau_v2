@extends('layouts.appv2')

@section('content')
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-toggler" type="button" href="{{route('home')}}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a class="navbar-brand mx-auto" href="#">Agregar Pintura</a>
</nav>

<section class="m-4">
    <form action="{{route('pinturas.store')}}" method="POST" class="">
        @csrf
        <!-- color_name input -->
        <div class="form-outline mb-4">
            <input type="+6+++" id="color_name" name="color_name" class="form-control" />
            <label class="form-label" for="color_name" >Nombre del color</label>
        </div>
        <div class="">
            <div>
                <label for="marca_id" class="form-label">Marca</label>
            <select name="marca_id" id="marca_id" class="form-control">
                <option value="1">Eterna</option>
                <option value="1">Otra</option>
            </select>
            </div>
            <div class="form-outline">
                <input type="number" id="color_number" name="color_number" class="form-control">
                <label for="color_number" class="form-label">Codigo de color</label>
            </div>

            
        </div>
        

        <div class="fixed-action-btn">
            <button type="submit" class="btn btn-primary btn-lg btn-floating"><i class="fas fa-save"></i></button>
        </div>
    </form>
</section>

@endsection
