<?php require_once('../Connections/conexion_BDinvestigacion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['usuario'])) {
  $loginUsername=$_POST['usuario'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "inicio.php";
  $MM_redirectLoginFailed = "../index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_conexion_BDinvestigacion, $conexion_BDinvestigacion);
  
  $LoginRS__query=sprintf("SELECT usuario, password FROM loguin WHERE usuario=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $conexion_BDinvestigacion) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- InstanceBeginEditable name="doctitle" -->
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/custom.css">
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

        <a href="" class="navbar-brand">Investigacion</a>
		</div><!--End navbar header-->
		<div class="collapse navbar-collapse" id="navbar-collapse">
    
        <ul class="nav navbar-nav">
          <li> <a href="#Inicio">Quienes Somos</a></li>
          <li> <a href="#Servicios">Proyectos Actuales</a></li>
          <li> <a href="#Nuestro">Publicaciones</a></li> 
          <li> <a href="#Contactenos">Contactenos</a> </li>
        </ul>  
        
        <form ACTION="controlador/loguin.php" METHOD="POST" id="formAutenticacion" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Usuario" class="form-control" name="usuario">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Sign in"/>
          </form>  
            
    </div>
	</div><!--End container-->
</nav><!--End nav-->
	<div class="jumbotron text-left">


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
	<!-- InstanceBeginEditable name="cuerpo" --><h3>Logueo exitoso!!!<h3><!-- InstanceEndEditable --></div>
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

	 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/translatemypage.xml&up_source_language=es&w=160&h=60&title=&border=&output=js"></script>		
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>		
</body>
<!-- InstanceEnd --></html>
