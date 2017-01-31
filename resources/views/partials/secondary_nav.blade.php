<div class="pos-f-t background-secondary">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="p-4">
            <h4 class="text-white">Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <nav class="navbar navbar-inverse bg-inverse">
        <div class="hidden-md-up">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="hidden-sm-down">
            <div class="row align-items-center">
                <div class="col-1 text-white">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="REAGENTS">
                </div>
                <div class="col-auto">
                    <h2 class="text-white mb-0">AppName</h2>
                </div>
                <div class="col">
                    <ul class="nav float-right">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Noticias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Perfil</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Editar Perfil</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('logout') }}">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>