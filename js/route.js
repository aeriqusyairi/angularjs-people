angular.module('routeApp', ['ngRoute'])

.config(function($routeProvider, $locationProvider){
	$routeProvider
		.when('/home', {
			templateUrl: 'template/home.html',
			controller: 'HomeController',
		})
		.when('/about', {
			templateUrl: 'template/about.html',
			controller: 'AboutController',
		});

		// configure html5 to get links working on jsfiddle
    	$locationProvider.html5Mode(true);
})

.controller('HomeController', function($scope, $route, $routeParams, $location){

})

.controller('AboutController', function($scope, $route, $routeParams, $location){

});