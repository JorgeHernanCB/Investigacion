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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO docente (cedulaDocente, Fotografia, nombre, apellido, fechaNacimiento, lugarNacimiento, genero, EstadoCivil, numeroHijos, facultad, programa, direccion, municipio, telefonoFijo, telefonoCelular, correo, investigador, tipoInvestigador, grupoInvestigacion, lineaInvestigacion, tarjetaProfesional) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cedulaDocente'], "text"),
                       GetSQLValueString($_POST['Fotografia'], "text"),
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
?>