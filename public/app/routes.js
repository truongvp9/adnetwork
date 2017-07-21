var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'AdminController'
            }).
            when('/ads', {
                templateUrl: 'templates/ads.html',
                controller: 'AdController'
            }).
            when('/banners', {
                templateUrl: 'templates/banners.html',
                controller: 'BannerController'
            }).
            when('/items', {
                templateUrl: 'templates/items.html',
                controller: 'ItemController'
            }).                    
            when('/websites', {
                templateUrl: 'templates/websites.html',
                controller: 'WebsiteController'
            }).                   
            when('/clients', {
                templateUrl: 'templates/clients.html',
                controller: 'ClientController'
            });
}]);