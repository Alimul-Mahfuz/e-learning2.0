
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex">
      <a class="navbar-brand" href="{{route('stddash')}}">E-Learning</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('stddash')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>

          <li class="nav-item">
            <a style="color: white" class="nav-link btn btn-danger" href="{{route('stdlogout')}}">Logout</a>
          </li>
          {{-- <form class="d-flex">
            <input class="form-control sinput me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form> --}}
        </ul>
      </div>
    </div>
  </nav>
  