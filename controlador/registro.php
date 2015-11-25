<?php 
require_once('../Connections/conexion_BDinvestigacion.php'); 

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


  $foto=$_FILES['fotografia'];
  // pregunta si hay error, si lo hay entra.
  if ($foto["error"] != 0){
    echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
  // aquí sé que no existen errores.
  else
  { 
    session_start();
    
    $ruta="../adjuntos/imagenes/";
    //Pregunto si no tiene extensiones invalidas, entra si hay un error
    if(!preg_match("/.jpg$|.png$|.jpeg$/i", $foto['name'])) 
    {
      //poner mensaje
      echo "La expencion del archivo no es valida";
    }
    // pregunto por el tamaño del la foto, 12582912 equivale a 3MB
    if($foto['size'] > 12582912) {
      // colocar mensaje
      echo "El tamaño del archivo es mayor de 3MB, por favor seleecione un archivo que pese menos de 3MB";
    }
    $nombreArchivo= $_POST['cedulaDocente'];
    //$nombreArchivo= "jorge hernan";
    $extension= end(explode(".", $foto['name']));

    //mkdir('../adjuntos/imagenes',0777,TRUE);
    $rutaCompleta = $ruta.$nombreArchivo.".".$extension;
    

    move_uploaded_file($foto['tmp_name'],$rutaCompleta);

    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO docente (cedulaDocente, Fotografia, nombre, apellido, fechaNacimiento, lugarNacimiento, genero, EstadoCivil, numeroHijos, facultad, programa, direccion, municipio, telefonoFijo, telefonoCelular, correo, investigador, tipoInvestigador, grupoInvestigacion, lineaInvestigacion, tarjetaProfesional) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cedulaDocente'], "text"),
                       GetSQLValueString($rutaCompleta, "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['fechaNacimiento'], "text"),
                       GetSQLValueString($_POST['lugarNacimiento'], "text"),
                       GetSQLValueString($_POST['genero'], "text"),
                       GetSQLValueString($_POST['EstadoCivil'], "text"),
                       GetSQLValueString($_POST['numeroHijos'], "text"),
                       GetSQLValueString($_POST['facultad'], "text"),
                       GetSQLValueString($_POST['programa'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['municipio'], "text"),
                       GetSQLValueString($_POST['telefonoFijo'], "text"),
                       GetSQLValueString($_POST['telefonoCelular'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString(isset($_POST['investigador']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['tipoInvestigador'], "text"),
                       GetSQLValueString($_POST['grupoInvestigacion'], "text"),
                       GetSQLValueString($_POST['lineaInvestigacion'], "text"),
                       GetSQLValueString($_POST['tarjetaProfesional'], "text"));

    mysql_select_db($database_conexion_BDinvestigacion, $conexion_BDinvestigacion);
    $Result1 = mysql_query($insertSQL, $conexion_BDinvestigacion) or die(mysql_error());

  }




    //download_file($rutaCompleta);

}// cierro else de la foto
  
    /**
     * Función que permite descargar un archivo
     * @param  String $archivo          Ruta del archivo a descargar.
     * @param  (null|String) $downloadfilename El nombre que se quiere usar para descargar el archivo, si no se especifica se usa el nombre actual del archivo.
     * @return File Stream                   La descarga del archivo
     */
    function download_file($archivo, $downloadfilename = null) {
        if (file_exists($archivo)) {
            $downloadfilename = $downloadfilename !== null ? $downloadfilename : basename($archivo);
            header('Content-Description: File Transfer');
            // generico
            header ("Content-Type: application/octet-stream");
            // para pdf
            //header("Content-Type: application/pdf"); 
            //header("Content-Type: image/jpeg");
            //header("Content-Type: image/png");
            header('Content-Disposition: attachment; filename="'.$downloadfilename.'"'); 
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($archivo));
            //ob_clean();
            flush();
            readfile($archivo);
            exit;
        }
    }

?>