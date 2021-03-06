<!DOCTYPE html PUBLIC>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <!-- bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/cssprincipal.css"> 
  
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/functions.ajax.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 
  <script src="../lib/libs/jquery/jquery-1.8.2.min.js"></script>
  <script src="../lib/libs/bootstrap/js/bootstrap.min.js"></script>
 
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

        <a href="/PaginaInvestigacion" class="navbar-brand">INVESTIGACIÓN</a>
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
                  <a href="">Realizar consulta</a>
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
           <span class="timer" id="timer"></span>
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



  <?php
            
      if ( isset($_SESSION['docenteNombre']) && 
        isset($_SESSION['docenteApellido']) &&
         $_SESSION['docenteNombre'] != '' 
         && $_SESSION['docenteApellido'] != '0' ){

      
          require_once("../controlador/busqueda.php");



           }else{

          echo '
            <div class="text-center">
              <h2>Pagina en construcción</h2>
           </div>'; 
         }  
                ?>
          
          </div>
          <script src="https://code.jquery.com/jquery.js"></script>
          <script src="../js/bootstrap.min.js"></script>
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



