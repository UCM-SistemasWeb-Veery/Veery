<?php
if(!session_id()) session_start();

include('includes/constants.php');
include('conexion_bd.php');

$_SESSION['objConexion']=new conexion_bd();

include('proc_datos.php');




?>