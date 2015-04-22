<?php
	include_once('includes/header.php');
?>

		<div class="row">
			<div class="col col-10 col-offset-1">			
				<h1>Bienvenido al panel de administración</h1>
				<div class="row">
					<div class="col col-10 ">
						<h2>Gráfico sobre el numero de entradas a la página al año</h2>
						<dl class ="graph col-12 module col-push-1">
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
					<h2>Visitas segun región</h2>
					<img class = "col col-12 module-panel img" alt = "Mapa del mundo" src="../img/Real-Time-Visitor-Map.png">
				</div>
				
			</div>
		</div>
	
<?php
	include_once('includes/footer.php');
?>