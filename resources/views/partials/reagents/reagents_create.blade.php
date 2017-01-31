@extends('layouts.app')

@section('content')
    <div class="container-fluid" ng-controller="reagents_ctrl">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 pt-3">

                <div class="row">
                    <div class="col-12 text-center">
                        <h1><span class="text-tiny text-gray">CREAR </span><strong>REACTIVO</strong></h1>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col  text-right">
                                <a href="{{ route('reagents') }}" class="btn background-secondary text-white">Regresar</a>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row container-reagents-main">
                    <div class="col">
                        <div class="row bg-white p-2">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3>Seleccione la materia a crear el reactivo</h3>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title">Base de datos</h4>
                                                <p class="card-text">Al acceder podra crear nuevos reactivos bajo este materia.</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">grupos de reactivos <span class="badge badge-pill badge-info ml-2">10</span> </li>
                                                    <li class="list-group-item">preguntas formuladas <span class="badge badge-pill badge-info ml-2">129</span></li>
                                                    <li class="list-group-item">preguntas por correguir <span class="badge badge-pill badge-info ml-2">49</span></li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-12 text-center mt-3">
                                                        <a href="#" class="btn btn-primary">Crear reactivo</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>{{-- Contenedor para la materia --}}
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title">Redes</h4>
                                                <p class="card-text">Al acceder podra crear nuevos reactivos bajo este materia.</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">grupos de reactivos <span class="badge badge-pill badge-info ml-2">10</span> </li>
                                                    <li class="list-group-item">preguntas formuladas <span class="badge badge-pill badge-info ml-2">129</span></li>
                                                    <li class="list-group-item">preguntas por correguir <span class="badge badge-pill badge-info ml-2">49</span></li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-12 text-center mt-3">
                                                        <a href="#" class="btn btn-primary">Crear reactivo</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center p-4">
                                        <a href="{{ route('subjects') }}">
                                            <span class="btn btn-primary">
                                                <i class="fa fa-plus pl-3 pr-3" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection