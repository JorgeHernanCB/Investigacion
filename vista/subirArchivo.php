<?php

if ($_FILES['archivo']["error"] > 0)

	  {

	  echo "Error: " . $_FILES['archivo']['error'] . "<br>";

	  }

	else

	  {
	  mkdir('../adjuntos/imagenes',0777,TRUE);
	  move_uploaded_file($_FILES['archivo']['tmp_name'],"../adjuntos/imagenes/".$_FILES['archivo']['name']);

	}

?>