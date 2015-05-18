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
			$_SESSION['Error']=true;
			$_SESSION['Sentences_error']="Contraseña incorrecta";
		}
}
else{
	$_SESSION['logeado']=false;
	$_SESSION['Sentences_error']="Usario incorrecto";
	$_SESSION['Error']=true;
}
include("index.php");
?>