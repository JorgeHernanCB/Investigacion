<!DOCTYPE html PUBLIC>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Inicio</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/cssprincipal.css"> 
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/functions.ajax.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <a href="" class="navbar-brand">INVESTIGACIÓN</a>
		</div><!--End navbar header-->
		<div class="collapse navbar-collapse" id="navbar-collapse">
    <?php
    session_start();
    if ( isset($_SESSION['username']) && 
      isset($_SESSION['userid']) &&
       $_SESSION['username'] != '' 
       && $_SESSION['userid'] != '0' ){
          echo'

              <ul class="nav navbar-nav">  
                <li> 
                  <a href="/PaginaInvestigacion/vista/consulta.php">Realizar consulta</a>
                </li>
              </ul>    

              <div class="session_on navbar-right"> 
                  <span class="glyphicon glyphicon-user"></span>
                  <span class="label"> Bienvenido  '.$_SESSION['username'] .' </span>
                  <button name="submit" href="javascript:void(0);" id="sessionKiller" class="btn btn-primary btn-lg">
                    Logout
                  </button> 

              </div>';
    }else{
      echo'
        <ul class="nav navbar-nav">
          
          <li> <a href="/PaginaInvestigacion/vista/registro.php">Registrarse</a></li>
          
        </ul> 

        <form class="navbar-form navbar-right" method="post">
            <div class="form-group">
              <input type="text" placeholder="Usuario" class="form-control" name="login_username" id="login_username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="login_userpass" id="login_userpass">
            </div>
            <button type="submit" id="login_userbttn" class="btn btn-success">Entrar</button>
        </form>

        ' ;
      }

    ?> 
            
    </div>
	</div><!--End container-->
</nav><!--End nav-->
      </br>
      </br>
     <div class="progress">
      <div class="progress-bar progress-bar-success" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <div class="progress-bar progress-bar-info" style="width: 30%">
        <span class="sr-only">80% Complete (success)</span>
      </div>
      <div class="progress-bar progress-bar-success" style="width: 35%">
        <span class="sr-only">80% Complete (success)</span>
      </div>
      
      </div>
  
<!--Inicio-->

