 <?php 
	

	$campos['genero'] = 'Masculino';
	$campos['facultad'] = 'ingenieria';
	$campos['programa'] = 'sistemas y computacion';
	buscar($campos, "docente");




	function buscar($campos, $nombreTabla){
		require_once("../Connections/ConnectionBD.php");
		$ConnectionBD = new ConnectionBD();
		$query = "SELECT * FROM ".$nombreTabla." WHERE";
		$and = " ";
		foreach ($campos as $key => $value) {
			$query .= $and."$key LIKE '%$value%' ";
			$and = " AND ";
		}
		print_r($query);
		$consultaPreparada = $ConnectionBD->query_prepare($query);
		/*foreach ($campos as $key => $value) {
			$key = ":$key";
			echo $key;
			$consultaPreparada->bindValue($key,$value);
		}*/
		//print_r($consultaPreparada);
		
		$consultaPreparada->execute();
		print_r($consultaPreparada->errorInfo());
		print_r($consultaPreparada->fetchAll());
	}
?> 