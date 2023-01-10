<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top nav-site">
    <div class="container-fluid navbar_site">
      <a class="navbar-brand nav_logo" href="#">
        <img src="assets/logo.png" alt=""/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon-navbar"></span>
      </button>
      <div class="collapse navbar-collapse links-navbar" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('space') }}">Espaço</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('earth') }}">Terra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('fantasy') }}">Fantasia</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


  {{-- <nav class="nav">
    <div class="container-fluid">
        <a class="nav__logo" href="#">
            <img src="assets/logo.png" alt=""/> </a>
        <ul class="list nav__list">
            <li class="nav__item">
                <a class="nav__link" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('space') }}">Espaço</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('earth') }}">Terra</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('fantasy') }}">Fantasia</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Contato</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav> --}}