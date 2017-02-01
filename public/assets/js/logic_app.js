angular.module('reagent_app',[])
.controller('main_ctrl',['$scope', function ($scope) {
    $scope.URL = window.location.origin+'/';
}])
    //Controlador para el apartado de reactivos
    .controller('reagents_ctrl', ['$scope', function ($scope) {
        $scope.text = "Un nuevo mundo en la programación";
    }])
    .controller('reagents_create_ctrl',['$scope','$http', function ($scope,$http) {
        $scope.reagents = {};
        $http({
            method: 'GET',
            url: $scope.URL+'getReagents',
            headers: { 'Content-Type' : 'application/x-www-form-urlencoded'}
        }).then(function successCallback(response) {
            $scope.countReagents = response.data.length;
            $scope.reagents = response.data;
        }, function errorCallback(response) {

        });
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