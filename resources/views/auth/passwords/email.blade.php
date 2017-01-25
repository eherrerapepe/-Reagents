@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-lg-5 pt-lg-5">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 container-left-login">
                <div class="row">

                    <div class="col-12 col-md-6 text-center align-self-center pt-4 pt-md-0">
                        <i class="fa fa-google-wallet fa-4x" aria-hidden="true"></i>
                        <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small></p>
                    </div>

                    <div class="col-12 col-md-6 bg-white pb-md-3 pb-1">
                        <div class="row">
                            <div class="col-12 text-center mt-lg-4 mt-2">
                                <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                                <h2>Recuperar Acceso</h2>
                                <hr>
                            </div>
                            <div class="col-12 col-md-10 offset-md-1 pl-lg-4 pr-lg-4">
                                <div class="bg-info pl-3 p-2">
                                    <small class="text-white">Se enviara un link para recuperar la cuenta.</small>
                                </div>
                            </div>
                            <div class="col col-md-10 offset-md-1 pl-lg-4 pr-lg-4">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label for="email" class="col-form-label">Correo Electrónico</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo electrónico.">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Recuperar Cuenta
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Tengo una cuenta -<a class="btn-link" href="{{ url('/') }}"> Iniciar Sesión</a></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection