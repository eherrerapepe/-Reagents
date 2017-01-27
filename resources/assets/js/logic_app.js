angular.module('reagent_app',[])
.controller('main_ctrl',['$scope', function ($scope) {

}])
    //Controlador para el apartado de reactivos
    .controller('reagents_ctrl', ['$scope', function ($scope) {
        $scope.text = "Un nuevo mundo en la programación";
    }]);