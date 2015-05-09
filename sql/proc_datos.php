<?php
if(!session_id()) session_start();
class datos{
	public $nombre;
	public $apellido;
	public $sexo;
	public $fecha_nacimiento;
	public $email;
	public $password;
	public $tipo;

	
	function guardar(){
		$query = "SELECT id from login where name='{$this->nombre}'";
		$resultado=$_SESSION['objConexion']->dev_query($query);
		$values = $resultado->fetch_assoc();
		if($values==TRUE){
			//Nombre únicos de identidad,no se puede poner nombre iguales
			return 0;
		}
		else{
			$consulta_login="INSERT INTO login (id,name,password,type) VALUES (NULL,'{$this->nombre}','{$this->password}','{$this->tipo}')";
			$_SESSION['objConexion']->no_dev_query($consulta_login);
			
			$query = "SELECT id from login where name='{$this->nombre}'";
			$resultado=$_SESSION['objConexion']->dev_query($query);
			$values = $resultado->fetch_assoc();
			
			if($this->tipo=='user'){
				$consulta_tipo="INSERT INTO user (id,name,surname,birthdate,sexo,email) VALUES ('{$values["id"]}','{$this->nombre}','{$this->apellido}','{$this->fecha_nacimiento}','{$this->sexo}','{$this->email}')";
			}
			else if($this->tipo=='art'){
				$consulta_tipo="INSERT INTO art (id,name,email) VALUES ('{$values["id"]}','{$this->nombre}','{$this->email}')";
			}
			
			$_SESSION['objConexion']->no_dev_query($consulta_tipo);
			$_SESSION['User']=$this->nombre;
			$_SESSION['Type']=$this->tipo;
			$_SESSION['logeado']=true;
		}
	return 1;
	}
	
}
?>