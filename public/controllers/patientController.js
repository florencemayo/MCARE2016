var patientController = angular.module("patientController",[])
    .controller('patientController', ['$scope','$http', 'API_URL', function ($scope, $http, API_URL) {
        
        console.log("Patient Search Controller");
        $scope.patients= [];

        $scope.findPatient = function(searchItem){
        	console.log("Search Item: "+searchItem);
        	$http.get(API_URL + "patients/" + searchItem).success(function(data){
        		$scope.patients = data;
        		console.log(data.nextOfKin);
        	});
        };
}]);
