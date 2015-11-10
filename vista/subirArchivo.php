<?php
	echo "hola";
	$foto=$_FILES['archivo'];
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
		if(!preg_match("/.jpg$|.png$|.jpeg$/i", $foto['name'])) {
			//poner mensaje
		{
		// pregunto por el tamaño del la foto, 12582912 equivale a 3MB
		if($foto['size'] > 12582912) {
			// colocar mensaje
		}
		$nombreArchivo= $_SESSION['docenteNombre'];
		//mkdir('../adjuntos/imagenes',0777,TRUE);
		echo $ruta.$nombreArchivo;

		move_uploaded_file($foto['tmp_name'],$ruta.$nombreArchivo);
	}

?>