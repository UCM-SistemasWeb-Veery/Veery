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
	<link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="wrapper">
    <!-- left-sidebar -->
    <?php 
        include_once('includes/left-sidebar.php'); 
    ?>
    <!-- /#left-sidebar -->
			<div id="app-content">
        <div id="banner" class="row" style="background:white;">
            <header>
			          <div id="menu-button">
			              <a href="#menu-toggle" id="menu-toggle"><span></span></a>
			          </div>            
            		<img id="logo" src="img/veryLogo.png" alt="Veery">
            </header>
            <!-- header-->     
        </div>     
        <div class="row">    				
					<nav class="clearfix">
					    <ul>
					        <li><a class="btn inverse" href="#">My Veery</a></li>
					        <li class="active"><a class="btn inverse active" href="#">Just For You</a></li>
					        <li><a class="btn inverse" href="#">Trending</a></li>
					        <li><a class="btn inverse" href="#">Live</a></li>
					        <li><a class="btn inverse" href="#">Browse</a></li>
	<!--					        <li id="search-box">
 									<a class="searchtoggler"><span class="fa fa-search"></span></a>

										<div class="searchcontainer">
	  
										   <div class="searchsmall">
										      <input type="text" placeholder="Where to go?"/>
										   </div>
										</div>		    -->     
					        	<!-- <input type="text" name="search" placeholder="Search">
					        	<button type="submit" class="btn inverse"><span class="fa fa-search"></span></button> 
					        </li>-->
					    </ul>
					    <a href="#" id="pull">Just For You</a>
					</nav>
				</div>	

