<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">HOMEpage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            @guest
            <a class="nav-link mx-1" href="{{route('register')}}">registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="{{route('login')}}">login</a>
          </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link mx-1" href="#">3</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link mx-1" href="{{route('trip.create')}}">crea Viaggio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="#">utente:<span class="fw-bold">{{Auth::user()->name}}</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-1" aria-current="page" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
            <form id="logout" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          @endauth
        </ul>
      </div>
    </div>
  </nav>