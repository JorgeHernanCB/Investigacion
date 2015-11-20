<?php 
require_once('../Connections/conexion_BDinvestigacion.php'); 

    if (isset($_POST['tipoCurso'])) {
     //Código de validación de datos
      echo "<label>".'$_POST['tipoCurso']'"</label>";
    }
    else
      {echo "no llego!!!";}

  $foto=$_FILES['evidencia-curso'];
  // pregunta si hay error, si lo hay entra.
  if ($foto["error"] != 0){
    echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
  // aquí sé que no existen errores.
  else
  { 
    session_start();
    print($_SESSION['userid']);
    $ruta="../adjuntos/documentos/";
    //Pregunto si no tiene extensiones invalidas, entra si hay un error
    if(!preg_match("/.pdf$|.word$|.docx$/i", $foto['name'])) 
    {
      //poner mensaje
      echo "La expencion del archivo no es valida";
    }
    // pregunto por el tamaño del la foto, 12582912 equivale a 3MB
    if($foto['size'] > 12582912) {
      // colocar mensaje
      echo "El tamaño del archivo es mayor de 3MB, por favor seleecione un archivo que pese menos de 3MB";
    }
    //$nombreArchivo= $_POST['cedulaDocente'];
    $nombreArchivo= "jorge hernan";
    $extension= end(explode(".", $foto['name']));

    //mkdir('../adjuntos/imagenes',0777,TRUE);
    $rutaCompleta = $ruta.$nombreArchivo.".".$extension;
    

    move_uploaded_file($foto['tmp_name'],$rutaCompleta);

    //Ejecucion de la sentencia SQL
    mysql_query("INSERT INTO otrosestudios (codigoOtrosEstudios,tipoCurso,evidenciaCurso,nombre,institucion,lugar,ano,semestre,tipoParticipacion,codigoDocente) VALUES (NULL, ".$_POST['tipoCurso'].", ".$rutaCompleta.", ".$_POST['nombreCurso'].", ".$_POST['institucion'].", ".$_POST['lugar'].", ".$_POST['ano'].", ".$_POST['semestre'].", ".$_POST['tipoParticipación'].", ".$_SESSION['userid'].")");


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