'use strict';

angular.module("myApp", []).controller('testController', ['$scope', '$http', function($scope, $http){

	$scope.instance = {};
	
	$scope.generater = function(){
		$http({
			method: "GET",
			url: "generater.php",
			params : {action: "list"},
		}).then(function successCallback(response) {
			$scope.instance = response.data;
		}, function errorCallback(error) {preload(false);
			console.log("generater ERROR!!!");
			console.log(error);
		});
	};

	$scope.upload = function(){
		$http({
			method: "GET",
			url: "data/upload.php",
			params : {action: "list"},
		}).then(function successCallback(response) {
			$scope.instance = response.data;
		}, function errorCallback(error) {preload(false);
			console.log("upload ERROR!!!");
			console.log(error);
		});
	};
}]);
