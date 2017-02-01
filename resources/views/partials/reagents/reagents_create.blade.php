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
                                    <div class="col-12 text-center font-weight-normal">
                                        <p>
                                            <span class="text-primary">Asignatura <i class="fa fa-angle-double-right fa-2x align-middle" aria-hidden="true"></i></span>
                                            <span class="text-disabled"> Reactivo <i class="fa fa-angle-double-right fa-2x align-middle" aria-hidden="true"></i></span>
                                            <span class="text-disabled"> Preguntas <i class="fa fa-angle-double-right fa-2x align-middle" aria-hidden="true"></i></span>
                                            <span class="text-disabled">Finalizar <i class="fa fa-angle-double-right fa-2x align-middle" aria-hidden="true"></i></span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: @{{ progressBar }}%"> @{{ progressBar }}%</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>

                                <div class="row" ng-show="stepOne">
                                    <div ng-repeat="item in reagents" class="col-12 col-md-6 col-lg-4 mb-4 mt-1">
                                        <div class="card card-outline-primary pt-4 pb-4 text-primary" ng-click="saveSubject(item.id)">
                                            <div class="card-block text-center">
                                                <h3 class="card-title">@{{ item.subject }}</h3>
                                                <div class="row justify-content-center pt-3">
                                                    <div class="col-auto mr-4">
                                                        @{{ item.reagents }} Reactivos
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="alert-text">@{{ item.observations }}</span>
                                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-show="stepTwo">
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 form-group">
                                                <label for="name_reagent" class="form-control-label">Nombre del reactivo</label>
                                                <input type="text" class="form-control" id="name_reagent" ng-model="name_reagent">
                                            </div>

                                            <div class="col-12  col-md-10 offset-md-1 col-lg-8 offset-lg-2 form-group">
                                                <label for="detail_reagent">Descripción (opcional)</label>
                                                <textarea class="form-control" id="detail_reagent" rows="4" ng-model="detail_reagent"></textarea>
                                            </div>

                                            <div class="col-6 text-center">
                                                <button class="btn btn-outline-danger">Regresar</button>
                                            </div>
                                            <div class="col-6 text-center">
                                                <button class="btn btn-outline-primary" ng-click="saveReagent()">Continuar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-show="stepThree">
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12 form-group">
                                                <label for="subject">Tipo de reactivo</label>
                                                <select class="form-control" id="subject">
                                                    <option selected disabled>Seleccione:</option>
                                                    <option>Opción múltiple</option>
                                                    <option>Selección múltiple</option>
                                                    <option>Correspondencia</option>
                                                    <option>Completación</option>
                                                </select>
                                            </div>{{-- Tipo de reactivo --}}

                                            <div class="col-12 col-xl-6 form-group">
                                                <label>Nivel Taxonómico</label>
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="knowledge">
                                                            <input type="radio" class="form-check-input" name="taxonomic_level" id="knowledge" value="knowledge">
                                                            Conocimiento
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="understanding">
                                                            <input type="radio" class="form-check-input" name="taxonomic_level" id="understanding" value="understanding">
                                                            Comprensión
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="application">
                                                            <input type="radio" class="form-check-input" name="taxonomic_level" id="application" value="application">
                                                            Aplicación
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>{{-- Nivel Taxonómico --}}

                                            <div class="col-12 col-xl-6 form-group">
                                                <label>Nivel de dificultad</label>
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="low">
                                                            <input type="radio" class="form-check-input" name="difficulty level" id="low" value="low">
                                                            Bajo
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="medium">
                                                            <input type="radio" class="form-check-input" name="difficulty level" id="medium" value="medium">
                                                            Medio
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-sm-4 form-check">
                                                        <label class="form-check-label" for="high">
                                                            <input type="radio" class="form-check-input" name="difficulty level" id="high" value="high">
                                                            Alto
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>{{-- Nivel de dificultad --}}

                                            <div class="col-12 form-group">
                                                <label for="question">Pregunta</label>
                                                <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                                            </div>{{-- Pregunta --}}

                                            <div class="col-12">
                                                <p>Opciones de respuesta</p>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <label class="input-group" for="">
                                                            <div class="input-group-addon">a.-</div>
                                                            <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                                                            <div class="input-group-addon">-</div>
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="input-group" for="">
                                                            <div class="input-group-addon">b.-</div>
                                                            <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                                                            <div class="input-group-addon">-</div>
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="input-group" for="">
                                                            <div class="input-group-addon">c.-</div>
                                                            <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                                                            <div class="input-group-addon">-</div>
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="input-group" for="">
                                                            <div class="input-group-addon">d.-</div>
                                                            <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                                                            <div class="input-group-addon">-</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>{{-- Opciones de respuesta --}}

                                            <div class="col-12 form-group">
                                                <label for="response">Respuesta correcta</label>
                                                <input class="form-control" type="text" disabled>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="justification">Justificación</label>
                                                <textarea class="form-control" id="justification" rows="4" name="justification"></textarea>
                                            </div>

                                            <div class="col-6 text-center">
                                                <button class="btn btn-outline-danger">Regresar</button>
                                            </div>
                                            <div class="col-6 text-center">
                                                <button class="btn btn-outline-primary" ng-click="saveReagent()">Continuar</button>
                                            </div>

                                        </div>
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