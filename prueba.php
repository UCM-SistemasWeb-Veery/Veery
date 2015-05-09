<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'veery';


$conexion = new mysqli($host,$user,$passwd,$database);

if( mysqli_connect_errno())
{
	echo "error al conectar";
}

$query = "SELECT password from login where name='javier'";

$resultado = $conexion->query($query);
if($resultado==false){
	echo "hola";
}
$values = $resultado->fetch_assoc();

echo $values["password"];

$conexion->close();

?>