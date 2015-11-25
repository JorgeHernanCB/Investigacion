 <?php

 ?>
       <div class="col-sm-6 col-md-4 text-center">
              <div class="well well-lg">
                  <section>
                    
                    <img class="img-circle" src="<?php echo $_SESSION['fotografia'] ?>" alt="Generic placeholder image" width="140" height="140">
                    
                    <h3><?php echo $_SESSION['docenteApellido'] ?></h3>
                    <h3><?php echo $_SESSION['docenteNombre']?></h3>
                    <h3><small>Docente</small></h3>
                    <span class="glyphicon glyphicon-phone"></span> </br>
                    <h5><strong>Telefono Celular:</strong><?php echo $_SESSION['telefonoCelular']?></h5>
                    <h5><strong>Telefono Fijo:</strong><?php echo $_SESSION['telefonoFijo']?></h5>
                    </br>
                    <span class="glyphicon glyphicon-envelope"></span>
                   <h5><strong>Correo:</strong><?php echo $_SESSION['correo']?></h5>
                    
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
              </div><!-- Fin Modal -->  
      </div>

           <div class="col-sm-6 col-md-8 text-center">
             <div class="thumbnail">
                  <div class="caption ">
                      <h3>Información personal</h3>

                      <table class="table table-hover">

                          <tr>
                            <td><strong>Fecha de nacimiento:</strong> </td>
                            <td><a href="#" id="fechaNacimiento" class=""><?php echo $_SESSION['fechaNacimiento']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Lugar de nacimiento:</strong></td>
                            <td><a href="#" id="lugarNacimiento" class=""><?php echo $_SESSION['lugarNacimiento']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Genero:</strong></td>
                            <td><a href="#" id="genero" class=""><?php echo $_SESSION['genero']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Estado Civil:</strong></td>
                            <td><a href="#" id="EstadoCivil" class=""><?php echo $_SESSION['EstadoCivil']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Número de hijos: </strong></td>
                            <td><a href="#" id="numeroHijos" class=""><?php echo $_SESSION['numeroHijos']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Facultad:</strong> </td>
                            <td><a href="#" id="facultad" class=""><?php echo $_SESSION['facultad']?></a></td>
                          </tr>
                          <tr>
                           <td><strong>Programa: </strong> </td>
                           <td><a href="#" id="programa" class=""><?php echo $_SESSION['programa']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Dirección:  </strong> </td>
                            <td><a href="#" id="direccion" class=""><?php echo $_SESSION['direccion']?> Municipio <?php echo $_SESSION['municipio']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Tipo de investigador:  </strong></td>
                            <td><a href="#" id="tipoInvestigador" class=""><?php echo $_SESSION['tipoInvestigador']?></a></td>
                          </tr>
                          <tr>
                            <td><strong>Grupo de investigación: </strong></td>
                            <td><a href="#" id="grupoInvestigacion" class=""><?php echo $_SESSION['grupoInvestigacion']?></a></td>
                          </tr>
                          <tr>
                           <td><strong>Linea de investigación: </strong> </td>
                           <td><a href="#" id="lineaInvestigacion" class=""><?php echo $_SESSION['lineaInvestigacion']?></a></td>
                         </tr>
                         <tr>
                          <td><strong>Tarjeta profesional:  </strong></td>
                          <td><a href="#" id="tarjetaProfesional" class=""><?php echo $_SESSION['tarjetaProfesional']?></a></td>
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

            <!-- Pestañas -->
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane in active" id="seccion1">
                  <h3>Información Institucional</h3>   
                  <?php if(isset($_SESSION['nombreInstitucion'] ) &&  isset($_SESSION['direccionInstitucion'])){?>
                  <table class="table table-hover thumbnail">
                      <tr>
                       <td><strong>Nombre de la institución:</strong> </td><td><?php echo $_SESSION['nombreInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Dirección:</strong> </td><td><?php echo $_SESSION['direccionInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Barrio:</strong> </td><td><?php echo $_SESSION['barrioInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Municipio:</strong> </td><td><?php echo $_SESSION['municipioInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Telefono:</strong> </td><td><?php echo $_SESSION['telefonoInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Correo:</strong> </td><td><?php echo $_SESSION['correoInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Categoria:</strong> </td><td><?php echo $_SESSION['categoriaInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Categorizacion:</strong> </td><td><?php echo $_SESSION['fechaCategorizacionInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Vinculación:</strong> </td><td><?php echo $_SESSION['vinculacionInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Dedicación:</strong> </td><td><?php echo $_SESSION['dedicacionInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Actividades:</strong> </td><td><?php echo $_SESSION['actividadesInstitucion']?></td>
                      </tr>
                      <tr>
                       <td><strong>Servicio:</strong> </td><td><?php echo $_SESSION['servicioInstitucion']?></td>
                      </tr>
                  </table>  

                  <?php
                  /*
                  intento de pasar una arreglo (resultado de una consulta)
                  por una variable de sesión
                  */
                  if( $_SESSION['row']){
                    $row = $_SESSION['row'];
                    echo "<table > \n";
                    //Mostramos los nombres de las tablas 
                    echo "<tr> \n"; 
                    
                    while ($row = mysql_fetch_array($row)){ 
                                 
                                echo "<tr> \n"; 
                                echo "<td>".$row["id"]."</td> \n"; 
                                echo "<td>".$row["usuario"]."</td> \n"; 
                                echo "<td>".$row["password"]."</td> \n"; 
                                echo "<td>".$row["cedulaDocente"]."</td> \n"; 
                                echo "</tr> \n"; 
                        } while ($row = mysql_fetch_array($row)); 
                                echo "</table> \n"; 
                   
                  } else { 
                    echo "¡ No se ha encontrado ningún registro !"; 
                    }
                  ?>

                  <?php }else{ echo "<h2> no hay información institucional registrada!!! </h2> </br> </br>"; } ?>
                  <button name="submit" href="" id="" class="btn btn-info"> Actualizar Información </button>

              </div>

              <!-- Pestaña de información academica -->
              <div role="tabpanel" class="tab-pane" id="seccion2">
                <h3>Información Academica</h3>   
                <?php if(isset($_SESSION['tipo'] ) &&  isset($_SESSION['titulo'])){?>
                <table class="table table-hover thumbnail">
                    <tr>
                     <td><strong>Tipo:</strong> </td><td><h5><?php echo $_SESSION['tipo']?></h5></td>
                    </tr>
                    <tr>
                     <td><strong>Título:</strong> </td><td><h5><?php echo $_SESSION['titulo']?></h5></td>
                    </tr>
                    <tr>
                     <td><strong>Institución:</strong> </td><td><h5><?php echo $_SESSION['institucion']?></h5></td>
                    </tr>
                    <tr>
                     <td><strong>Fecha de pregrado:</strong> </td><td><h5><?php echo $_SESSION['fechaPregrado']?></h5></td>
                    </tr>
                    <tr>
                     <td><strong>Trabajo:</strong> </td><td><h5><?php echo $_SESSION['trabajo']?></h5></td>
                    </tr>
                    <tr>
                     <td><strong>Diploma:</strong> </td><td><h5><?php echo $_SESSION['diploma']?></h5></td>
                    </tr>
                </table> 
                <?php }else{ echo "<h2> no hay información academica registrada!!! </h2> </br> </br>"; } ?>
                <button name="submit" href="" id="" class="btn btn-info"> Actualizar Información </button>

              </div><!-- FIN Pestaña de información academica -->

              <!-- Pestaña de otros estudios -->
              <div role="tabpanel" class="tab-pane" id="seccion3">

                <h3>Otros estudios</h3>
                
                  <?php 
                    if(isset($_SESSION['tipoCursoOE'], $_SESSION['evidenciaCursoOE']) ){
                      require_once("Connections/ConnectionBD.php");
                      $ConnectionBD = new ConnectionBD();
                      $sql = 'SELECT * 
                              FROM otrosestudios 
                              INNER JOIN docente 
                              INNER JOIN loguin ON otrosestudios.codigoDocente=docente.cedulaDocente AND loguin.cedulaDocente=docente.cedulaDocente 
                              WHERE loguin.usuario= :login_username';
                      $consultaPreparada = $ConnectionBD->query_prepare($sql);
                      $consultaPreparada->bindParam(":login_username",$_SESSION['username']);
                      $consultaPreparada->execute();
                      $resultado = $consultaPreparada->fetchAll(); 
                      foreach ($resultado as $fila => $value) {
                              ?>
                              <table class="table table-hover thumbnail">
                              <h3>Curso</h3>
                              <tr>
                                 <td><strong>Tipo de curso/Diplomado:</strong> </td>
                                 <td><h5><?php echo $value['tipoCurso']; ?></h5></td>
                              </tr>
                                <tr>
                                 <td><strong>Evidencia del curso/Diplomado:</strong></td>
                                 <td><img id="<?php echo $value['evidenciaCurso']; ?>" class="descargar_archivo" src="imagenes/pdf.png" alt="Descargar PDF"></td>
                              </tr>
                              <tr>
                                 <td><strong>Nombre del curso/Diplomado:</strong></td>
                                 <td><h5><?php echo $value['nombre']; ?></h5></td>
                              </tr>
                              <tr>
                                 <td><strong>Institución:</strong></td>
                                 <td><h5><?php echo $value['institucion']; ?></h5></td>
                              </tr>
                              <tr>
                                 <td><strong>Lugar:</strong></td>
                                 <td><h5><?php echo $value['lugar']; ?></h5></td>
                              </tr>
                              <tr>
                                 <td><strong>Año:</strong></td>
                                 <td><h5><?php echo $value['ano']; ?></h5></td>
                              </tr>
                              <tr>
                                 <td><strong>Semestre:</strong></td>
                                 <td><h5><?php echo $value['semestre']; ?></h5></td>
                              </tr>
                              <tr>
                                 <td><strong>Tipo de participación:</strong></td>
                                 <td><h5><?php echo $value['tipoParticipacion']; ?></h5></td>
                              </tr>
                              </table>
                                                            
                            <?php
                          
                        
                      }
                    }else{ echo "<h2> El usuario no tiene estudios registrados</h2> </br> </br>"; }
                  ?>
                
                  
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
                                <form name="form1" id="form-registrar-curso" role="form">
                                    <table class="table table-hover thumbnail">
                                        <tr>
                                         <td>Tipo de curso/Diplomado: </td><td> 
                                          <input type="text" name="tipoCurso" class="form-control" id="tipo-curso" placeholder="ingrese el tipo" required>
                                         </td>
                                        </tr>
                                        <tr>
                                         <td>Evidencia del curso/Diplomado: </td><td> <input type="file" name="evidenciaCurso" class="filestyle" data-input="false" name="evidencia-curso" id="evidencia-curso" value="" size="32" required></td>
                                        </tr>
                                        <tr>
                                         <td>Nombre del curso/Diplomado: </td><td><input type="text" name="nombreCurso" class="form-control" id="nombre-curso" placeholder="ingrese el nombre" required></td>
                                        </tr>
                                        <tr>
                                         <td>Institución: </td><td><input type="text" name="institucion" class="form-control" id="institucion" placeholder="ingrese la institucion" required></td>
                                        </tr>
                                        <tr>
                                         <td>Lugar: </td><td><input type="text" name="lugar" class="form-control" id="lugar" placeholder="ingrese el lugar" required></td>
                                        </tr>
                                        <tr>
                                         <td>Año:</td><td><input type="text" name="ano" class="form-control" id="ano" placeholder="ingrese el año" required></td>
                                        </tr>
                                        <tr>
                                         <td>Semestre:</td><td><input type="text" name="semestre" class="form-control" id="semestre" placeholder="ingrese el semestre" required></td>
                                        </tr>
                                        <tr>
                                         <td>Tipo de participación: </td><td><input type="text" name="tipoParticipación" class="form-control" id="tipo-participacion" placeholder="ingrese el tipo" required></td>
                                        </tr>               
                                    </table>  
                                
                                    </div><!-- Fin modal body -->
                                    <div class="modal-footer">
                                      <div id="btningresarcurso" class="btn btn-primary btn-block">Agregar</div>
                                    </div>
                                  </form>
                            </div><!-- Fin Modal content -->

                          </div><!-- Fin class="modal-content" -->
                      </div><!-- Fin modal -->
              </div><!-- FIN Pestaña de otros estudios -->

              <!-- Pestaña de experiencia academica -->
              <div role="tabpanel" class="tab-pane" id="seccion4">
                <h3>Experiencia Académica</h3>   
                <?php if(isset($_SESSION['institucionAcademicaEA'] ) &&  isset($_SESSION['cargoEA'])){?>
                  <table class="table table-hover thumbnail">
                      <tr>
                       <td><strong>Institución Académica:</strong> </td><td><h5><?php echo $_SESSION['institucionAcademicaEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>Cargo:</strong> </td><td><h5><?php echo $_SESSION['cargoEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>País:</strong> </td><td><h5><?php echo $_SESSION['paisEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>Ciudad:</strong> </td><td><h5><?php echo $_SESSION['ciudadEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Inicio:</strong> </td><td><h5><?php echo $_SESSION['fechaInicioEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>Fecha de Fin:</strong> </td><td><h5><?php echo $_SESSION['fechaFinEA']?></h5></td>
                      </tr>
                      <tr>
                       <td><strong>área:</strong> </td><td><h5><?php echo $_SESSION['areaEA']?></h5></td>
                      </tr>
                  </table> 
                  <?php }else{ echo "<h2> no hay experiencia registrados!!! </h2> </br> </br>"; } ?>
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

              </div><!-- FIN Pestaña de experiencia academica -->

              <!-- Pestaña de experiencia laboral -->
              <div role="tabpanel" class="tab-pane" id="seccion5">
                      <h3>Experiencia Laboral</h3>   
                      <?php if(isset($_SESSION['institucionEL'] ) &&  isset($_SESSION['tipoLaborEL'])){?>
                      <table class="table table-hover thumbnail">
                          <tr>
                           <td><strong>Institución:</strong> </td><td><h5><?php echo $_SESSION['institucionEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Tipo de labor:</strong> </td><td><h5><?php echo $_SESSION['tipoLaborEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>País:</strong> </td><td><h5><?php echo $_SESSION['paisEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Ciudad:</strong> </td><td><h5><?php echo $_SESSION['ciudadEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Fecha de Inicio:</strong> </td><td><h5><?php echo $_SESSION['fechaInicioEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Fecha de Fin:</strong> </td><td><h5><?php echo $_SESSION['fechaFinEL']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Evidencia:</strong> </td><td><h5><?php echo $_SESSION['evidenciaEL']?></h5></td>
                          </tr>
                      </table>      
                      <?php }else{ echo "<h2> no hay experiencia registrados!!! </h2> </br> </br>"; } ?>
                      <button name="submit" href="" id="" class="btn btn-info"> Agregar experiencia </button>

              </div> <!-- FIN Pestaña de experiencia laboral -->
             
              <!-- Pestaña de actividades academicas -->
              <div role="tabpanel" class="tab-pane" id="seccion6">

                      <h3>Actividades Academicas</h3>   
                      <?php if(isset($_SESSION['consejoAC'] ) &&  isset($_SESSION['comiteAC'])){?>
                      <table class="table table-hover thumbnail">
                          <tr>
                           <td><strong>Consejo:</strong> </td><td><h5><?php echo $_SESSION['consejoAC']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Comité:</strong> </td><td><h5><?php echo $_SESSION['comiteAC']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Coordinación:</strong> </td><td><h5><?php echo $_SESSION['coordinacionAC']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Funciones:</strong> </td><td><h5><?php echo $_SESSION['funcionesAC']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Otras dependencias:</strong> </td><td><h5><?php echo $_SESSION['otrasDependenciasAC']?></h5></td>
                          </tr>
                          <tr>
                           <td><strong>Laboratorio:</strong> </td><td><h5><?php echo $_SESSION['laboratoriosAC']?></h5></td>
                          </tr>
                      </table>  
                      <?php }else{ echo "<h2> no hay Actividades academicas registradas!!! </h2> </br> </br>"; } ?>
                      <button name="submit" href="" id="" class="btn btn-info"> Agregar actividad </button>

              </div><!-- FIN Pestaña de actividades academicas -->

              <!-- Pestaña de proyectos de investigación -->
              <div role="tabpanel" class="tab-pane" id="seccion7">

                    <h3>Proyectos de investigación</h3>   
                    <?php if(isset($_SESSION['tituloPI'] ) &&  isset($_SESSION['fechaInicioPI'])){?>
                    <table class="table table-hover thumbnail">
                        <tr>
                         <td><strong>Título:</strong> </td><td><h5><?php echo $_SESSION['tituloPI']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Fecha de inicio:</strong> </td><td><h5><?php echo $_SESSION['fechaInicioPI']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Duración:</strong> </td><td><h5><?php echo $_SESSION['duracionPI']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Estado:</strong> </td><td><h5><?php echo $_SESSION['estadoPI']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Resumen:</strong> </td><td><h5><?php echo $_SESSION['resumenPI']?></h5></td>
                        </tr>
                    </table>     
                    <?php }else{ echo "<h2> no hay proyectos de investigación registrados!!! </h2> </br> </br>"; } ?>
                    <button name="submit" href="" id="" class="btn btn-info"> Agregar Proyecto </button>

              </div><!-- FIN Pestaña de proyectos de investigación -->

              <!-- Pestaña de trabajos dirijidos -->
              <div role="tabpanel" class="tab-pane" id="seccion8">

                       <h3>Trabajos Dirijidos</h3>   
                       <?php if(isset($_SESSION['tituloTrabajoTD'] ) &&  isset($_SESSION['nivelFormacionTD'])){?>
                        <table class="table table-hover thumbnail">
                            <tr>
                             <td><strong>Título:</strong> </td><td><h5><?php echo $_SESSION['tituloTrabajoTD']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Nivel de formación:</strong> </td><td><h5><?php echo $_SESSION['nivelFormacionTD']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Modalidad:</strong> </td><td><h5><?php echo $_SESSION['modalidadTD']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Área:</strong> </td><td><h5><?php echo $_SESSION['areaTD']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>año:</strong> </td><td><h5><?php echo $_SESSION['anoTD']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Acta de evaluación:</strong> </td><td><h5><?php echo $_SESSION['actaEvaluacionTD']?></h5></td>
                            </tr>
                        </table> 
                        <?php }else{ echo "<h2> no hay trabajos dirijidos registrados!!! </h2> </br> </br>"; } ?>
                        <button name="submit" href="" id="" class="btn btn-info"> Agregar Trabajo </button>

              </div><!-- FIN Pestaña de trabajos dirijidos -->

              <!-- Pestaña de publicaciones -->
              <div role="tabpanel" class="tab-pane" id="seccion9">

                      <h3>Publicaciones</h3>   
                      <?php if(isset($_SESSION['tipoPublicacionP'] ) &&  isset($_SESSION['tituloP'])){?>
                        <table class="table table-hover thumbnail">
                            <tr>
                             <td><strong>Tipo de la publicación:</strong> </td><td><h5><?php echo $_SESSION['tipoPublicacionP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>título:</strong> </td><td><h5><?php echo $_SESSION['tituloP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Pais:</strong> </td><td><h5><?php echo $_SESSION['paisP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Ciudad:</strong> </td><td><h5><?php echo $_SESSION['ciudadP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Revista:</strong> </td><td><h5><?php echo $_SESSION['revistaP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>ISSN:</strong> </td><td><h5><?php echo $_SESSION['issnP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>ISBN:</strong> </td><td><h5><?php echo $_SESSION['isbnP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Editorial:</strong> </td><td><h5><?php echo $_SESSION['editorialP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Volumen:</strong> </td><td><h5><?php echo $_SESSION['volumenP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Fasículo</strong> </td><td><h5><?php echo $_SESSION['fasiculoP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Páginas:</strong> </td><td><h5><?php echo $_SESSION['paginasP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Total de páginas:</strong> </td><td><h5><?php echo $_SESSION['totalPaginas']?></h5></td>
                            </tr>
                             <tr>
                             <td><strong>Año:</strong> </td><td><h5><?php echo $_SESSION['anoP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Semestre:</strong> </td><td><h5><?php echo $_SESSION['semestreP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Patentes:</strong> </td><td><h5><?php echo $_SESSION['patentesP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Evidencia Patente:</strong> </td><td><h5><?php echo $_SESSION['evidenciaPatenteP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Creación de Software:</strong> </td><td><h5><?php echo $_SESSION['creacionSoftwareP']?></h5></td>
                            </tr>
                            <tr>
                             <td><strong>Evidencia del Software:</strong> </td><td><h5><?php echo $_SESSION['evidenciaSoftwareP']?></h5></td>
                            </tr>
                        </table>   
                        <?php }else{ echo "<h2> no hay publicaciones registradas!!! </h2> </br> </br>"; } ?>
                        <button name="submit" href="" id="" class="btn btn-info"> Agregar publicación </button>
              </div><!-- FIN Pestaña de publicaciones -->

              <!-- Pestaña de eventos cientificos -->
              <div role="tabpanel" class="tab-pane" id="seccion10">
                      <h3>Eventos cientificos</h3>   
                      <?php if(isset($_SESSION['tituloTrabajoTD'] ) &&  isset($_SESSION['nivelFormacionTD'])){?>
                    <table class="table table-hover thumbnail">
                        <tr>
                         <td><strong>Nombre:</strong> </td><td><h5><?php echo $_SESSION['tituloTrabajoTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Pais:</strong> </td><td><h5><?php echo $_SESSION['nivelFormacionTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Cuidad:</strong> </td><td><h5><?php echo $_SESSION['modalidadTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Año:</strong> </td><td><h5><?php echo $_SESSION['areaTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Semestre:</strong> </td><td><h5><?php echo $_SESSION['anoTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Tipo de participación:</strong> </td><td><h5><?php echo $_SESSION['actaEvaluacionTD']?></h5></td>
                        </tr>
                        <tr>
                         <td><strong>Evidencia del evento:</strong> </td><td><h5><?php echo $_SESSION['actaEvaluacionTD']?></h5></td>
                        </tr>
                    </table>  
                    <?php }else{ echo "<h2> no hay eventos cientificos registradas!!! </h2> </br> </br>"; } ?>
                    <button name="submit" href="" id="" class="btn btn-info"> Agregar Evento</button>

              </div><!-- FIN Pestaña de evebtos cientificos -->
            </div><!-- FIN Pestaña -->
          



