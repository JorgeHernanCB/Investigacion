<?php 
require_once("../Connections/ConnectionBD.php");
  
  // Verifico que venga el archivo y los datos.
  if (isset($_FILES, $_POST) && sizeof($_FILES) > 0 && $_FILES['evidencia-curso']['error'] == 0 && sizeof($_POST) > 0) {
      session_start();     
      $diploma=$_FILES['evidencia-curso'];
      $tipoCurso = htmlspecialchars($_POST['tipo-curso']);
      $nombreCurso = htmlspecialchars($_POST['nombre-curso']);
      $institucion = htmlspecialchars($_POST['institucion']);
      $lugar = htmlspecialchars($_POST['lugar']);
      $ano = htmlspecialchars($_POST['ano']);
      $semestre = htmlspecialchars($_POST['semestre']);
      $tipoParticipacion = htmlspecialchars($_POST['tipo-participacion']);

      //Pregunto si no tiene extensiones invalidas, entra si hay un error
      if(!preg_match("/.pdf$/i", $diploma['name'])){
        //poner mensaje 
        $mensaje['mensaje'] = "La extensión del archivo no es valida";
        echo json_encode($mensaje);
      }
      // pregunto por el tamaño del la diploma, 3145728 equivale a 3MB
      else if($diploma['size'] > 3145728) {
        // colocar mensaje
        $mensaje['mensaje'] = "El tamaño del archivo es mayor de 3MB, por favor seleecione un archivo que pese menos de 3MB";
        echo json_encode($mensaje);
      }
      else{
          $ruta="../adjuntos/documentos/";
          $cedulaDocente= $_SESSION['cedulaDocente'];
          $nombreArchivo = $diploma['name'];
          $extension = explode(".", $nombreArchivo);
          $extension = end($extension);
          //Quedará del tipo '../adjuntos/documentos/1110000_diploma.pdf'
          $rutaCompleta = $ruta.$cedulaDocente."_diploma_".$nombreCurso.".".$extension;
          if(move_uploaded_file($diploma['tmp_name'],$rutaCompleta)){
            $ConnectionBD = new ConnectionBD();
            $sql = "INSERT INTO otrosestudios 
                  (tipoCurso,evidenciaCurso,nombre,institucion,lugar,ano,semestre,tipoParticipacion,codigoDocente) 
                  VALUES ( :tipoCurso, :rutaCompleta, :nombreCurso, :institucion, :lugar, :ano, :semestre, :tipoParticipacion, :cedulaDocente )";
            $consultaPreparada = $ConnectionBD->query_prepare($sql);
            $consultaPreparada->bindParam(":tipoCurso", $tipoCurso);
            $consultaPreparada->bindParam(":rutaCompleta", $rutaCompleta);
            $consultaPreparada->bindParam(":nombreCurso", $nombreCurso);
            $consultaPreparada->bindParam(":institucion", $institucion);
            $consultaPreparada->bindParam(":lugar", $lugar);
            $consultaPreparada->bindParam(":ano", $ano);
            $consultaPreparada->bindParam(":semestre", $semestre);
            $consultaPreparada->bindParam(":tipoParticipacion", $tipoParticipacion);
            $consultaPreparada->bindParam(":cedulaDocente", $cedulaDocente);
            $consultaPreparada->execute();
            $error = $consultaPreparada->errorInfo();
            if($error[0] == 00000){
              $mensaje['mensaje'] = "Se ha ingresado el estudio exitosamente.";
              echo json_encode($mensaje);
            }
            else{
              $mensaje['mensaje'] = "Ha ocurrido un error inesperado, porfavor inténtelo de nuevo.";
              echo json_encode($mensaje);
            }
          }
      }
  }
  else
  {
    // error
    $mensaje['mensaje'] = "Ha ocurrido un error inesperado.";
    echo json_encode($mensaje);
  }

?>