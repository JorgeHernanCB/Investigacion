<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexion_BDinvestigacion = "localhost";
$database_conexion_BDinvestigacion = "investigacion";
$username_conexion_BDinvestigacion = "root";
$password_conexion_BDinvestigacion = "";
$conexion_BDinvestigacion = mysql_pconnect($hostname_conexion_BDinvestigacion, $username_conexion_BDinvestigacion, $password_conexion_BDinvestigacion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>