<nav class="navbar navbar-dark fixed-top sidebar-div">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar" style="background-color: rgb(3, 3, 44) !important">
            <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body sidebar-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 sidenav">
                    <li class="nav-item logo">
                        <a href="{{ route('user.index') }}" class="logo">
                            <img class="logo" src="../assets/logo.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('space.index') }}" class="btn btn-custom btn--entrar">Espaco</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('earth.index') }}" class="btn btn-custom btn--entrar">Terra</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('fantasy.index') }}" class="btn btn-custom btn--entrar">Fantasia</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="btn btn-custom btn--entrar">Administradores</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="btn btn-custom btn--logout">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
