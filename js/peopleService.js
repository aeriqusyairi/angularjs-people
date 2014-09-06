app.service('peopleService', ['$http', function($http){
	var apiUrl = 'api/people.api.php';

	this.getPeopleList = function(){
		return $http.get(apiUrl + '?scope=list');
	}
}]);