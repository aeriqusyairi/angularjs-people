angular.module('peopleApp', ['utilityApp'])

//parse from people api
.service('peopleService', ['$http', function($http){
	
	var apiUrl = 'api/people.api.php';

	//parse people list from api
	this.getPeopleList = function(){
		return $http.get(apiUrl + '?scope=list');
	};

	//get api to add new people
	this.addNewPeople = function(people){
		//this will do for now
		console.log(people);
	};

	//get api to delete existing people by id
	this.deletePeople = function(id){
		//again, mocking it
		console.log(id);
	}
	
}])

//people-add custom element
.directive('peopleAdd', function(peopleService){
	return {
		restrict: 'E',
		templateUrl: 'template/people-add.html',
		controller: function(){
			this.people = {};
			this.addPeople = function(list){
				
				//push people to the list
				//use unshift to push at the beginning of array
				list.unshift(this.people);

				//actually add new people here
				peopleService.addNewPeople(this.people);

				//clear the form after submission
				this.people = {};
			};
		},
		controllerAs: 'peopleAddCtrl'
	};
})

//people-list custom element
.directive('peopleList', function(peopleService){
	return {
		restrict: 'E',
		templateUrl: 'template/people-list.html',
		controller: function(){
			//get people list from service
			var peopleList = this;
			peopleService.getPeopleList().success(function(data){
				peopleList.list = data;
			});
		},
		controllerAs: 'peopleListCtrl'
	};
});