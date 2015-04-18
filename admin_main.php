<?php
	include_once('includes/header.php');
?>
<link href="<?php echo PATH; ?> /css/admin.css" rel="stylesheet" type="text/css">

		<div class="row">
			<div id="right-sidebar" class="col col-2">
				<?php
					include_once('includes/left_sidebar.php');
				?>
			</div>

			<div id="content-handler" class="col col-7">
				<div class = "row">
					<a type="btn" class = "col col-2 btn">
						aprobar comentario
					</a>
				
					<a type="btn" class = "col col-3 btn">
						aprobar video/cancion
					</a>
					
					<a type="btn" class = "col col-2 btn">
						nuevo ticket
					</a>
					<a type="btn" class = "col col-2 btn" href="lista_usuarios.php">
						Lista Usuarios
					</a>
				</div>
				
				<div class="row">
					<div clas = "col col-12">
						<h1>Grafico sobre el numero de entradas a la pagina al año</h1>
						<dl  class ="graph">
							<dt>2008</dt>
							<dd><div id="data-one" class="bar">60,000</div></dd>
							<dt>2009</dt>
							<dd><div id="data-two" class="bar" >80.000</div></dd>
							<dt>2010</dt>
							<dd><div id="data-three" class="bar" >640.000</div></dd>
							<dt>2011</dt>
							<dd><div id="data-four" class="bar" >9.700</div></dd>
							</dl>	
					</div>	
				</div>
				<div class = "row">
					<h1>Visitas segun region</h1>
					<img class = "col col-12" alt = "Mapa del mundo" src="<?php echo PATH; ?>/img/Real-Time-Visitor-Map.png">
				</div>
				
			</div>
			
			<div id="left-sidebar" class="col col-3">
				<?php
					include_once('includes/right_sidebar.php');
				?>
			</div>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
