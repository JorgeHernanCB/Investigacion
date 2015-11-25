<?php 

?>
 		   <blockquote>
              <p>Seleccione una de las siguientes opciones</p>
              <small>Para poder filtrar la información a buscar</small>
        </blockquote>

        <!-- Pestañas -->
        <div class="container text-center">

            <ul class="nav nav-pills nav-justified" role="tablist">
              <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab">Doncentes</a></li>
              <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab">Eventos Cientificos</a></li>
              <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab">Publicaciones</a></li>
              <li role="presentation"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab">Proyectos</a></li>
              <li role="presentation"><a href="#seccion5" aria-controls="seccion5" data-toggle="tab">Trabajos dirijidos</a></li>
              <li role="presentation"><a href="#seccion6" aria-controls="seccion6" data-toggle="tab">Actividades</a></li>
              <li role="presentation"><a href="#seccion7" aria-controls="seccion7" data-toggle="tab">Comite Evaluación</a></li>
            </ul>
            
            <!-- Contenido de pestañas -->
            <div class="tab-content">

              <!-- Pestaña de docentes -->
              <div role="tabpanel" class="tab-pane in active" id="seccion1">
              
              <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar docentes</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

              </br>
              <!-- Idea de busqueda avanzada -->
              <div class="table-responsive">
                 <table class="table table-bordered  thumbnail">
                      <tr class="success">
                       <td><strong>Nombre</strong> </td>
                       <td><strong>Apellido</strong> </td>
                       <td><strong>Fecha de Nacimiento</strong> </td>
                       <td><strong>Lugar de Nacimiento</strong> </td>
                       <td><strong>Genero</strong> </td>
                       <td><strong>Facultad</strong> </td>
                       <td><strong>Programa</strong> </td>
                       <td><strong>Tipo de investigador</strong> </td>
                       <td><strong>Grupo de investigación</strong> </td>
                       <td><strong>Linea de investigación</strong> </td>
                      </tr>
                      <tr>
                       <td><input type="text" class="form-control" placeholder="Nombre"></td>
                       <td><input type="text" class="form-control" placeholder="Apellido"></td>
                       <td><input type="text" class="form-control" placeholder="Fecha"></td>
                       <td><input type="text" class="form-control" placeholder="Lugar"></td>
                       <td><input type="text" class="form-control" placeholder="Genero"></td>
                       <td><input type="text" class="form-control" placeholder="Facultad"></td>
                       <td><input type="text" class="form-control" placeholder="Programa"></td>
                       <td><input type="text" class="form-control" placeholder="Tipo"></td>
                       <td><input type="text" class="form-control" placeholder="Grupo"></td>
                       <td><input type="text" class="form-control" placeholder="Linea"></td>
                      </tr>
                </table>
              </div>

            </div><!-- FIN Pestaña de docentes -->

            <!-- Pestaña de eventos cientificos -->
            <div role="tabpanel" class="tab-pane" id="seccion2">

                <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consulta evento cientifico</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

            </div><!-- FIN Pestaña de eventos cientificos -->

            <!-- Pestaña de publicaciones -->
            <div role="tabpanel" class="tab-pane" id="seccion3">
               <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar publicaciones</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

            </div><!-- FIN Pestaña de publicaciones -->

            <!-- Pestaña de proyectos -->
            <div role="tabpanel" class="tab-pane" id="seccion4">
               <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar proyectos</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

            </div><!-- FIN Pestaña de proyectos -->

            <!-- Pestaña de trabajos dirijidos -->
            <div role="tabpanel" class="tab-pane" id="seccion5">
               <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar trabajos</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

            </div><!-- FIN Pestaña de trabajos dirijidos -->

            <!-- Pestaña de actividades -->
            <div role="tabpanel" class="tab-pane" id="seccion6">
               <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar actividades</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>

                </div>
                  </br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                  
              </form>

            </div> <!-- FIN Pestaña de actividades -->

            <!-- Pestaña de comite de evaluación -->
            <div role="tabpanel" class="tab-pane" id="seccion7">
               <form role="form" method="get">
            
                <div class="form-group">
                  <label><h1>Consultar comite</h1></label>

                  <div class="input-group input-group-lg"> 
                    <input type="text" class="form-control" placeholder="Introdusca la consulta" aria-describedby="sizing-addon1">
                    <span class="input-group-addon" id="sizing-addon1">
                    <span class="glyphicon glyphicon-search"></span></span>
                  </div>
                </div>
                  </br>
                <button type="submit" class="btn btn-success">Buscar</button>
              </form>
            </div> <!-- FIN Pestaña de comite de evaluación -->

    </div><!-- FIN contenido de pestañas -->
  </div><!-- FIN Pestañas -->