<?php namespace Models;

	class Conexion{

		private $datos = array(
			"host" => "localhost", 
			"user" => "root", 
			"pass" => "harddrah1981", 
			"db" => "proyecto"
		);
		private $con;

		public function __construct(){
			$this->con = new \mysqli($this->datos['host'],$this->datos['user'],$this->datos['pass'],$this->datos['db']);
			if ($this->con->connect_errno) {
				echo "Fallo al conectar a MySQL: (" . $this->con->connect_errno . ") " . $this->con->connect_error;
			}
		}
		public function consultaSimple($sql){
			$this->con->query($sql);
		}
		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}
 ?>