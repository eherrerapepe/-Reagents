@extends('layouts.app')

@section('content')
    <div class="container-fluid" ng-controller="reagents_ctrl">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-11 pt-3">

                <div class="row">
                    <div class="col-12 text-center">
                        <h1><span class="text-tiny text-gray">HOME </span><strong>Reactivos</strong></h1>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col col-md-8 col-lg-7 col-xl-6">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <input type="text" class="form-control" placeholder="Buscar reactivo...">
                                    <div class="input-group-addon background-secondary text-white">
                                        <span class="hidden-xs-down">BUSCAR</span>
                                        <span class="hidden-sm-up"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right col-auto col-md-4 col-lg-5 col-xl-6">
                                <a href="#!" class="btn background-secondary text-white">Crear <span class="hidden-xs-down">Reactivo</span></a>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>{{-- Menu principal de los reactivos --}}

                <div class="row container-reagents-main">
                    <div class="col">
                        <div class="row bg-white p-2">
                            <div class="col">
                                <div class="row">
                                    <div class="col-auto p-2 hidden-sm-down container-reagents-img">
                                        <h1 class="text-first">B</h1>
                                        <h1 class="text-end">D</h1>
                                    </div>
                                    <div class="col">
                                        <div class="row background-secondary text-white">
                                            <div class="col p-2">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span><strong>Materia: </strong> Base de datos.</span>
                                            </div>
                                            <div class="col">
                                                <span><strong>Estado: </strong>En revisión</span>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col">
                                                <span><strong>Fecha: </strong>2017-09-09</span>
                                            </div>
                                            <div class="col">
                                                <span><strong>Observaciones: </strong>Ninguna</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center align-self-end">
                                        <hr>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info">Editar</button>
                                            <button type="button" class="btn btn-info">Eliminar</button>
                                            <button type="button" class="btn btn-info">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        hola soy goku
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection