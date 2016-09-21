var patientController = angular.module("patientController",[])
    .controller('patientController', ['$scope','$http', 'API_URL', function ($scope, $http, API_URL) {
        console.log("Patient Search Controller");
        
        $scope.showAlert =  false;
        $scope.findPatient = function(searchItem){
        	
            console.log("Search Item: " + searchItem);
        	$scope.showAlert = true;
            $scope.allPatients = []; 
            $scope.patients=[];
            $scope.user = {};
            $http.get(API_URL+"patients").success(function (data){
            $scope.allPatients = data;
            console.log("Length "+$scope.allPatients.length);
            for (var i=0; i<$scope.allPatients.length; i++){
                console.log("id "+$scope.allPatients[i].id);
                if ($scope.allPatients[i].nextOfKin === searchItem){
                    $user_id = $scope.allPatients[i].user_id;
                     $http.get(API_URL + "users/" + $user_id).success(function(data){
                        $scope.user = data;
                        console.log("User data: "+$scope.user);
                        console.log("Patient first name"+$scope.user.first_name); 
                    });
                   $scope.patients.push($scope.allPatients[i]);
                }
            }
        });
    };
}]);
