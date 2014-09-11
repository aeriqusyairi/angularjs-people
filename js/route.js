angular.module('routeApp', ['ngRoute'])

.config(function($routeProvider, $locationProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'template/home.html',
			controller: 'HomeController',
		});
})

.controller('HomeController', function($scope, $route, $routeParams, $location){

});