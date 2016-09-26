var dataManagementCtrl = angular.module("dataManagementCtrl",[])
    .controller('dataManagementCtrl', ['$scope', '$http', 'API_URL', function ($scope, $http, API_URL) {
        console.log("Data Management Controller");
		
		$scope.showAlert =  false;

        var $allPatients = []; 
        var getAllPatients = function(){
            $http.get(API_URL+ "patients").success(function (data){
                    $allPatients = data;
            });
        };
        getAllPatients();
        $scope.searchedValue = " ";

        var capitalizeFirstLetter = function(value){
            if(angular.isNumber(value) == false){
                value =value.toLowerCase();
                value = value.substring(0,1).toUpperCase()+value.substring(1);
            }
            return value;
        }

        $scope.existIdentityCode = function(identificationCode){
            $scope.patients = [];
            console.log("identificationCode "+identificationCode);
            if(angular.isNumber(identificationCode){
	            console.log("identificationCode "+identificationCode);
	            for (var i=0; i<$scope.allPatients.length; i++){
	                    if ($scope.allPatients[i].identification_code == identificationCode){
	                        $scope.patients.push($scope.allPatients[i]);
	                     }
	             }
	        }else{
	            $scope.patients=[]; console.log("value isUndefined");
	        }
            $scope.showAlert = true;
        }

         $scope.existMobileNumber = function(mobileNumber){
            $scope.patients = [];
            console.log("Number "+mobileNumber);
            if (checkValue(mobileNumber) == false) {
            mobileNumber = capitalizeFirstLetter(mobileNumber);
            for (var i=0; i<$scope.allPatients.length; i++){
                    if ($scope.allPatients[i].mobile_number == mobileNumber){
                        $scope.patients.push($scope.allPatients[i]);
                     }
                }
            }else{
                $scope.patients=[];
            }
        }
        
        var checkValue = function(val){
            return angular.isUndefined(val) || val===null;
        };
       

       $scope.enableFields = function(patientAttributes){
            if (patientAttributes == 'identificationCode') {
                $scope.showIdentificationField = true;
                $scope.showMobileNumberField = false; 
           }else if (patientAttributes == 'mobileNumber'){
                $scope.showMobileNumberField = true;
                $scope.showIdentificationField = false;
           }else{
            $scope.showIdentificationField = false;
            $scope.showMobileNumberField = false;
           }
        }        
}]);
