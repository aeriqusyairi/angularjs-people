//people-add custom element
app.directive('peopleAdd', function(peopleService){
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
});