angular.module("mcare",[
        'ngRoute',
        'ngSanitize',
        'mcareDirectives',
        'mcareControllers',
        'mcareServices',
        'mcareFilters',
        'mgcrea.ngStrap',
        'ngAnimate',
        'angular-spinkit',
        'multi-select-tree',
        'highcharts-ng',
        'angularUtils.directives.dirPagination',
        'ngCsv'
])
    .run( function($rootScope, $location) {
        // register listener to watch route changes
        $rootScope.$on( "$routeChangeStart", function(event, next, current) {
            console.log("route imebadilika")
        });
    })
    .config( function($routeProvider){
        $routeProvider.when("/register",{
            templateUrl: 'views/registerPatient.html',
            controller: 'registerPatientController'
        }).when("/home",{
            templateUrl: 'views/home.html',
            controller: 'patientController'
        }).when("/patient",{
            templateUrl: 'views/patient.html',
            controller: 'mainController'
        }).when("/findPatient",{
            templateUrl: 'views/findPatient.html',
            controller: 'patientController'
        }).when("/dataManagement",{
            templateUrl: 'views/dataManagement.html',
            controller: 'dataManagementCtrl'
        });

        $routeProvider.otherwise({
            redirectTo: '/home'
        });



    })
    .constant('API_URL', 'http://localhost:8080/');
    //.constant('API_URL', 'http://104.200.18.173/');
