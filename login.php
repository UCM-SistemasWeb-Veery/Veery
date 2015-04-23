<?php
	include_once('includes/constants.php');
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
        <div id="banner" class="row">
            <header>
            	<div class="row">
            		<div class="col col-4">
				          <div id="menu-button">
				              <a href="#menu-toggle" id="menu-toggle"><span></span></a>
				          </div> 
				          <a href="index.php"><img id="logo" src="img/veryLogo.png" alt="Veery"></a> 
			          </div>
			          <div class="col col-8">
	            		<div id="session-controls">
	            			<a href="registro.php" class="btn alternate small">Registro</a>	            		
	            			<div id="login">
	            				<form>
	            					<input class="btn inverse small" type="password" name="pwd" placeholder="Usuario">
	            					<input class="btn inverse small" type="password" name="pwd" placeholder="Contraseña">
	            					<input class="btn primary small center" value="Acceder"></a>
	            				</form>
	            			</div>
	            		</div>
			          </div> 		
            	</div>
            </header>
            <!-- header-->     
        </div>     
        <div class="row">    				
					<nav class="clearfix">
					    <ul>
					        <li><a class="btn inverse" href="artist_view.php">My Veery</a></li>
					        <li class="active"><a class="btn inverse active" href="index.php">Just For You</a></li>
					        <li><a class="btn inverse" href="genero_view.php">Trending</a></li>
					    </ul>
					    <a href="#" id="pull">Just For You</a>
					</nav>
				</div>	
				<div class="row">
					<div class="col col-10">
						<!-- row for title -->
						<div class="row">
							<div class="col col-8 col-offset-2">
								<div class="col col-10 col-offset-1">
									<h1> Registro </h1>
								</div>
							</div>
						</div>
						<!-- ./ row -->

						<!-- row form -->
						<div class="row">
							<div class="col col-8 col-offset-2">
								<div class="module form-module">
									<!-- Formulario de registro -->
									<form action="algo_que_procesa_el_formulario.php" method="post" enctype="multipart/form-data">
										<!-- row Nombre usuario -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Nombre:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="text" name="nombre" required>
											</div>
										</div>
										<!-- ./ row Nombre usuario -->
										<!-- row Apellidos -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Apellidos:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="text" name="apellidos" required>
											</div>
										</div>
										<!-- ./ row Apellidos -->
										<!-- row Sexo -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Sexo</label>
											</div>
											<div class="col col-6">
												<select name="sexo">
												  <option value="hombre">Hombre</option>
												  <option value="mujer">Mujer</option>
												</select>
											</div>
										</div>
										<!-- ./ row Sexo -->
										<!-- row Fecha nacimiento -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Fecha de nacimiento:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="date" name="bday" required>
											</div>
										</div>
										<!-- ./ row Fecha nacimiento -->
										<!-- row Email -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Email:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="email" name="email" placeholder="example@veery.com" required>
											</div>
										</div>
										<!-- ./ row Email -->
										<!-- row Password -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Contraseña:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="password" name="pwd" required onchange="form.contrasena2.pattern = this.value;">
												<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
											</div>
										</div>
										<!-- ./ row Password -->
										<!-- row Repeat password -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Confirmar contraseña:</label>
											</div>
											<div class="col col-6">
												<input class="float-left" type="password" name="rpwd" required onchange="form.contrasena2.pattern = this.value;">
												<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
											</div>
										</div>
										<!-- ./ row Repeat password -->
										<!-- row Cuenta artista -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">Deseo una cuenta de tipo artista: </label>
											</div>
											<div class="col col-6">
												<input type="checkbox" name="artista" value="artista">
											</div>
										</div>
										<!-- ./ row Cuenta artista -->
										<!-- row T&C -->
										<div class="row">
											<div class="col col-6">
												<label class="float-right">He leído y acepto los términos y condiciones de uso: </label>
											</div>
											<div class="col col-6">
												<input type="checkbox" name="condiciones" value="condiciones" required>
											</div>
										</div>
										<!-- ./ row T&C -->
										<!-- row Submit -->
										<div class="row">
											<div class="col col-6 col-offset-6">
												<input class="btn primary float-left" type="submit" name="registrar" value="Registrar">
											</div>
										</div>
										<!-- ./ row Submit -->
									</div>
									<!-- ./ form -->
								</div>
								<!-- ./ module -->
							</div>
							<!-- ./ col col-8 col-offset-2 -->
						</div>
						<!-- ./ row form -->						
					</div>
					<!-- ./ row col-col-10 -->
	<?php
	include_once('includes/right-sidebar.php');
	?>
</div>
	
<?php
	include_once('includes/footer.php');
?>