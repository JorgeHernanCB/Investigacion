<?php 
	if(isset($_POST['name'], $_POST['value'])){
		session_start();
		require_once("../Connections/ConnectionBD.php");
		$ConnectionBD = new ConnectionBD();
		$campo = htmlspecialchars($_POST['name']);
		$valor = htmlspecialchars($_POST['value']);
		$cedulaDocente = $_SESSION['cedulaDocente'];
		$sql = 'UPDATE docente 
				SET '.$campo.' = :valor 
				WHERE cedulaDocente = :cedulaDocente';
		$consultaPreparada = $ConnectionBD->query_prepare($sql);
		$consultaPreparada->bindParam(":valor",$valor);
		$consultaPreparada->bindParam(":cedulaDocente",$cedulaDocente);
		$consultaPreparada->execute();
		$_SESSION[$campo]=$valor;
		
	}
?>