<?php
	
	/*
	 * Incluyo las CONSTANTES globales para la conexión a la Base de datos (DB_HOST, DB_NAME, DB_USER, DB_PASS)
	 */
	require_once "config_db.php";	

	/*
	 * Clase que creará la conexión a la base de datos.
	 */
	class ConnectionBD{

		/**
		 * Variable que contendrá la conexión a la base de datos.
		 * @var PDO
		 */
		private $connection;

		/**
		 * Funcion para realizar la conexión a la base de datos
		 */
		public function __construct(){
			try {
		    	$this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,
					DB_USER, DB_PASS);
		    	/*
		    	*	linea de codigo para que la conexion a la base de datos quede en el formato
		    	*	utf8 y asi poder utilizar caracteres especiales
		    	*/
		    	$this->connection->exec("set names utf8");
			} catch (PDOException $e) {
			    echo 'Falló la conexión: ' . $e->getMessage();
			}
		}

		/**
		 * Prepara una sentencia para su ejecución y devuelve un objeto sentencia
		 * @param  String $query Consulta SQL
		 * @return Object        Retorna un objeto sentencia
		 */
		public function query_prepare($query){
			return $this->connection->prepare($query);
		}
	}
?> 