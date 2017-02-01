@extends('layouts.app')

@section('content')
    <div class="container-fluid" ng-controller="reagents_create_ctrl">
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
                                    <div class="col-12 col-md-6 col-lg-4 mb-4 mt-1">
                                        <a href="">
                                            <div class="card card-outline-primary pt-4 pb-4 text-primary">
                                                <div class="card-block text-center">
                                                    <h3 class="card-title">Redes</h3>
                                                    <div class="row justify-content-center pt-3">
                                                        <div class="col-auto mr-4">
                                                            129 Reactivos
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class="alert-text">98</span>
                                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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