<!DOCTYPE html>
<html lang="en" ng-app="reagent_app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reagents</title>

    <!-- Fonts for icons-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ elixir('assets/css/app.css') }}" rel="stylesheet">
</head>
<body @if(Auth::user()) class="body-color-in" @else class="body-color-out" @endif ng-controller="main_ctrl">
{{--
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    --}}

    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @if(Auth::user())
            <div class="col-md-1 col-lg-3 col-xl-2 hidden-sm-down container-main-nav">
                @include('partials.main_nav')       {{-- Contiene las diferentes opciones del menu dependiendo del tipo de usuario --}}
            </div>
            @endif
            <div class="col @if(Auth::user()) offset-md-1 offset-lg-3 offset-xl-2 @endif container-main-content ">
                @if(Auth::user())
                    @include('partials.secondary_nav')  {{-- Contiene iconos de notificacion edicion de perfil y cerrar sesión --}}
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Librerias -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.js"></script>

    <!-- JavaScripts -->
    <script src="{{ elixir('assets/js/app.js') }}"></script>
</body>
</html>
