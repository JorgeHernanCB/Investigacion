<?php 

	if(isset($_GET)){
		download_file($_GET['r']);
	}

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