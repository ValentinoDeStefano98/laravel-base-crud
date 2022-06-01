<div class="container px-0">
  <div class="row d-flex align-items-center justify-content-between">
    <div class="col-8 text-start px-0">
      <nav class="navbar navbar-expand-lg py-4 p-0">
        <div class="container-fluid px-0">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Fumetti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comics.create')}}">Crea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contattaci</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="col-4 text-end px-0">
      <span><i class="fa-solid fa-user"></i> Accedi</span>
    </div>

  </div>

</div>


