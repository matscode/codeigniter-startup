// Initialize controller
angular
.module('cis.main.controller', ['ngResource'])

// Home page Angular Test section Controller
.controller('HomeTestController', ['$scope',
	function ($scope) {
		$scope.developer = {
			name: 'Michael Akanji',
			age: 25,
			location: 'Nigeria'
		}
	}]);