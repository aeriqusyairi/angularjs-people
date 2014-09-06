//parse from people api
app.service('peopleService', ['$http', function($http){
	
	var apiUrl = 'api/people.api.php';

	//parse people list from api
	this.getPeopleList = function(){
		return $http.get(apiUrl + '?scope=list');
	}
}]);