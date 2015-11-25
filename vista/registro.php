<!DOCTYPE html PUBLIC>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <a href="/" class="navbar-brand">INVESTIGACIÓN</a>
		</div><!--End navbar header-->
		<div class="collapse navbar-collapse" id="navbar-collapse">
    
        <ul class="nav navbar-nav">
          <li> 
              <a href="consulta.php">Realizar consulta</a>
          </li>
        </ul>  
        
         
            
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


	<div class="navbar-inverse navbar-fixed-bottom" role="navigation">
		
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

<!--Inicio-->

<div class="container">
	<!-- InstanceBeginEditable name="cuerpo" -->
    <form method="post" name="form1" role="form" action="../controlador/registro.php" id="form-crear-docente" enctype="multipart/form-data">
      
      <div class="page-header" id="Inicio">
        <div class="row">

          <!-- Primer bloque -->
          <div class="col-lg-4">
            <blockquote>

            <div class="form-group">
                <label>Cedula</label>
                <input type="text" class="form-control" name="cedulaDocente" placeholder="Introdusca su cedula" value="" size="32" required>
            </div>
            
            <div class="form-group">
            <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Introdusca su nombre" value="" size="32" required>
            </div>

            <div class="form-group">
              <label>Apellido</label>
              <input type="text" class="form-control" placeholder="Introdusca su apellido" name="apellido" value="" size="32" required>
           </div>

            <div class="form-group">
              <label>Fecha de nacimiento</label>
              <input type="text"  class="form-control" placeholder="Introdusca su fecha de nacimiento" name="fechaNacimiento" value="" size="32" required>
            </div>

            <div class="form-group">
              <label>Lugar de nacimiento</label>
                <input type="text" class="form-control" placeholder="Introdusca su lugar de nacimiento" name="lugarNacimiento" value="" size="32" required>
            </div>

            <div class="form-group ">
            <label>Genero</label>
              <select class="selectpicker" name="genero">
                <option value="Masculino" <?php if (!(strcmp('m', ""))) {echo "SELECTED";} ?>>Masculino</option>
                <option value="Femenino" <?php if (!(strcmp('f', ""))) {echo "SELECTED";} ?>>Femenino</option>
              </select>
            </div>

            <div class="form-group">
            <label>Estado civil</label>
                <select name="EstadoCivil">
                  <option value="Soltero/a" >Soltero/a</option>
                  <option value="Casado/a" >Casado/a</option>
                  <option value="Viudo/a" >Viudo/a</option>
                  <option value="Separado/a" >Separado/a</option>
                  <option value="Union libre" >Union libre</option>
                </select>
            </div>

            <div class="form-group">
              <label>Numero de hijos</label>
                <input type="text" class="form-control" placeholder="Introdusca el numero de hijos" name="numeroHijos" value="" size="32" required>
            </div>

            </blockquote>

          </div><!-- FIN Primer bloque -->

          <!-- Segundo bloque -->
          <div class="col-lg-4">
            <blockquote>
            
              <div class="form-group">
              <label>Facultad</label>
                <input type="text" class="form-control" placeholder="Introdusca la facultad a la que pertenece" name="facultad" value="" size="32" required>
              </div>

              <div class="form-group">
              <label>Programa</label>
                <input type="text" class="form-control" placeholder="Introdusca el programa al cual pertenece" name="programa" value="" size="32" required>
              </div>

              <div class="form-group">
              <label>Direccion</label>
                <input type="text" class="form-control" placeholder="Introdusca su direccion" name="direccion" value="" size="32" required>
              </div>

              <div class="form-group">
              <label>Municipio</label>
                <input type="text" class="form-control" placeholder="Introdusca el municipio"  name="municipio" value="" size="32" required>
              </div>

              <div class="form-group">
                <label>Telfono fijo</label>
                  <input type="text" class="form-control" placeholder="Introdusca su telefono fijo" name="telefonoFijo" value="" size="32" required>
                </div>

               <div class="form-group">
                <label>Telfono celular</label>
                  <input type="text" class="form-control" placeholder="Introdusca su telefono celular" name="telefonoCelular" value="" size="32" required>
                </div>

                <div class="form-group">
                <label>Correo personal</label>
                  <input type="text" class="form-control" placeholder="Introdusca su correo personal" name="correo" value="" size="32" required>
                </div>

                <div class="form-group">
                <label>Es usted un investigador</label>
                  <input type="checkbox" name="investigador" value="">
                </div>

                </blockquote>
             </div><!-- FIN Segundo bloque -->

             <!-- Tercer bloque -->
            <div class="col-lg-4">
              <blockquote>
                <div class="form-group">
                <label>Tipo de investigador</label>
                  <input type="text" class="form-control" placeholder="Introdusca que tipo de investigador és" name="tipoInvestigador" value="" size="32">
                </div>

                <div class="form-group">
                <label>Grupo de investigacion</label>
                  <input type="text" class="form-control" placeholder="Introdusca su grupo de investigacion" name="grupoInvestigacion" value="" size="32">
                </div>

                <div class="form-group">
                <label>Linea de investigacion</label>
                  <input type="text" class="form-control" placeholder="Introdusca su linea de investigacion"  name="lineaInvestigacion" value="" size="32">
                </div>

                <div class="form-group">
                <label>Tarjeta profesional</label>
                  <input type="text" class="form-control" placeholder="Introdusca su numero de tarjeta profesional" name="tarjetaProfesional" value="" size="32" required>
                </div>

                 <div class="form-group">
                
                <label>Foto</label>
                  <input type="file" class="filestyle" data-input="false" name="fotografia" id="foto" value="" size="32" required>
                </div>

                <div class="form-group">
                <label>Username</label>
                  <input type="text" class="form-control" placeholder="Introdusca su username" name="username" value="" size="32" required>
                </div>

                <div class="form-group">
                <label>Password</label>
                  <input type="text" class="form-control" placeholder="Introdusca su contraseña" name="password" value="" size="32" required>
                </div>

               
                </blockquote>
            </div><!-- FIN Tercer bloque -->

          </div><!-- FIN de la clase row -->

          <div class="form-group">
               <input type="submit" id="enviar_registro" class="btn btn-success btn-lg btn-block" value="Insertar registro">
          </div>
          <input type="hidden" name="MM_insert" value="form1">

        </div>
      <div>

    </form>
    <p>&nbsp;</p>
	<!-- InstanceEndEditable --></div>
</div><!--End Container Inicio-->

<!--Servicios-->

<div class="container">
	
</div>

<!-- Prueba de Lectura-->
<div class="container">

</div>

     

</div> <!-- /container -->

<!-- End Prueba-->

	</div><!--End Container-->

	 </br>
	 </br>

</body>
<!-- InstanceEnd --></html>