<div class="container">

   <?php
            
      if ( isset($_SESSION['docenteNombre']) && 
        isset($_SESSION['docenteApellido']) &&
         $_SESSION['docenteNombre'] != '' 
         && $_SESSION['docenteApellido'] != '0' ){

        echo'

          <div class="col-sm-6 col-md-4 text-center">
            <div class="well well-lg">
                <section>
                  
                            <img class="img-circle"src="adjuntos/imagenes/bat.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h3>'.$_SESSION['docenteApellido'].'</h3>
                            <h3>'.$_SESSION['docenteNombre'].'</h3>
                            <h3><small>Docente</small></h3>
                            <span class="glyphicon glyphicon-phone"></span> </br>
                            <h5><strong>Telefono Celular:</strong>'.$_SESSION['telefonoCelular'].'</h5>
                            <h5><strong>Telefono Fijo:</strong>'.$_SESSION['telefonoFijo'].'</h5>
                            </br>
                            <span class="glyphicon glyphicon-envelope"></span>
                           <h5><strong>Correo:</strong>'.$_SESSION['correo'].'</h5>
                  
                </section>
            </div> 
            <button name="submit" href="" id="" class="btn btn-success" data-toggle="modal" data-target="#myModal"> 
              <span class="glyphicon glyphicon-cog"></span>
              Actualizar Información 
            </button>
           
          <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">actualizando Información</h4>
                    </div>
                    <div class="modal-body">

                            Hola!!!

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
            <!-- Fin Modal -->

            </div>

           <div class="col-sm-6 col-md-8 text-center">
             <div class="thumbnail">
                  <div class="caption ">
                      <h3>Información personal</h3>

                      <table class="table table-hover">

                          <tr>
                            <td><strong>Fecha de nacimiento:</strong> </td>
                            <td><h5>'.$_SESSION['fechaNacimiento'].'</h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Lugar de nacimiento:</strong></td>
                            <td>'.$_SESSION['lugarNacimiento'].' </h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Genero:</strong></td>
                            <td> </strong>'.$_SESSION['genero'].' </h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Estado Civil:</strong></td>
                            <td>'.$_SESSION['EstadoCivil'].' </h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Numero de hijos: </strong></td>
                            <td>'.$_SESSION['numeroHijos'].' </h5> </td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Facultad:</strong> </td>
                            <td>'.$_SESSION['facultad'].' </h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                           <td><strong>Programa: </strong> </td>
                           <td>'.$_SESSION['programa'].' </h5></td>
                           <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Direccion:  </strong> </td>
                            <td>'.$_SESSION['direccion'].' Municipio '.$_SESSION['municipio'].'</h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Tipo de investigador:  </strong></td>
                            <td>'.$_SESSION['tipoInvestigador'].' </h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                            <td><strong>Grupo de investigacion: </strong></td>
                            <td>'.$_SESSION['grupoInvestigacion'].'</h5></td>
                            <td><button type="button" class="btn btn-link">Editar</button></td>
                          </tr>
                          <tr>
                           <td><strong>Linea de investigacion: </strong> </td>
                           <td> '.$_SESSION['lineaInvestigacion'].'</h5></td>
                           <td><button type="button" class="btn btn-link">Editar</button></td>
                         </tr>
                         <tr>
                          <td><strong>Tarjeta profecional:  </strong></td>
                          <td>'.$_SESSION['tarjetaProfesional'].' </h5></td>
                          <td><button type="button" class="btn btn-link">Editar</button></td>
                        </tr>

                      </table>
                  </div>
              </div>
            </div>
           

            <ul class="nav nav-pills nav-justified" role="tablist">
              <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab">Información Institucional</a></li>
              <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab">Información Academica</a></li>
              <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab">Otros estudios</a></li>
              <li role="presentation"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab">Experiencia Académica</a></li>
              <li role="presentation"><a href="#seccion5" aria-controls="seccion5" data-toggle="tab">Experiencia Laboral</a></li>
              <li role="presentation"><a href="#seccion6" aria-controls="seccion6" data-toggle="tab">Actividades Academicas</a></li>
              <li role="presentation"><a href="#seccion7" aria-controls="seccion7" data-toggle="tab">Proyectos de investigación</a></li>
              <li role="presentation"><a href="#seccion8" aria-controls="seccion8" data-toggle="tab">Trabajos Dirijidos</a></li>
              <li role="presentation"><a href="#seccion9" aria-controls="seccion9" data-toggle="tab">Publicaciones realizadas</a></li>
              <li role="presentation"><a href="#seccion10" aria-controls="seccion10" data-toggle="tab">Eventos Cientificos</a></li>
            </ul>


            <div class="tab-content">

              <div role="tabpanel" class="tab-pane in active" id="seccion1">
                  <h3>Información Institucional</h3>   

                  <table class="table table-hover thumbnail">
                      <tr>
                       <td><strong>Nombre de la institución:</strong> </td><td><h5>'.$_SESSION['nombreInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Dirección:</strong> </td><td><h5>'.$_SESSION['direccionInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Barrio:</strong> </td><td><h5>'.$_SESSION['barrioInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Municipio:</strong> </td><td><h5>'.$_SESSION['municipioInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Telefono:</strong> </td><td><h5>'.$_SESSION['telefonoInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Correo:</strong> </td><td><h5>'.$_SESSION['correoInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Categoria:</strong> </td><td><h5>'.$_SESSION['categoriaInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Categorizacion:</strong> </td><td><h5>'.$_SESSION['fechaCategorizacionInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Vinculación:</strong> </td><td><h5>'.$_SESSION['vinculacionInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Dedicación:</strong> </td><td><h5>'.$_SESSION['dedicacionInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Actividades:</strong> </td><td><h5>'.$_SESSION['actividadesInstitucion'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Servicio:</strong> </td><td><h5>'.$_SESSION['servicioInstitucion'].'</h5></td>
                      </tr>
                     
                  </table>  

                  <button name="submit" href="" id="" class="btn btn-info"> Actualizar Información </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion2">
                <h3>Información Academica</h3>   

                <table class="table table-hover thumbnail">
                    <tr>
                     <td><strong>Tipo:</strong> </td><td><h5>'.$_SESSION['tipo'].'</h5></td>
                    </tr>
                    <tr>
                     <td><strong>Título:</strong> </td><td><h5>'.$_SESSION['titulo'].'</h5></td>
                    </tr>
                    <tr>
                     <td><strong>Institución:</strong> </td><td><h5>'.$_SESSION['institucion'].'</h5></td>
                    </tr>
                    <tr>
                     <td><strong>Fecha de pregrado:</strong> </td><td><h5>'.$_SESSION['fechaPregrado'].'</h5></td>
                    </tr>
                    <tr>
                     <td><strong>Trabajo:</strong> </td><td><h5>'.$_SESSION['trabajo'].'</h5></td>
                    </tr>
                    <tr>
                     <td><strong>Diploma:</strong> </td><td><h5>'.$_SESSION['diploma'].'</h5></td>
                    </tr>
                </table> 

                <button name="submit" href="" id="" class="btn btn-info"> Actualizar Información </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion3">
                <h3>Otros estudios</h3>   

                  <table class="table table-hover thumbnail">
                      <tr>
                       <td><strong>Tipo de curso/Diplomado:</strong> </td><td><h5>'.$_SESSION['tipoCursoOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Evidencia del curso/Diplomado:</strong> </td><td><h5>'.$_SESSION['evidenciaCursoOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Nombre del curso/Diplomado:</strong> </td><td><h5>'.$_SESSION['nombreOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Instotución:</strong> </td><td><h5>'.$_SESSION['institucionOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Lugar:</strong> </td><td><h5>'.$_SESSION['lugarOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Año:</strong> </td><td><h5>'.$_SESSION['añoOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Semestre:</strong> </td><td><h5>'.$_SESSION['semestreOE'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Tipo de participación:</strong> </td><td><h5>'.$_SESSION['tipoPArticipacionOE'].'</h5></td>
                      </tr>               
                  </table>  

                  <button name="submit" href="" id="" class="btn btn-info"  data-toggle="modal" data-target="#agregarCurso"> Agregar mas estudios </button>

                  <!-- Modal -->
                      <div id="agregarCurso" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><Strong>Agregar estudio</strong></h4>
                              </div>
                              <div class="modal-body">

                                      <table class="table table-hover thumbnail">
                                        <tr>
                                         <td>Tipo de curso/Diplomado: </td><td> 
                                          <input type="text" class="form-control" id="" placeholder="ingrese el tipo" required>
                                        </td>
                                        </tr>
                                        <tr>
                                         <td>Evidencia del curso/Diplomado: </td><td><input type="text" class="form-control" id="" placeholder="ingrese la evidencia" required></td>
                                        </tr>
                                        <tr>
                                         <td>Nombre del curso/Diplomado: </td><td><input type="text" class="form-control" id="" placeholder="ingrese el nombre" required></td>
                                        </tr>
                                        <tr>
                                         <td>Institución: </td><td><input type="text" class="form-control" id="" placeholder="ingrese la institucion" required></td>
                                        </tr>
                                        <tr>
                                         <td>Lugar: </td><td><input type="text" class="form-control" id="" placeholder="ingrese el lugar" required></td>
                                        </tr>
                                        <tr>
                                         <td>Año:</td><td><input type="text" class="form-control" id="" placeholder="ingrese el año" required></td>
                                        </tr>
                                        <tr>
                                         <td>Semestre:</td><td><input type="text" class="form-control" id="" placeholder="ingrese el semestre" required></td>
                                        </tr>
                                        <tr>
                                         <td>Tipo de participación: </td><td><input type="text" class="form-control" id="" placeholder="ingrese el tipo" required></td>
                                        </tr>               
                                    </table>  

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Agregar</button>
                              </div>
                            </div>

                          </div>
                        </div>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion4">
                <h3>Experiencia Académica</h3>   

                  <table class="table table-hover thumbnail">
                      <tr>
                       <td><strong>Institución Académica:</strong> </td><td><h5>'.$_SESSION['institucionAcademicaEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Cargo:</strong> </td><td><h5>'.$_SESSION['cargoEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>País:</strong> </td><td><h5>'.$_SESSION['paisEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Ciudad:</strong> </td><td><h5>'.$_SESSION['ciudadEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Inicio:</strong> </td><td><h5>'.$_SESSION['fechaInicioEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Fin:</strong> </td><td><h5>'.$_SESSION['fechaFinEA'].'</h5></td>
                      </tr>
                      <tr>
                       <td><strong>área:</strong> </td><td><h5>'.$_SESSION['areaEA'].'</h5></td>
                      </tr>
                  </table> 

                  <button name="submit" href="" id="" class="btn btn-info" data-toggle="modal" data-target="#agregarExpAcademica"> Agregar experiencia </button>

                  <!-- Modal -->
                      <div id="agregarExpAcademica" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><strong>Agregar Experiencia academica</strong></h4>
                              </div>
                              <div class="modal-body">

                                      <table class="table table-hover thumbnail">
                                          <tr>
                                           <td>Institución Académica:</td><td><input type="text" class="form-control" id="" placeholder="ingrese el nombre" required></td>
                                          </tr>
                                          <tr>
                                           <td>Cargo:</td><td><input type="text" class="form-control" id="" placeholder="ingrese el cargo" required></td>
                                          </tr>
                                          <tr>
                                           <td>País: </td><td><input type="text" class="form-control" id="" placeholder="ingrese el pais" required></td>
                                          </tr>
                                          <tr>
                                           <td>Ciudad: </td><td><input type="text" class="form-control" id="" placeholder="ingrese la ciudad" required></td>
                                          </tr>
                                          <tr>
                                           <td>Fecha de Inicio: </td><td><input type="text" class="form-control" id="" placeholder="ingrese la fecha de inicio" required></td>
                                          </tr>
                                          <tr>
                                           <td>Fecha de Fin:</td><td><input type="text" class="form-control" id="" placeholder="ingrese la fecha de fin" required></td>
                                          </tr>
                                          <tr>
                                           <td>área: </td><td><input type="text" class="form-control" id="" placeholder="ingrese el Área" required></td>
                                          </tr>
                                      </table> 

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Agregar</button>
                              </div>
                            </div>

                          </div>
                        </div>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion5">
                      <h3>Experiencia Laboral</h3>   

                      <table class="table table-hover thumbnail">
                          <tr>
                           <td><strong>Institución:</strong> </td><td><h5>'.$_SESSION['institucionEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Tipo de labor:</strong> </td><td><h5>'.$_SESSION['tipoLaborEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>País:</strong> </td><td><h5>'.$_SESSION['paisEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Ciudad:</strong> </td><td><h5>'.$_SESSION['ciudadEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Fecha de Inicio:</strong> </td><td><h5>'.$_SESSION['fechaInicioEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Fecha de Fin:</strong> </td><td><h5>'.$_SESSION['fechaFinEL'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Evidencia:</strong> </td><td><h5>'.$_SESSION['evidenciaEL'].'</h5></td>
                          </tr>
                      </table>      

                      <button name="submit" href="" id="" class="btn btn-info"> Agregar experiencia </button>

                </div>  
             

              <div role="tabpanel" class="tab-pane" id="seccion6">

                      <h3>Actividades Academicas</h3>   

                      <table class="table table-hover thumbnail">
                          <tr>
                           <td><strong>Consejo:</strong> </td><td><h5>'.$_SESSION['consejoAC'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Comité:</strong> </td><td><h5>'.$_SESSION['comiteAC'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Coordinación:</strong> </td><td><h5>'.$_SESSION['coordinacionAC'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Funciones:</strong> </td><td><h5>'.$_SESSION['funcionesAC'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Otras dependencias:</strong> </td><td><h5>'.$_SESSION['otrasDependenciasAC'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Laboratorio:</strong> </td><td><h5>'.$_SESSION['laboratoriosAC'].'</h5></td>
                          </tr>
                      </table>  

                      <button name="submit" href="" id="" class="btn btn-info"> Agregar actividad </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion7">

                      <h3>Proyectos de investigación</h3>   

                      <table class="table table-hover thumbnail">
                          <tr>
                           <td><strong>Título:</strong> </td><td><h5>'.$_SESSION['tituloPI'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Fecha de inicio:</strong> </td><td><h5>'.$_SESSION['fechaInicioPI'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Duración:</strong> </td><td><h5>'.$_SESSION['duracionPI'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Estado:</strong> </td><td><h5>'.$_SESSION['estadoPI'].'</h5></td>
                          </tr>
                          <tr>
                           <td><strong>Resumen:</strong> </td><td><h5>'.$_SESSION['resumenPI'].'</h5></td>
                          </tr>
                      </table>     

                      <button name="submit" href="" id="" class="btn btn-info"> Agregar Proyecto </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion8">

                       <h3>Trabajos Dirijidos</h3>   

                        <table class="table table-hover thumbnail">
                            <tr>
                             <td><strong>Título:</strong> </td><td><h5>'.$_SESSION['tituloTrabajoTD'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Nivel de formación:</strong> </td><td><h5>'.$_SESSION['nivelFormacionTD'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Modalidad:</strong> </td><td><h5>'.$_SESSION['modalidadTD'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Área:</strong> </td><td><h5>'.$_SESSION['areaTD'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>año:</strong> </td><td><h5>'.$_SESSION['anoTD'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Acta de evaluación:</strong> </td><td><h5>'.$_SESSION['actaEvaluacionTD'].'</h5></td>
                            </tr>
                        </table> 

                        <button name="submit" href="" id="" class="btn btn-info"> Agregar Trabajo </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion9">

                      <h3>Publicaciones</h3>   

                        <table class="table table-hover thumbnail">
                            <tr>
                             <td><strong>Tipo de la publicación:</strong> </td><td><h5>'.$_SESSION['tipoPublicacionP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>título:</strong> </td><td><h5>'.$_SESSION['tituloP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Pais:</strong> </td><td><h5>'.$_SESSION['paisP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Ciudad:</strong> </td><td><h5>'.$_SESSION['ciudadP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Revista:</strong> </td><td><h5>'.$_SESSION['revistaP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>ISSN:</strong> </td><td><h5>'.$_SESSION['issnP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>ISBN:</strong> </td><td><h5>'.$_SESSION['isbnP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Editorial:</strong> </td><td><h5>'.$_SESSION['editorialP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Volumen:</strong> </td><td><h5>'.$_SESSION['volumenP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Fasículo</strong> </td><td><h5>'.$_SESSION['fasiculoP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Páginas:</strong> </td><td><h5>'.$_SESSION['paginasP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Total de páginas:</strong> </td><td><h5>'.$_SESSION['totalPaginas'].'</h5></td>
                            </tr>
                             <tr>
                             <td><strong>Año:</strong> </td><td><h5>'.$_SESSION['anoP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Semestre:</strong> </td><td><h5>'.$_SESSION['semestreP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Patentes:</strong> </td><td><h5>'.$_SESSION['patentesP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Evidencia Patente:</strong> </td><td><h5>'.$_SESSION['evidenciaPatenteP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Creación de Software:</strong> </td><td><h5>'.$_SESSION['creacionSoftwareP'].'</h5></td>
                            </tr>
                            <tr>
                             <td><strong>Evidencia del Software:</strong> </td><td><h5>'.$_SESSION['evidenciaSoftwareP'].'</h5></td>
                            </tr>
                        </table>   

                        <button name="submit" href="" id="" class="btn btn-info"> Agregar publicación </button>

              </div>

              <div role="tabpanel" class="tab-pane" id="seccion10">
                      <h3>Eventos cientificos</h3>   

                    <table class="table table-hover thumbnail">
                        <tr>
                         <td><strong>Nombre:</strong> </td><td><h5>'.$_SESSION['tituloTrabajoTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Pais:</strong> </td><td><h5>'.$_SESSION['nivelFormacionTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Cuidad:</strong> </td><td><h5>'.$_SESSION['modalidadTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Año:</strong> </td><td><h5>'.$_SESSION['areaTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Semestre:</strong> </td><td><h5>'.$_SESSION['anoTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Tipo de participación:</strong> </td><td><h5>'.$_SESSION['actaEvaluacionTD'].'</h5></td>
                        </tr>
                        <tr>
                         <td><strong>Evidencia del evento:</strong> </td><td><h5>'.$_SESSION['actaEvaluacionTD'].'</h5></td>
                        </tr>
                    </table>  

                    <button name="submit" href="" id="" class="btn btn-info"> Agregar Evento</button>

              </div>


            ';
           }else{

          echo '
            <div class="text-center">
              <h2>Pagina en construcción</h2>
           </div>'; 
         }  
                ?>
          


          </div>
          <script src="https://code.jquery.com/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
        </br>
        </br>
        </br>

     <div class="navbar-inverse pull-center" role="navigation">

      <div class="container">
        <div class="navbar-text pull-left">
          <p>&copy; copyrigth @ 2015</p>
        </div>
        <div class="navbar-text pull-right">
          <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
        </div>
      </div>
    </div>

</body>


</html>



