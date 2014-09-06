//people-list custom element
app.directive('peopleList', function(peopleService){
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