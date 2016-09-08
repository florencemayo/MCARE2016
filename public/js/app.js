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
            templateUrl: 'views/registerUser.html',
            controller: 'registerUserController'
        }).when("/patient",{
            templateUrl: 'views/patient.html',
            controller: 'mainController'
        });

        $routeProvider.otherwise({
            redirectTo: '/upload'
        });



    })
    .constant('API_URL', 'http://localhost:8080/');
