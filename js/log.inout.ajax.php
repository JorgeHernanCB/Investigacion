<?php
	session_start();// inicio las variables de sesión
	require_once("../Connections/ConnectionBD.php");
	
	// verifico que se este mandando el nombre de usuario y el password
	if ( isset($_POST['login_username']) && isset($_POST['login_userpass']) ){
		// Me conecto a la base de datos
		$ConnectionBD = new ConnectionBD();	

		$sql = 'SELECT id,Fotografia,usuario,password,docente.cedulaDocente,nombre,apellido,fechaNacimiento,lugarNacimiento,genero,EstadoCivil,numeroHijos,facultad,programa,direccion,municipio,telefonoFijo,telefonoCelular,correo,investigador,tipoInvestigador,grupoInvestigacion,lineaInvestigacion,tarjetaProfesional 
				FROM loguin  
				INNER JOIN docente ON loguin.cedulaDocente=docente.cedulaDocente 
				WHERE usuario = :login_username AND password= :login_userpass LIMIT 1';
		$consultaPreparada = $ConnectionBD->query_prepare($sql);
		$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
		$consultaPreparada->bindParam(":login_userpass",$_POST['login_userpass']);
		$consultaPreparada->execute();
		$resultado = $consultaPreparada->fetchAll();
		$userLogin = false;

			
		// Verifico que solo haya encontrado 1 usuario
		if ( sizeof($resultado) == 1 ){
			// declaro que el usuario existe para loggearse.
			$userLogin = true;
			// Extraigo los datos del usuario
			$user = $resultado[0];
			// Almaceno los datos del usuario en variables de session.
			$_SESSION['username']	= $user['usuario'];
			$_SESSION['userid']	= $user['id'];
			$_SESSION['docenteNombre'] = $user['nombre'];
			$_SESSION['docenteApellido'] = $user['apellido'];
			$_SESSION['cedulaDocente'] = $user['cedulaDocente'];
			if($user['Fotografia'] != "")
				$_SESSION['fotografia'] = $user['Fotografia'];
			else
				$_SESSION['fotografia'] = "../adjuntos/imagenes/user.png";
									
			//-----------------Datos del docente------------------------
			$_SESSION['fechaNacimiento'] = $user['fechaNacimiento'];
			$_SESSION['lugarNacimiento'] = $user['lugarNacimiento'];
			$_SESSION['genero'] = $user['genero'];
			$_SESSION['EstadoCivil'] = $user['EstadoCivil'];
			$_SESSION['numeroHijos'] = $user['numeroHijos'];
			$_SESSION['facultad'] = $user['facultad'];
			$_SESSION['programa'] = $user['programa'];
			$_SESSION['direccion'] = $user['direccion'];
			$_SESSION['municipio'] = $user['municipio'];
			$_SESSION['telefonoFijo'] = $user['telefonoFijo'];
			$_SESSION['telefonoCelular'] = $user['telefonoCelular'];
			$_SESSION['correo'] = $user['correo'];
			$_SESSION['investigador'] = $user['investigador'];
			$_SESSION['tipoInvestigador'] = $user['tipoInvestigador'];
			$_SESSION['grupoInvestigacion'] = $user['grupoInvestigacion'];
			$_SESSION['lineaInvestigacion'] = $user['lineaInvestigacion'];
			$_SESSION['tarjetaProfesional'] = $user['tarjetaProfesional'];

		}//cierre primera consulta

		// Si el usuario se ha loggeado con éxito entonces se ejecutan el resto de consultas,
		// De lo contrario envía un 0.
		if($userLogin){
			//Consulta de los datos insticucionales del docente que inicio sesión
			$sql = 'SELECT nombreInstitucion,datosinstitucionales.direccion,datosinstitucionales.barrio,datosinstitucionales.municipio,datosinstitucionales.telefono,datosinstitucionales.correo,datosinstitucionales.categoria,datosinstitucionales.fechaCategorizacion,datosinstitucionales.vinculacion,datosinstitucionales.dedicacion,datosinstitucionales.actividades,datosinstitucionales.servicio 
					FROM datosinstitucionales 
					INNER JOIN docente 
					INNER JOIN loguin ON datosinstitucionales.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];

				//-----------------------------Datos institucionales---------------------
				$_SESSION['nombreInstitucion'] = $user['nombreInstitucion'];
				$_SESSION['direccionInstitucion'] = $user['direccion'];
				$_SESSION['barrioInstitucion'] = $user['barrio'];
				$_SESSION['municipioInstitucion'] = $user['municipio'];
				$_SESSION['telefonoInstitucion'] = $user['telefono'];
				$_SESSION['correoInstitucion'] = $user['correo'];
				$_SESSION['categoriaInstitucion'] = $user['categoria'];
				$_SESSION['fechaCategorizacionInstitucion'] = $user['fechaCategorizacion'];
				$_SESSION['vinculacionInstitucion'] = $user['vinculacion'];
				$_SESSION['dedicacionInstitucion'] = $user['dedicacion'];
				$_SESSION['actividadesInstitucion'] = $user['actividades'];
				$_SESSION['servicioInstitucion'] = $user['servicio'];

			}//Cierre segunda consulta

			$sql = 'SELECT titulo.tipo,titulo.titulo,titulo.institucion,titulo.fechaPregrado,titulo.trabajo,titulo.diploma 
					FROM titulo 
					INNER JOIN docente 
					INNER JOIN loguin 
					ON titulo.codigoDocente=docente.cedulaDocente 
					AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario = :login_username';

			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();
						
			if ( sizeof($resultado) > 0 ){
				
				$user = $resultado[0];

				//-----------------------------Datos titulos---------------------
				$_SESSION['tipo'] = $user['tipo'];
				$_SESSION['institucion'] = $user['institucion'];
				$_SESSION['fechaPregrado'] = $user['fechaPregrado'];
				$_SESSION['trabajo'] = $user['trabajo'];
				$_SESSION['diploma'] = $user['diploma'];
				$_SESSION['titulo'] = $user['titulo'];

			}//Cierre tercera consulta

			$sql = 'SELECT otrosestudios.tipoCurso, otrosestudios.evidenciaCurso, otrosestudios.nombre, otrosestudios.institucion, otrosestudios.lugar, otrosestudios.ano, otrosestudios.semestre, otrosestudios.tipoParticipacion 
					FROM otrosestudios 
					INNER JOIN docente 
					INNER JOIN loguin ON otrosestudios.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
			
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
			
			//-----------------------------Datos Otros estudios---------------------
				$_SESSION['tipoCursoOE'] = $user['tipoCurso'];
				$_SESSION['evidenciaCursoOE'] = $user['evidenciaCurso'];
				$_SESSION['nombreOE'] = $user['nombre'];
				$_SESSION['institucionOE'] = $user['institucion'];
				$_SESSION['lugarOE'] = $user['lugar'];
				$_SESSION['añoOE'] = $user['ano'];
				$_SESSION['semestreOE'] = $user['semestre'];
				$_SESSION['tipoPArticipacionOE'] = $user['tipoParticipacion'];
				
			}//Cierre cuarta consulta				

			$sql = 'SELECT experienciaacademica.institucionAcademica,experienciaacademica.cargo,experienciaacademica.pais,experienciaacademica.ciudad,experienciaacademica.fechaInicio,experienciaacademica.fechaFin,experienciaacademica.area 
					FROM experienciaacademica 
					INNER JOIN docente 
					INNER JOIN loguin ON experienciaacademica.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
					
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
			
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
					
				//-----------------------------Datos Experiencia Academica---------------------
					$_SESSION['institucionAcademicaEA'] = $user['institucionAcademica'];
					$_SESSION['cargoEA'] = $user['cargo'];
					$_SESSION['paisEA'] = $user['pais'];
					$_SESSION['ciudadEA'] = $user['ciudad'];
					$_SESSION['fechaInicioEA'] = $user['fechaInicio'];
					$_SESSION['fechaFinEA'] = $user['fechaFin'];
					$_SESSION['areaEA'] = $user['area'];
									
			}//Cierre quinta consulta						
														
			$sql = 'SELECT experiencialaboral.institucion,experiencialaboral.tipoLabor, experiencialaboral.pais, experiencialaboral.ciudad, experiencialaboral.ciudad, experiencialaboral.fechaInicio, experiencialaboral.fechaFin,experiencialaboral.evidencia 
					FROM experiencialaboral 
					INNER JOIN docente 
					INNER JOIN loguin ON experiencialaboral.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
			
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
				
			//-----------------------------Datos Experiencia Laboral---------------------
				$_SESSION['institucionEL'] = $user['institucion'];
				$_SESSION['tipoLaborEL'] = $user['tipoLabor'];
				$_SESSION['paisEL'] = $user['pais'];
				$_SESSION['ciudadEL'] = $user['ciudad'];
				$_SESSION['fechaInicioEL'] = $user['fechaInicio'];
				$_SESSION['fechaFinEL'] = $user['fechaFin'];
				$_SESSION['evidenciaEL'] = $user['evidencia'];
						
			}//cierre sexta consulta

			$sql = 'SELECT actividadacademica.consejo,actividadacademica.comite, actividadacademica.coordinacion,actividadacademica.funciones,actividadacademica.otrasDependencias,actividadacademica.laboratorios 
					FROM actividadacademica 
					INNER JOIN docente 
					INNER JOIN loguin ON actividadacademica.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
			
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
					
				//-----------------------------Datos Actividades Academicas---------------------
				$_SESSION['consejoAC'] = $user['consejo'];
				$_SESSION['comiteAC'] = $user['comite'];
				$_SESSION['coordinacionAC'] = $user['coordinacion'];
				$_SESSION['funcionesAC'] = $user['funciones'];
				$_SESSION['otrasDependenciasAC'] = $user['otrasDependencias'];
				$_SESSION['laboratoriosAC'] = $user['laboratorios'];
																			
			}//Cierre septima consulta

			$sql = 'SELECT proyectoinvestigacion.titulo,proyectoinvestigacion.fechaInicio,proyectoinvestigacion.duracion,proyectoinvestigacion.estado,proyectoinvestigacion.resumen 
					FROM proyectoinvestigacion 
					WHERE proyectoinvestigacion.codigoProyectoInvestigacion = 
						(SELECT proyectoinvestigaciondocente.codigoProyectoInvestigacion 
						FROM proyectoinvestigaciondocente 
						INNER JOIN docente 
						INNER JOIN loguin ON proyectoinvestigaciondocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
						WHERE loguin.usuario= :login_username )';
					
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
				//-----------------------------Datos Proyectos de investigación---------------------
				$_SESSION['tituloPI'] = $user['titulo'];
				$_SESSION['fechaInicioPI'] = $user['fechaInicio'];
				$_SESSION['duracionPI'] = $user['duracion'];
				$_SESSION['estadoPI'] = $user['estado'];
				$_SESSION['resumenPI'] = $user['resumen'];
						
			}//Cierre octaba consulta

			$sql = 'SELECT trabajosdirigidos.tituloTrabajo,trabajosdirigidos.nivelFormacion,trabajosdirigidos.modalidad,trabajosdirigidos.area,trabajosdirigidos.ano,trabajosdirigidos.actaEvaluacion 
					FROM trabajosdirigidos 
					INNER JOIN docente 
					INNER JOIN loguin ON trabajosdirigidos.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
					WHERE loguin.usuario= :login_username';
					
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
				//-----------------------------Datos Trabajos dirijidos---------------------
				$_SESSION['tituloTrabajoTD'] = $user['tituloTrabajo'];
				$_SESSION['nivelFormacionTD'] = $user['nivelFormacion'];
				$_SESSION['modalidadTD'] = $user['modalidad'];
				$_SESSION['areaTD'] = $user['area'];
				$_SESSION['anoTD'] = $user['ano'];
				$_SESSION['actaEvaluacionTD'] = $user['actaEvaluacion'];
									
			}//Cierre novena consulta	

			$sql = 'SELECT publicacion.tipoPublicacion,publicacion.evidenciaPublicacion,publicacion.titulo,publicacion.pais,publicacion.ciudad,publicacion.revista,publicacion.issn,publicacion.isbn,publicacion.editorial,publicacion.volumen,publicacion.fasiculo,publicacion.paginas,publicacion.totalPaginas,publicacion.ano,publicacion.semestre,publicacion.patentes,publicacion.evidenciaPatente,publicacion.creacionSoftware,publicacion.evidenciaSoftware 
					FROM publicacion 
					WHERE publicacion.idPublicacion = 
							(SELECT publicaciondocente.idPublicacion 
								FROM publicaciondocente 
								INNER JOIN docente 
								INNER JOIN loguin ON publicaciondocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
								WHERE loguin.usuario= :login_username';
					
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){
			
				$user = $resultado[0];
				//-----------------------------Datos Publicaciones---------------------
				$_SESSION['tipoPublicacionP'] = $user['tipoPublicacion'];
				$_SESSION['tituloP'] = $user['titulo'];
				$_SESSION['paisP'] = $user['pais'];
				$_SESSION['ciudadP'] = $user['ciudad'];
				$_SESSION['revistaP'] = $user['revista'];
				$_SESSION['issnP'] = $user['issn'];
				$_SESSION['isbnP'] = $user['isbn'];
				$_SESSION['editorialP'] = $user['editorial'];
				$_SESSION['volumenP'] = $user['volumen'];
				$_SESSION['fasiculoP'] = $user['fasiculo'];
				$_SESSION['paginasP'] = $user['paginas'];
				$_SESSION['totalPaginas'] = $user['totalPaginas'];
				$_SESSION['anoP'] = $user['ano'];
				$_SESSION['semestreP'] = $user['semestre'];
				$_SESSION['patentesP'] = $user['patentes'];
				$_SESSION['evidenciaPatenteP'] = $user['evidenciaPatente'];
				$_SESSION['creacionSoftwareP'] = $user['creacionSoftware'];
				$_SESSION['evidenciaSoftwareP'] = $user['evidenciaSoftware'];
										
			}//Cierre decima consulta

			$sql = 'SELECT eventocientifico.nombre,eventocientifico.pais,eventocientifico.ciudad,eventocientifico.ano,eventocientifico.semestre,eventocientifico.tipoParticipacion,eventocientifico.evidenciaEvento 
					FROM eventocientifico 
					WHERE eventocientifico.codigoEventoCientifico = 
							(SELECT eventocientificodocente.codigoEventoCientifico 
								FROM eventocientificodocente 
								INNER JOIN docente 
								INNER JOIN loguin ON eventocientificodocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
								WHERE loguin.usuario= :login_username';
					
			$consultaPreparada = $ConnectionBD->query_prepare($sql);
			$consultaPreparada->bindParam(":login_username",$_POST['login_username']);
			$consultaPreparada->execute();
			$resultado = $consultaPreparada->fetchAll();	
					
			if ( sizeof($resultado) > 0 ){

				$user = $resultado[0];
				//-----------------------------Datos Evento cientifico---------------------
				$_SESSION['nombreEC'] = $user['nombre'];
				$_SESSION['paisEC'] = $user['pais'];
				$_SESSION['ciudadEC'] = $user['ciudad'];
				$_SESSION['anoEC'] = $user['ano'];
				$_SESSION['semestreEC'] = $user['semestre'];
				$_SESSION['tipoParticipacionEC'] = $user['tipoParticipacion'];
				$_SESSION['evidenciaEventoEC'] = $user['evidenciaEvento'];
																																				
				
			}//Cierre  consulta 11
			echo 1;
		}
		else{
			echo 0;
		}
	}
	else{
		echo 0;
	}
	
?>