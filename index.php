<!DOCTYPE html PUBLIC>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<title>Investigación</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Inicio</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!--<link rel="stylesheet" href="css/custom.css">-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <link rel="stylesheet" type="text/css" href="cssprincipal.css" />
  <script type="text/javascript" src="js/jquery2.js"></script>

  <script type="text/javascript" src="js/jquery.js"></script>

  <script type="text/javascript" src="js/functions.ajax.js"></script>
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
          <li> <a href="/">registrarse</a></li>
          <li> <a href="#Servicios">Proyectos Actuales</a></li>
          <li> <a href="#Nuestro">Publicaciones</a></li> 
          <li> <a href="#Contactenos">Contactenos</a> </li>
        </ul>  
        
        
            
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
	<!-- InstanceBeginEditable name="cuerpo" --> 
    
    
    <div class="text-center">
      <h2>Inicio de Sesion</h2>
      </br>
      <div class=" jumbotron row principal" >
        <div class="col-md-6 col-md-offset-3">

                <div id="allContent"><table cellpadding="0" cellspacing="0" border="0" ><tr><td align="center" valign="middle" >
            
            <div id="alertBoxes"></div>
            <span class="loginBlock"><span class="inner">
              <?php
              session_start();
        if ( isset($_SESSION['username']) && isset($_SESSION['userid']) && $_SESSION['username'] != '' && $_SESSION['userid'] != '0' ){
          echo 'se inicio sesion correctamente';
          print($_SESSION['username']);
          print($_SESSION['userid']);
          echo '<div class="session_on">
            Ya iniciaste sesi&oacute;n &#124; Ahora has un <a href="javascript:void(0);" id="sessionKiller">logout</a>.<span class="timer" id="timer"  style="margin-left: 10px;"></span>
          </div>';
        }
        else{
          echo '<form method="post" action="" >
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>Usuario:</td>
                <td><input type="text" name="login_username" id="login_username" /></td>
              </tr>
              <tr>
                <td>Contrase&ntilde;a:</td>
                <td><input type="password" name="login_userpass" id="login_userpass" /></td>
              </tr>
              <tr>
                <td colspan="2" align="right"><span class="timer" id="timer"></span><button id="login_userbttn">Login</button></td>
              </tr>
            </table>
          </form>';
        }

              ?>
            
            </span></span>
            
          </td></tr></table></div> 

      </div>


    </div>
    </div>

  <!-- InstanceEndEditable --></div>

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/translatemypage.xml&up_source_language=es&w=160&h=60&title=&border=&output=js"></script>		-->
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>		
</body>
<!-- InstanceEnd --></html>
