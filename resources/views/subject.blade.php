@extends('layouts.app')

@section('content')
    <div class="container-fluid" ng-controller="reagents_ctrl">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 pt-3">

                <div class="row">
                    <div class="col-12 text-center">
                        <h1><span class="text-tiny text-gray">HOME </span><strong>ASIGNATURAS</strong></h1>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col col-md-8 col-lg-7 col-xl-6">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <input type="text" class="form-control" placeholder="Buscar asignatura...">
                                    <div class="input-group-addon background-secondary text-white">
                                        <span class="hidden-xs-down">BUSCAR</span>
                                        <span class="hidden-sm-up"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>{{-- Menu principal de los reactivos --}}

                <div class="row container-reagents-main">
                    <div class="col-12 col-md-7">
                        <div class="row bg-white p-2">
                            <div class="col">
                                <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th class="hidden-md-down">Slug</th>
                                        <th>Asignatura</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="hidden-md-down" scope="row">
                                            <div class="col-auto p-2 hidden-sm-down container-reagents-img">
                                                <h1 class="text-first">B</h1>
                                                <h1 class="text-end">D</h1>
                                            </div>
                                        </th>
                                        <td>
                                            Base de datos
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm btn-group-vertical" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info">Editar</button>
                                                <button type="button" class="btn btn-info">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="row bg-white p-2 ml-md-2">
                            <div class="col">
                                <form action="">
                                    <fieldset>
                                        <legend>Registrar nueva asignatura</legend>
                                        <div class="dropdown-divider"></div>
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="name">Asignatura</label>
                                            <input type="text" id="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Descripción (opcional)</label>
                                            <textarea class="form-control" id="detail" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-color-input">Slug Color</label>
                                            <input class="form-control" type="color" value="#fcfcfcf" id="example-color-input">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary">Guardar</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection