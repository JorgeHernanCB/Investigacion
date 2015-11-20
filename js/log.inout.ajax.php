<?php
	session_start();
	//print($_SESSION['username']);
	//print($_SESSION['userid']);
	
	if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
		
		if ( @$idcnx = @mysql_connect('localhost','root','') ){
			
			if ( @mysql_select_db('investigacion',$idcnx) ){
				
				$sql = 'SELECT id,usuario,password,docente.cedulaDocente,nombre,apellido,fechaNacimiento,lugarNacimiento,genero,EstadoCivil,numeroHijos,facultad,programa,direccion,municipio,telefonoFijo,telefonoCelular,correo,investigador,tipoInvestigador,grupoInvestigacion,lineaInvestigacion,tarjetaProfesional FROM loguin  INNER JOIN docente ON loguin.cedulaDocente=docente.cedulaDocente WHERE usuario="' . $_POST['login_username']. '" && password="' . ($_POST['login_userpass']) . '" LIMIT 1';

				if ( @$res = @mysql_query($sql)){
					
					if ( @mysql_num_rows($res) == 1 ){
						
						$user = @mysql_fetch_array($res);
						
						$_SESSION['username']	= $user['usuario'];
						$_SESSION['userid']	= $user['id'];
						$_SESSION['docenteNombre'] = $user['nombre'];
						$_SESSION['docenteApellido'] = $user['apellido'];

						//-------------Datos del docente------------------------
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

						$sql2 = 'SELECT nombreInstitucion,datosinstitucionales.direccion,datosinstitucionales.barrio,datosinstitucionales.municipio,datosinstitucionales.telefono,datosinstitucionales.correo,datosinstitucionales.categoria,datosinstitucionales.fechaCategorizacion,datosinstitucionales.vinculacion,datosinstitucionales.dedicacion,datosinstitucionales.actividades,datosinstitucionales.servicio  FROM datosinstitucionales INNER JOIN docente INNER JOIN loguin ON datosinstitucionales.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' . $_POST['login_username']. '"';
						
						@$res2 = @mysql_query($sql2);
						
						if ( @mysql_num_rows($res2) > 0 ){
							
						$user2 = @mysql_fetch_array($res2);

						//-----------------------------Datos institucionales---------------------
						$_SESSION['nombreInstitucion'] = $user2['nombreInstitucion'];
						$_SESSION['direccionInstitucion'] = $user2['direccion'];
						$_SESSION['barrioInstitucion'] = $user2['barrio'];
						$_SESSION['municipioInstitucion'] = $user2['municipio'];
						$_SESSION['telefonoInstitucion'] = $user2['telefono'];
						$_SESSION['correoInstitucion'] = $user2['correo'];
						$_SESSION['categoriaInstitucion'] = $user2['categoria'];
						$_SESSION['fechaCategorizacionInstitucion'] = $user2['fechaCategorizacion'];
						$_SESSION['vinculacionInstitucion'] = $user2['vinculacion'];
						$_SESSION['dedicacionInstitucion'] = $user2['dedicacion'];
						$_SESSION['actividadesInstitucion'] = $user2['actividades'];
						$_SESSION['servicioInstitucion'] = $user2['servicio'];

						}//Cierre segunda consulta

						$sql3 = 'SELECT titulo.tipo,titulo.titulo,titulo.institucion,titulo.fechaPregrado,titulo.trabajo,titulo.diploma FROM titulo INNER JOIN docente INNER JOIN loguin ON titulo.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' . $_POST['login_username']. '"';
						
						@$res3 = @mysql_query($sql3);
						
						if ( @mysql_num_rows($res3) > 0 ){
							
						$user3 = @mysql_fetch_array($res3);

						//-----------------------------Datos titulos---------------------
							$_SESSION['tipo'] = $user3['tipo'];
							$_SESSION['institucion'] = $user3['institucion'];
							$_SESSION['fechaPregrado'] = $user3['fechaPregrado'];
							$_SESSION['trabajo'] = $user3['trabajo'];
							$_SESSION['diploma'] = $user3['diploma'];
							$_SESSION['titulo'] = $user3['titulo'];

						}//Cierre tercera consulta

						$sql4 = 'SELECT otrosestudios.tipoCurso, otrosestudios.evidenciaCurso, otrosestudios.nombre, otrosestudios.institucion, otrosestudios.lugar, otrosestudios.ano, otrosestudios.semestre, otrosestudios.tipoParticipacion FROM otrosestudios INNER JOIN docente INNER JOIN loguin ON otrosestudios.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '"';
						
						@$res4 = @mysql_query($sql4);
						
						if ( @mysql_num_rows($res4) > 0 ){
						
						$user4 = @mysql_fetch_array($res4);
						
						//-----------------------------Datos Otros estudios---------------------
							$_SESSION['tipoCursoOE'] = $user4['tipoCurso'];
							$_SESSION['evidenciaCursoOE'] = $user4['evidenciaCurso'];
							$_SESSION['nombreOE'] = $user4['nombre'];
							$_SESSION['institucionOE'] = $user4['institucion'];
							$_SESSION['lugarOE'] = $user4['lugar'];
							$_SESSION['añoOE'] = $user4['ano'];
							$_SESSION['semestreOE'] = $user4['semestre'];
							$_SESSION['tipoPArticipacionOE'] = $user4['tipoParticipacion'];
							
						}//Cierre cuarta consulta				

						$sql5 = 'SELECT experienciaacademica.institucionAcademica,experienciaacademica.cargo,experienciaacademica.pais,experienciaacademica.ciudad,experienciaacademica.fechaInicio,experienciaacademica.fechaFin,experienciaacademica.area FROM experienciaacademica INNER JOIN docente INNER JOIN loguin ON experienciaacademica.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '"';
						
						@$res5 = @mysql_query($sql5);
						
						if ( @mysql_num_rows($res5) > 0 ){
						
						$user5 = @mysql_fetch_array($res5);
						
						//-----------------------------Datos Experiencia Academica---------------------
							$_SESSION['institucionAcademicaEA'] = $user5['institucionAcademica'];
							$_SESSION['cargoEA'] = $user5['cargo'];
							$_SESSION['paisEA'] = $user5['pais'];
							$_SESSION['ciudadEA'] = $user5['ciudad'];
							$_SESSION['fechaInicioEA'] = $user5['fechaInicio'];
							$_SESSION['fechaFinEA'] = $user5['fechaFin'];
							$_SESSION['areaEA'] = $user5['area'];
										
						}//Cierre quinta consulta						
															
						$sql6 = 'SELECT experiencialaboral.institucion,experiencialaboral.tipoLabor, experiencialaboral.pais, experiencialaboral.ciudad, experiencialaboral.ciudad, experiencialaboral.fechaInicio, experiencialaboral.fechaFin,experiencialaboral.evidencia FROM experiencialaboral INNER JOIN docente INNER JOIN loguin ON experiencialaboral.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '"';
						
						@$res6 = @mysql_query($sql6);
						
						if ( @mysql_num_rows($res6) > 0 ){
						
						$user6 = @mysql_fetch_array($res6);
						//echo $user4;
						//-----------------------------Datos Experiencia Laboral---------------------
							$_SESSION['institucionEL'] = $user6['institucion'];
							$_SESSION['tipoLaborEL'] = $user6['tipoLabor'];
							$_SESSION['paisEL'] = $user6['pais'];
							$_SESSION['ciudadEL'] = $user6['ciudad'];
							$_SESSION['fechaInicioEL'] = $user6['fechaInicio'];
							$_SESSION['fechaFinEL'] = $user6['fechaFin'];
							$_SESSION['evidenciaEL'] = $user6['evidencia'];
									
						}//cierre sexta consulta

						$sql7 = 'SELECT actividadacademica.consejo,actividadacademica.comite, actividadacademica.coordinacion,actividadacademica.funciones,actividadacademica.otrasDependencias,actividadacademica.laboratorios FROM actividadacademica INNER JOIN docente INNER JOIN loguin ON actividadacademica.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '"';
						
						@$res7 = @mysql_query($sql7);
						
						if ( @mysql_num_rows($res7) > 0 ){
						
						$user7 = @mysql_fetch_array($res7);
						//echo $user4;
						//-----------------------------Datos Actividades Academicas---------------------
							$_SESSION['consejoAC'] = $user7['consejo'];
							$_SESSION['comiteAC'] = $user7['comite'];
							$_SESSION['coordinacionAC'] = $user7['coordinacion'];
							$_SESSION['funcionesAC'] = $user7['funciones'];
							$_SESSION['otrasDependenciasAC'] = $user7['otrasDependencias'];
							$_SESSION['laboratoriosAC'] = $user7['laboratorios'];
																				
						}//Cierre septima consulta

						$sql8 = 'SELECT proyectoinvestigacion.titulo,proyectoinvestigacion.fechaInicio,proyectoinvestigacion.duracion,proyectoinvestigacion.estado,proyectoinvestigacion.resumen FROM proyectoinvestigacion WHERE proyectoinvestigacion.codigoProyectoInvestigacion = (SELECT proyectoinvestigaciondocente.codigoProyectoInvestigacion FROM proyectoinvestigaciondocente INNER JOIN docente INNER JOIN loguin ON proyectoinvestigaciondocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '")';
						
						@$res8 = @mysql_query($sql8);
						
						if ( @mysql_num_rows($res8) > 0 ){
						
						$user8 = @mysql_fetch_array($res8);
						//echo $user4;
						//-----------------------------Datos Proyectos de investigación---------------------
							$_SESSION['tituloPI'] = $user8['titulo'];
							$_SESSION['fechaInicioPI'] = $user8['fechaInicio'];
							$_SESSION['duracionPI'] = $user8['duracion'];
							$_SESSION['estadoPI'] = $user8['estado'];
							$_SESSION['resumenPI'] = $user8['resumen'];
							
						}//Cierre octaba consulta

						$sql9 = 'SELECT trabajosdirigidos.tituloTrabajo,trabajosdirigidos.nivelFormacion,trabajosdirigidos.modalidad,trabajosdirigidos.area,trabajosdirigidos.ano,trabajosdirigidos.actaEvaluacion FROM trabajosdirigidos INNER JOIN docente INNER JOIN loguin ON trabajosdirigidos.docente_cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '"';
						
						@$res9 = @mysql_query($sql9);
						
						if ( @mysql_num_rows($res9) > 0 ){
						
						$user9 = @mysql_fetch_array($res9);
						//echo $user4;
						//-----------------------------Datos Trabajos dirijidos---------------------
							$_SESSION['tituloTrabajoTD'] = $user9['tituloTrabajo'];
							$_SESSION['nivelFormacionTD'] = $user9['nivelFormacion'];
							$_SESSION['modalidadTD'] = $user9['modalidad'];
							$_SESSION['areaTD'] = $user9['area'];
							$_SESSION['anoTD'] = $user9['ano'];
							$_SESSION['actaEvaluacionTD'] = $user9['actaEvaluacion'];
										
						}//Cierre novena consulta	

						$sql10 = 'SELECT publicacion.tipoPublicacion,publicacion.evidenciaPublicacion,publicacion.titulo,publicacion.pais,publicacion.ciudad,publicacion.revista,publicacion.issn,publicacion.isbn,publicacion.editorial,publicacion.volumen,publicacion.fasiculo,publicacion.paginas,publicacion.totalPaginas,publicacion.ano,publicacion.semestre,publicacion.patentes,publicacion.evidenciaPatente,publicacion.creacionSoftware,publicacion.evidenciaSoftware FROM publicacion WHERE publicacion.idPublicacion = (SELECT publicaciondocente.idPublicacion FROM publicaciondocente INNER JOIN docente INNER JOIN loguin ON publicaciondocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '")';
						
						@$res10 = @mysql_query($sql10);
						
						if ( @mysql_num_rows($res10) > 0 ){
						
						$user10 = @mysql_fetch_array($res10);
						//echo $user4;
						//-----------------------------Datos Publicaciones---------------------
							$_SESSION['tipoPublicacionP'] = $user10['tipoPublicacion'];
							$_SESSION['tituloP'] = $user10['titulo'];
							$_SESSION['paisP'] = $user10['pais'];
							$_SESSION['ciudadP'] = $user10['ciudad'];
							$_SESSION['revistaP'] = $user10['revista'];
							$_SESSION['issnP'] = $user10['issn'];
							$_SESSION['isbnP'] = $user10['isbn'];
							$_SESSION['editorialP'] = $user10['editorial'];
							$_SESSION['volumenP'] = $user10['volumen'];
							$_SESSION['fasiculoP'] = $user10['fasiculo'];
							$_SESSION['paginasP'] = $user10['paginas'];
							$_SESSION['totalPaginas'] = $user10['totalPaginas'];
							$_SESSION['anoP'] = $user10['ano'];
							$_SESSION['semestreP'] = $user10['semestre'];
							$_SESSION['patentesP'] = $user10['patentes'];
							$_SESSION['evidenciaPatenteP'] = $user10['evidenciaPatente'];
							$_SESSION['creacionSoftwareP'] = $user10['creacionSoftware'];
							$_SESSION['evidenciaSoftwareP'] = $user10['evidenciaSoftware'];
											
						}//Cierre decima consulta

						$sql11 = 'SELECT eventocientifico.nombre,eventocientifico.pais,eventocientifico.ciudad,eventocientifico.ano,eventocientifico.semestre,eventocientifico.tipoParticipacion,eventocientifico.evidenciaEvento FROM eventocientifico WHERE eventocientifico.codigoEventoCientifico = (SELECT eventocientificodocente.codigoEventoCientifico FROM eventocientificodocente INNER JOIN docente INNER JOIN loguin ON eventocientificodocente.cedulaDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente WHERE loguin.usuario="' .$_POST['login_username']. '")';
						
						@$res11 = @mysql_query($sql11);
						
						if ( @mysql_num_rows($res11) > 0 ){
						
						$user11 = @mysql_fetch_array($res11);
						//echo $user4;
						//-----------------------------Datos Evento cientifico---------------------
							$_SESSION['nombreEC'] = $user11['nombre'];
							$_SESSION['paisEC'] = $user11['pais'];
							$_SESSION['ciudadEC'] = $user11['ciudad'];
							$_SESSION['anoEC'] = $user11['ano'];
							$_SESSION['semestreEC'] = $user11['semestre'];
							$_SESSION['tipoParticipacionEC'] = $user11['tipoParticipacion'];
							$_SESSION['evidenciaEventoEC'] = $user11['evidenciaEvento'];
																																					
						echo 1;
						}//Cierre once consulta
				
				}else
					echo 0;
									
			}
			
			mysql_close($idcnx);
		}else
			echo 0;
	}else
		echo 0;
	
?>