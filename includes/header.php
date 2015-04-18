<?php
	include_once('constants.php');
?>
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-ES>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-ES>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-ES"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-ES"> <!--<![endif]-->
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<title><?php echo SITETITLE; ?></title> 
	<meta name="description" content="">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container-full">
		<header>
		<div id="logo-placeholder">
			<div class="container">
			  <img id="logo" src="img/veryLogo.png" alt="Veery">
			</div>
		</div>
		</header><!-- header role="banner" -->
	</div><!-- container-fluid -->
	<div class="container-full">
			<div id="left-sidebar" class="col col-2">
				<?php
					include_once('left_sidebar.php');
				?>
			</div>
			<div id="app-content" class="col col-10">
				<nav class="clearfix">
				    <ul class="clearfix">
				        <li><a href="#">My Veery</a></li>
				        <li><a class="bold" href="#">Just For You</a></li>
				        <li><a href="#">Trending</a></li>
				        <li><a href="#">Live</a></li>
				        <li><a href="#">Browse</a></li>
				        <li id="search-box">
				        	<input type="text" name="search" placeholder="Search">
				        	<button type="submit" class="btn btn-inverse"><span class="fa fa-search"></span></button>
				        </li>
				    </ul>
				    <a href="#" id="pull">Just For You</a>
				</nav>
				<div class="row">