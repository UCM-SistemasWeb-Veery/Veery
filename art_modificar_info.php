<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div id="right-sidebar" class="col col-2">
				<?php
					include_once('includes/left_sidebar.php');
				?>
			</div>

			<div id="content-handler" class="col col-7">
				<div class="row">
					<form id="formulario">
						<fieldset>
							<legend>Editar información</legend>
								<div class="row">
									<div class="col col-offset-1">
										Nombre:
										<input type="text" name="nombre" id="nombre" value="JAY_Z" class="formulario">
									</div>
								</div>
								<div class="row">
									<div class="col col-offset-1">
										Información:
										<input class="col col-12" type="text" name="información" id="información" value="Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
										más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
										empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
										artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, 
										poseyendo un patrimonio neto de más de $500 millones en 2012." class="formulario">
									</div>
								</div>
								<div class="row">
									<div class="col col-offset-1">
										Foto:
										<input type="file" name="archivo_foto"/>
									</div>
								</div>
								<div class="row">
									<div class="col col-4 col-offset-1">
										<button class="col">Guardar cambios</button>
										<button class="col">Cancelar</button>
									</div>
								</div>
								<div class="row">
									<div class="col col-4 col-offset-9">
										<button class="col"><a href="art_baja.php">Cancelar cuenta</a></button>
									</div>
								</div>
						</fieldset>
					</form>
				</div>
				<div class="row">
					<b><p>Solo debes de cambiar los datos que creas necesarios,cualquier dato que dejes en blanco o sin
						modificar,se quedará en su estado actual.</b></p>
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
