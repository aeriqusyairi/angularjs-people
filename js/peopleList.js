app.directive('peopleList', ['$http', function($http){
	return {
		restrict: 'E',
		templateUrl: 'template/people-list.html',
		controller: function(){
			var peopleList = this;
			$http.get('api/people.api.php').success(function(data){
				peopleList.list = data;
			});
		},
		controllerAs: 'peopleListCtrl'
	};
}]);