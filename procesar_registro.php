<?php
if(!session_id()) session_start();
include('sql/motor.php');
$login=new datos();
	$login->nombre=$_REQUEST['nombre'];
	$login->apellido=$_REQUEST['apellidos'];
	$login->password=$_REQUEST['pwd'];
	$login->tipo=$_REQUEST['tipo'];
	$login->fecha_nacimiento=$_REQUEST['bday'];
	$login->email=$_REQUEST['email'];
	echo $login->nombre;
	if($login->guardar()==1){
		include('registrado.php');
	}
	else{
		include('no_registrado.php');
	}
?>