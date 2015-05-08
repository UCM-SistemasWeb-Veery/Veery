<?php

class conexion_bd{
	public $mysql;
	
	function __construct(){
		
		$this->mysql = new mysqli('localhost',DB_USER,DB_PASS);
		if ($this->mysql->connect_errno) {
			echo "Fallo al contenctar a MySQL: (" . $this->mysql->connect_errno . ") " . $this->mysql->connect_error;
		}
		$db_select=mysqli_select_db($this->mysql,DB_NAME);
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error());
		}
	}
	
	function dev_query($query){
		return $this->mysql->query($query);
	}
	function no_dev_query($query){
		$this->mysql->query($query);
	}

	function destructor(){
		mysql_close($mysql);
	}
}
?>