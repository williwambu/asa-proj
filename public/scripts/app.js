/**
 * Created by william muli on 5/26/2015.
 */

var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
        .when(
        '/', {
            templateUrl: 'templates/home.html',
            controller: 'homeCtrl'

        })
        .when(
        '/alumni', {
            templateUrl: 'templates/alumni-profiles.html',
            controller: 'alumniProfilesCtrl'

        })
        .when(
        '/gallery', {
            templateUrl: 'templates/gallery.html',
            controller: 'galleryCtrl'
        })
        .when(
        '/executive', {
            templateUrl: 'templates/executive.html',
            controller: 'teamExeCtrl'
        })
        .when(
        '/directors', {
            templateUrl: 'templates/directors.html',
            controller: 'teamDirCtrl'
        })
        .when(
        '/contact', {
            templateUrl: 'templates/contact.html',
            controller: 'contactCtrl'
        })
        .when(
        '/events/:id', {
            templateUrl: 'templates/event.html',
            controller: 'eventCtrl'

        })
        .when(
        '/login', {
            templateUrl: 'templates/login.html',
            controller: 'loginCtrl'

        })
        .when(
            '/about',{
                templateUrl:'templates/about.html',
            controller:'homeCtrl'
            }
        )
        .otherwise(
        {
            redirectTo: '/'

        }
    );
}]);


API_URL = 'http://localhost/fisa-api/public';

app.controller('eventCtrl', ['$scope', '$http', '$routeParams','$sce', function ($scope, $http, $routeParams,$sce) {
    var url = API_URL + '/events/' + $routeParams.id;
    $http.get(url).success(function (data, status) {
        console.log(data);
        $scope.event = data;
        $scope.event.description = $sce.trustAsHtml($scope.event.description);
    });

    $scope.open = function(){
        $('#modal1').openModal();
    };

    $scope.close = function(){
        $('#modal1').closeModal();
    };

    $scope.addSubscriber = function(id){
        var data  = $scope.subscriber;
        data.id  = id;

        var url = API_URL + '/events/subscribers/new';

        $http.post(url,data).
            success(function(data){
                var html = '<div>' + data.message +'.'+
                    '<br></div>';
                $('#result').html(html);
            })
            .error(function(data){
                console.log(data);
            });
    }
}]);



app.controller('portalCtrl',['$scope',function($scope){
    $scope.open = function(){
        $('#upload-modal').openModal()
    }
}]);

app.controller('homeCtrl', ['$scope', '$http', function ($scope, $http) {
    /*events_url = API_URL + '/events/all';
    $http.get(events_url).success(function (data, status) {
        $scope.events = data;
    });*/
    $scope.open = function(){
        $('#login-modal').openModal();
    };

    $scope.close = function(){
        $('#login-modal').closeModal();
    };

    $scope.more = function (id) {
        var url = API_URL + '/events/' + id;
        $http.get(url).success(function (data) {
            console.log(data);
        })
    }
}]);

app.controller('alumniProfilesCtrl', function ($scope) {
    $scope.testing = 'alumni/profiles'
});
app.controller('galleryCtrl', function ($scope) {
    $scope.testing = 'gallery';
});

app.controller('teamExeCtrl', function ($scope) {
    $scope.testing = 'teamExec';
});
app.controller('teamDirCtrl', function ($scope) {
    $scope.testing = 'teamDir';
});
app.controller('contactCtrl', function ($scope,$http) {
    $scope.contactReq = function(){
        $scope.visitor.name = $scope.visitor.first +' ' + $scope.visitor.last;
        $http.post('contact.php',JSON.stringify($scope.visitor)).success(function(data){
            $scope.visitor = {};
            var html = '<div class="center animated bounceInDown" style="color: green !important;">' + data.text + '</div>'
            $('#results').html(html);
        })
        .error(function(error){
            console.log(error);
        });
    }
});


app.directive('slideit', function () {
    return {
        link: function (scope, element, attrs) {
            $(element).unoSlider();
        }
    }
});

app.directive('carousel', function () {
    return {
        link: function (scope, element, attrs) {
            $(element).slider(
                {
                    full_width: true,
                    height: 500,
                    transition: 1200,
                    interval: 1600
                });

        }
    }
});

app.directive('boxed', function () {
    return {
        link: function (scope, element, attrs) {
            $(element).materialbox();
        }
    }
});

app.directive('bxslider',function(){
    return {
        link: function(scope,element,attrs){
            $(element).bxSlider({
                auto:true,
                pause:1500,
                mode: 'horizontal',
                useCSS: true,
                infiniteLoop: false,
                hideControlOnEnd: true ,
                easing: 'ease-in-out',
                speed: 1000,
                caption:true
            });
        }
    }
});