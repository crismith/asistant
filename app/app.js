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
			mallaPdf	: mallaPdf,
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

	$http.get("http://localhost:3000/api/carreras").then(
		response => {
			$scope.carreras = response.data.carreras;
		},
		error => {
			console.error("error", error);
		}
	)


	$scope.deleteCarrera = function(carreraId) {
		console.log(carreraId);
		$http.delete("http://localhost:3000/api/carrera-eliminar/" + carreraId).then(
			response => {
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		)
	}

	
})


app.controller("creaCurso", ($scope, $http) => {
	$scope.creaCurso = function() {
		var nameCurso	= $scope.nameCurso;
		var especialidadCurso	= $scope.especialidadCurso;
		var cicloCurso	= $scope.cicloCurso;
		var imgCurso	= $scope.imgCurso;
		var inicioC =	$scope.inicioC;
		var finalC =	$scope.finalC;
		var descriptionCurso	= $scope.descriptionCurso;
 		
		$http.post("http://localhost:3000/api/curso-crear", 
		{
			nameCurso : nameCurso,
			especialidadCurso : especialidadCurso,
			cicloCurso	: cicloCurso,
			imgCurso	: imgCurso,
			inicioC	: inicioC,
			finalC	: finalC,
			descriptionCurso : descriptionCurso

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

app.controller("cursos", ($scope, $http) => {

	$http.get("http://localhost:3000/api/cursos").then(
		response => {
			$scope.cursos = response.data.cursos;
		},
		error => {
			console.error("error", error);
		}
	)

	$scope.deleteCurso = function(cursoId) {
		console.log(cursoId);
		$http.delete("http://localhost:3000/api/curso-eliminar/" + cursoId).then(
			response => {
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		)
	}
})


app.controller("creaDocente", ($scope, $http) => {

	$scope.creaDocente = function() {
		var name = $scope.name;
		var apellido = $scope.apellido;
		var usuario = $scope.usuario;
		var password = $scope.password;
		var correo = $scope.correo;
		var nacimientoDocente = $scope.nacimientoDocente;
		var dni = $scope.dni;
		var genero = $scope.genero;
		var carrera = $scope.carrera;
		var distrito = $scope.distrito;
		var direccion = $scope.direccion;
		var celular = $scope.celular;
		var avatarDocente = $scope.avatarDocente;

		$http.post("http://localhost:3000/api/docente-crear", 
		{
			name : name,
			apellido : apellido,
			usuario	: usuario,
			password	: password,
			correo : correo,
			nacimientoDocente : nacimientoDocente,
			dni : dni,
			genero : genero,
			carrera : carrera,
			distrito : distrito,
			direccion : direccion,
			celular : celular,
			avatarDocente : avatarDocente,

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

app.controller("docentes", ($scope, $http) => {

	$http.get("http://localhost:3000/api/docentes").then(
		response => {
			$scope.docentes = response.data.docentes;
			
		},
		error => {
			console.error("error", error);
		}
	)

	$scope.deleteDocente = function(docenteId) {
		console.log(docenteId);
		$http.delete("http://localhost:3000/api/docente-eliminar/" + docenteId).then(
			response => {
				
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		)
	}

	$scope.updateDocente = function(docenteId) {
		alert("response" + docenteId);
		$http.put("http://localhost:3000/api/docente-actualizar/" + docenteId).then(
			response => {
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		)
	}
})


app.controller("creaClase", ($scope, $http) => {

	$scope.creaClase = function() {
		var name = $scope.name;
		var description = $scope.description;
		var modulo = $scope.modulo;
		var imagen = $scope.imagen;
		var video = $scope.video;
		var diapositiva = $scope.diapositiva;
		var fecha = $scope.fecha;

		$http.post("http://localhost:3000/api/clase-crear", 
		{
			name : name,
			description : description,
			modulo	: modulo,
			imagen	: imagen,
			video : video,
			diapositiva : diapositiva,
			fecha : fecha,
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

app.controller("clases", ($scope, $http) => {

	$http.get("http://localhost:3000/api/clases").then(
		response => {
			$scope.clases = response.data.clases;
		},
		error => {
			console.error("error", error);
		}
	)

	$scope.deleteClase = function(clasesId) {
		console.log(clasesId);
		$http.delete("http://localhost:3000/api/clase-eliminar/" + clasesId).then(
			response => {
				console.log("response", response)
			},
			error => {
				console.error("error", error);
			}
		)
	}
})


