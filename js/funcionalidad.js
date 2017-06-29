const stName = 'conciertos';
var app = angular.module('appConciertos', ['ngRoute', 'mobile-angular-ui']).config(($routeProvider) => {
    $routeProvider.when('/', {
        templateUrl:'modulos/home.html'
    }).when('/home', {
        templateUrl:'modulos/home.html'
    }).when('/add', {
        templateUrl:'modulos/add.html'
    }).when('/info', {
        templateUrl:'modulos/info.html'
    }).otherwise({
        redirectTo:'/'
    });
});

app.controller('controller', ($scope, $location) => {
    let conciertos = localStorage.getItem(stName);
    $scope.conciertos = conciertos ? JSON.parse(conciertos) : [];
    $scope.concierto = { tipo: 'Concierto' };
    $scope.submit = function() {
        $scope.conciertos.push($scope.concierto);
        $scope.concierto.foto = Math.random() < .5 ? 'MAXIMUS' : 'tarja-turunen';
        localStorage.setItem(stName, JSON.stringify($scope.conciertos));
        $location.path('#home');
    };
    $scope.eliminar = function(valor) {
        $scope.conciertos.splice(valor, 1);
        localStorage.setItem(stName, JSON.stringify($scope.conciertos));
    };
});

app.controller('principal', function($scope, $http, $route) {
    $http.get('data.json')
    .then(res => localStorage.setItem(stName, JSON.stringify(res.data)));
});