angular.module('reagent_app',['ngStorage'])
.controller('main_ctrl',['$scope', function ($scope) {
    $scope.URL = window.location.origin+'/';
}])
    //Controlador para el apartado de reactivos
    .controller('reagents_ctrl', ['$scope', function ($scope) {
        $scope.text = "Un nuevo mundo en la programación";
    }])
    .controller('reagents_create_ctrl',['$scope','$http','$localStorage','$sessionStorage', function ($scope,$http,$localStorage, $sessionStorage) {

        $scope.reagents = {};
        //Solicitamos los registros
        $http({
            method: 'GET',
            url: $scope.URL+'getReagents',
            headers: { 'Content-Type' : 'application/x-www-form-urlencoded'}
        }).then(function successCallback(response) {
            $scope.countReagents = response.data.length;
            $scope.reagents = response.data;
        }, function errorCallback(response) {

        });
        //--------Funciones que guardan los datos en localStorage
        //Creamos un objeto donde agregaremos los datos a ingresar
        var dataObj = {};
        //Funcion que almacena el id de la asignatura
        $scope.saveSubject = function (id) {
            dataObj = {
                "id_subject": id
            };
            $localStorage.reagentsObj = dataObj;
            $localStorage.stateView = {
                "one": false,
                "two": true,
                "three": false,
                "four": false,
                "progress": 25
            };
            viewActive();
        };
        //Funcion que almacena el nombre y detalle de un nuevo reactivo
        var dataReagent = {};
        $scope.saveReagent = function () {
            dataReagent = {
                "name_reagent": $scope.name_reagent,
                "detail_reagent": $scope.detail_reagent
            };
            dataObj.reagents = dataReagent;
            $localStorage.reagentsObj = dataObj;
            $localStorage.stateView = {
                "one": false,
                "two": false,
                "three": true,
                "four": false,
                "progress": 50
            };
            viewActive();
        };
        //Funcion que muestra la vista activa
        $scope.stepOne = true;
        $scope.progressBar = 0;
        function viewActive() {
            if (typeof $localStorage.stateView !== 'undefined') {
                //Muestra las diferentes vistas
                $scope.stepOne = $localStorage.stateView.one;
                $scope.stepTwo = $localStorage.stateView.two;
                $scope.stepThree = $localStorage.stateView.three;
                $scope.stepFour = $localStorage.stateView.four;
                $scope.progressBar = $localStorage.stateView.progress;
            }
        }
        viewActive();
    }])
    .controller('subject_ctrl', ['$scope','$http', function ($scope, $http) {
        $scope.subjects = {};
        $http({
            method: 'GET',
            url: $scope.URL+'getSubjects',
            headers: { 'Content-Type' : 'application/x-www-form-urlencoded'}
        }).then(function successCallback(response) {
            $scope.subjectsRegister = response.data.length;
            $scope.subjects = response.data;
        }, function errorCallback(response) {

        });
    }]);