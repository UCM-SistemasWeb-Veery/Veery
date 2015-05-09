<?php
if(!session_id()) session_start();
$_SESSION['logeado']=false;

include("index.php");
?>