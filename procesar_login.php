<?php
if(!session_id()) session_start();
include('sql/motor.php');

$query = "SELECT id,password,type,name from login where name='{$_REQUEST['user']}'";
$resultado=$_SESSION['objConexion']->dev_query($query);
$values = $resultado->fetch_assoc();

if($values==TRUE){
		if($values['password']==$_REQUEST['pwd']){
			$_SESSION['User']=$values['name'];
			$_SESSION['Type']=$values['type'];
			$_SESSION['logeado']=true;
		}
		else{
			$_SESSION['logeado']=false;
			echo "Usuario o login incorrecto";
		}
}
else{
	$_SESSION['logeado']=false;
}
include("index.php");
?>