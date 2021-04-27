
<section>
    <form action="{{route('marcas.store')}}" method="POST" class="m-3">
        @csrf
        <label for="nombre" class="form-label">Nombre</label>
            <div class="input-group">
                <input type="text"  class="form-control" name="nombre" id="nombre" placeholder="Ej: Alba">
                <button type="submit" class="btn btn-outline-primary">Agregar</button>
            </div>
    </form>
</section>