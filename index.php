<!DOCTYPE html PUBLIC>
<html lang="es"><!-- IDIOMA ESPAÑOL -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <!-- Línea para activar el responsive en los dispositvos móviles, es de vital importancia -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS Local-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!-- CSS Estilos personales -->
  <link rel="stylesheet" href="css/cssprincipal.css"> 
  <!-- Font Awesome CSS remoto -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- X-editable CSS Local, js al final de la página-->
  <link href="lib/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
 
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

        <a href="/" class="navbar-brand">INVESTIGACIÓN</a>
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
                  <a href="vista/consulta.php">Realizar consulta</a>
                </li>
              </ul>    

              <div class="session_on navbar-right"> 
                  <span class="glyphicon glyphicon-user white"></span>
                  <span class="label"> Bienvenido  '.$_SESSION['username'] .' </span>
                  <button name="submit" href="javascript:void(0);" id="sessionKiller" class="btn btn-primary btn-lg">
                    Logout
                  </button> 

              </div>';
    }else{
      echo'
        <ul class="nav navbar-nav">
          
          <li> <a href="vista/registro.php">Registrarse</a></li>
          
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

      
          require_once("vista/contenido.php");



           }else{

          echo '
            <div class="text-center">
              <img src="imagenes/construccion.jpg">
           </div>'; 
         }  
                ?>
          </div>
          <!-- JQuery  local-->
          <script src="js/jquery.js"></script>
          <!-- Bootstrap local -->
          <script src="js/bootstrap.min.js"></script>
          <!-- X-Editable JS local-->
          <script src="lib/bootstrap-editable/js/bootstrap-editable.js"></script>
          <!-- Momment JS Local-->
          <script src="js/moment.min.js"></script>
          <!-- Funciones JS Local-->
          <script type="text/javascript" src="js/functions.ajax.js"></script>
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



