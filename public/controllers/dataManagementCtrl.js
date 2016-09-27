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

        $scope.existIdentityCode = function(identificationCode){
            $scope.patients = [];
            console.log("identificationCode "+identificationCode);
            for (var i=0; i < $allPatients.length; i++){
                if ($allPatients[i].identification_code == identificationCode)
                    $scope.patients.push($allPatients[i]);
            }
	        $scope.showAlert = true; 
        }

         $scope.existMobileNumber = function(mobileNumber){
            $scope.patients = [];
            console.log("Number "+mobileNumber);
            for (var i=0; i<$allPatients.length; i++){
                if ($allPatients[i].mobile_number == mobileNumber)
                    $scope.patients.push($allPatients[i]);
            }
            $scope.showAlert = true; 
        }
        
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

        $scope.mergePatients =  function(){

        };

        /*var getPatientWithID = function(id){
            $http.get(API_URL+ "patients/"+id).success(function (data){
                   patient = data;
                   console.log(data); 
                   console.log("Name "+data.first_name);
            });
            return patient;
        }*/

        $scope.checkSimilarAttributes = function(firstID, secondID){
           $http.get(API_URL+ "patients/"+firstID).success(function (firstData){
                firstPatient = firstData;
                $http.get(API_URL+ "patients/"+secondID).success(function (secondData){
                    secondPatient = secondData;
                    if (firstPatient.identification_code == secondPatient.identification_code &&
                        firstPatient.first_name == secondPatient.first_name &&
                        firstPatient.last_name == secondPatient.last_name &&
                        firstPatient.mobile_number == secondPatient.mobile_number &&
                        firstPatient.birthdate == secondPatient.birthdate){
                        console.log("MERGE PATIENTS");
                        $scope.textMerge = "MERGE PATIENTS";
                        //save new patient
                        $http.post(API_URL+ "patients", {
                            first_name : firstPatient.first_name,
                            last_name : firstPatient.last_name,
                            gender : firstPatient.gender,
                            birthdate : firstPatient.birthdate,
                            mobile_number : firstPatient.mobile_number,
                            nextOfKin : firstPatient.nextOfKin,
                            street_name : firstPatient.street_name,
                            district_name : firstPatient.district_name,
                            region_name : firstPatient.region_name,
                            country_name : firstPatient.country_name
                        })
                        .success(function(data){
                            console.log("Patient added successful");
                        });
                        
                        //delete first patient
                        $http.post(API_URL+"patients/delete/"+firstID)
                            .success(function (data){
                                console.log(data);
                                //location.reload();
                            })
                            .error(function (data){
                                console.log(data);
                                alert('Unable to delete first patient');
                        });

                        //delete second patient
                        $http.post(API_URL+"patients/delete/"+secondID)
                            .success(function (data){
                                console.log(data);
                                //location.reload();
                            })
                            .error(function (data){
                                console.log(data);
                                alert('Unable to delete second patient');
                        });
                    }else{
                        console.log("CONSIDER CHANGING THE IDENTIICATION CODE");
                        $scope.textMerge = "";
                    }
                });
            });
        }

        $scope.delete = function(firstID){
            console.log(firstID);
            $http.post(API_URL+"patients/delete/" + firstID)
                .success(function (data){
                    console.log("Patient Deleted");
                    location.reload();
                    console.log("Page refreshed");
                })
                .error(function (data){
                    console.log(data);
                    alert('Unable to delete second patient');
            });
        }
}]);
