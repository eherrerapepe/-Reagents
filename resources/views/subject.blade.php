@extends('layouts.app')

@section('content')
    <div class="container-fluid" ng-controller="subject_ctrl">
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
                            <div ng-show="subjectsRegister != 0" class="col">
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
                                        <tr ng-repeat="subject in subjects">
                                            <th class="hidden-md-down" scope="row">
                                                <div class="col-auto p-2 hidden-sm-down container-reagents-img">
                                                    <h1 class="text-first">B</h1>
                                                    <h1 class="text-end">D</h1>
                                                </div>
                                            </th>
                                            <td>
                                                @{{ subject.subject }}
                                            </td>
                                            <td>
                                                @{{ subject.detail }}
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-vertical" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-info btn-sm">Editar</button>
                                                    <form action="{{ route('update_subjects') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="@{{ subject.id }}" name="id_subject">
                                                        <button type="submit" class="btn btn-info btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div ng-hide="subjectsRegister != 0" class="col">
                                <div class="alert alert-info" role="alert">
                                    <strong>No hay asiganaturas registradas</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="row bg-white p-2 ml-md-2">
                            <div class="col">
                                <form action="{{ route('save_subjects') }}" method="post">
                                    <fieldset>
                                        <legend>Registrar nueva asignatura</legend>
                                        <div class="dropdown-divider"></div>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                        <div class="form-group {{ $errors->has('subject') ? 'has-danger' : '' }}">
                                            <label for="name" class="{{ $errors->has('subject') ? 'col-form-label' : '' }}">Asignatura</label>
                                            <input type="text" id="name" class="form-control" name="subject">
                                            @if ($errors->has('subject'))
                                                <span class="help-block">
                                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('subject') }}</small>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('detail') ? 'has-danger' : '' }}">
                                            <label for="detail" class="{{ $errors->has('detail') ? 'col-form-label' : '' }}">Descripción (opcional)</label>
                                            <textarea class="form-control" id="detail" rows="3" name="detail"></textarea>
                                            @if ($errors->has('detail'))
                                                <span class="help-block">
                                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('detail') }}</small>
                                            </span>
                                            @endif
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