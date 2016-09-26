var registerPatientController = angular.module("registerPatientController",[])
    .controller('registerPatientController', ['$scope','$http','API_URL', function ($scope, API_URL) {
        console.log("Patient Registration!!!!");

        $scope.firstname;
        $scope.middlename;
        $scope.lastname;
        $scope.neuter;
        $scope.dob;
        $scope.mobile;
        $scope.nKin;
        $scope.street;
        $scope.district;
        $scope.region;
        $scope.country;
        $scope.email;
        $scope.password;

        $scope.register = function(patient){
          var url = API_URL+"patients"; 

          $http.post(url, {
            first_name:$scope.firstname,
            middle_name:$scope.middlename,
            last_name:$scope.lastname,
            gender:$scope.neuter,
            date_of_birth:$scope.dob,
            mobile_number:$scope.mobile,
            nextOfKin:$scope.nKin,
            street:$scope.street,
            district:$scope.district,
            region:$scope.region,
            country:$scope.country,
            email:$scope.email,
            passwd:$scope.password,

          }).success(function (data, status, headers, config){
            if (!data.error) {
              console.log(data);
            }
            else console.log(data);
          });

        }

    }]

  );
