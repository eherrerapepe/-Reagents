@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-lg-5 pt-lg-5">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 container-left-login">
                <div class="row">

                    <div class="col-12 col-md-6 text-center align-self-center pt-4 pt-md-0">
                        <div class="row">
                            <div class="col-4 offset-4">
                                <img src="{{ asset('assets/img/logo.svg') }}" alt="REAGENTS">
                            </div>
                        </div>
                        <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small></p>
                    </div>

                    <div class="col-12 col-md-6 bg-white pb-md-3 pb-1">
                        <div class="row">
                            <div class="col-12 text-center mt-lg-4 mt-2">
                                <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                                <h2>Iniciar Sesión</h2>
                                <hr>
                            </div>
                            <div class="col col-md-10 offset-md-1 pl-lg-4 pr-lg-4">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                        <label for="email" class="{{ $errors->has('email') ? 'col-form-label' : '' }}">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="E-mail de usuario">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label for="password" class="{{ $errors->has('password') ? 'col-form-label' : '' }}">Contraseña</label>
                                        <input id="password" type="password" class="form-control" name="password" aria-describedby="passHelp" placeholder="Ingrese su contraseña">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <small id="passHelp" class="form-text text-danger">{{ $errors->first('password') }}</small>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Entrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
