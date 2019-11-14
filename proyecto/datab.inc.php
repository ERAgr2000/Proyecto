<?php

//CONEXION A LA BASE DE DATOS
include 'Login1.php';

	class Datab{

		private $servername;
		private $username;
		private $password;
		private $dbname;
		private $charset;

		public function connect(){
			$this->servername = "localhost";
			$this->username = "marktx";
			$this->password = "12345";
			$this->dbname = "usuarios";
			$this->charset = "utf8mb4";

			try{

				$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;

				$pdo = new PDO($dsn, $this->username, $this->password);
				//echo "si conecto jeje";

				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $pdo;

			} catch (PDOException $e) {

				echo "CONEXION FALLIDA: ".$e->getMessage();
				
			}
		}

	}

?>
