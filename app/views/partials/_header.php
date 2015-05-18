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
	<title><?php if(isset($data['title'])){ echo $data['title'].' | ';} echo SITETITLE; ?></title> 
	<meta name="description" content="">

	<link href="<?php echo css_path;?>custom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo css_path;?>player.css" rel="stylesheet" type="text/css">
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
        include_once('_left-sidebar.php'); 
    ?>
    <!-- /#left-sidebar -->
			<div id="app-content">
        <div id="banner" class="row">
            <header>
            	<div class="row">
            		<div class="col col-4">
				          <div id="menu-button">
				              <a href="#menu-toggle" id="menu-toggle"><span></span></a>
				          </div> 
				          <a href="<?php echo PATH ?>"><img id="logo" src="<?php echo PATH ?>img/veryLogo.png" alt="Veery"></a>
			          </div>
			          <div class="col col-5 col-offset-3">
			          <?php 
					          if(!\core\session::get('loggedin')){
					          		echo '
					            		<div id="session-controls">
					            			<div id="login-form">
					            				<form action="'.PATH.'login" method="post">
					            					<input class="btn inverse small" type="text" name="username" placeholder="Usuario">
					            					<input class="btn inverse small" type="password" name="password" placeholder="Contraseña">
																<input class="btn primary small center" method="post" type="submit" name="submit" value="acceder"></input>
					            				</form>
					            			</div>	            		
						            		<a href="'.PATH.'register" class="btn alternate small"><span class="fa fa-pencil-square-o"></span> Registro</a>
														<a href="" id="login-button" class="btn alternate small"><span class="fa fa-sign-in"></span> Login</a>
													</div>
					          		';
					          	} else {
					          		echo '
					            		<div id="session-controls">           		
														<a href="'.PATH.'logout" class="btn alternate small"><span class="fa fa-sign-out"></span> Logout</a>
													</div>
					          		';
					          	} 
			          	?>

						    <?php
							/*if(!session_id()) session_start();
								if(isset($_SESSION['logeado'])){
									if($_SESSION['logeado']==false){
										if(isset($_SESSION['Error'])){
											if($_SESSION['Error']==true){
												echo $_SESSION["Sentences_error"];
											}
											echo "<a href='registro.php' class='btn alternate small'>Registro</a>
											<a href='login.php' class='btn alternate small'>Login</a>";
										}
									}
									else{
										echo "Bienvenido,".$_SESSION["User"].".<a href='logout.php'>(Salir)</a>";
									}
								}
								else{
									echo "<a href='registro.php' class='btn alternate small'>Registro</a>
									  <a href='login.php' class='btn alternate small'>Login</a>";
									  echo "Hola";
								}*/
							?>
	            		
			          </div>
            	</div>
            </header>
            <!-- /#header-->
        </div>
<!--         <div class="row">
					<nav class="clearfix">
					    <ul>
					        <li><a class="btn inverse" href="artist_view.php">My Veery</a></li>
					        <li class="active"><a class="btn inverse active" href="index.php">Just For You</a></li>
					        <li><a class="btn inverse" href="genero_view.php">Trending</a></li>
					    </ul>
					    <a href="#" id="pull">Just For You</a>
					</nav>
				</div> -->
        <div class="row">
