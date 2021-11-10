<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <h2 class="navbar-brand mx-auto">Pinturas Mau</h2>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Pinturas</a>
                </li>
                <li>
                  <!-- logout -->
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                @include('components.logoutform')
                </li>
            </ul>
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control" placeholder="Buscar Color" aria-label="Search" />
                <button class="btn btn-outline-warning" type="button" data-mdb-ripple-color="dark">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>