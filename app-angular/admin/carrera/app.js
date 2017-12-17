'use strict';
const app = angular.module("app_web", []);

app.controller("crearCarrera", ($scope, $http) => {

	$scope.crearCarrera = function() {
		var nameCarrera = $scope.nameCarrera;
		var imgCarrera = $scope.imgCarrera;
		var cronoPdf = $scope.cronoPdf;
		var mallaPdf = $scope.mallaPdf;
		var description = $scope.description;

		$http.post("http://localhost:3000/api/carrera-crear", 
		{
			nameCarrera : nameCarrera,
			imgCarrera : imgCarrera,
			cronoPdf	: cronoPdf,
			mallaPdf	: mallaPdf
			description : description

		}).then(
			response => {
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		);
	}
})

app.controller("carreras", ($scope, $http) => {
	
	$scope.listarCarrera = function() {
		$http.get("http://localhost:3000/api/carreras").then(
			response => {
				$scope.carreras = response.data.carreras;
			},
				error => {
					console.error("error", error);
				}
			)
	}
})