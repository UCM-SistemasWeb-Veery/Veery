<?php
include_once('includes/header.php');
?>
<div class="row">
	<div class="col col-10">
		<div class="row">
			<form id="formulario">
				<fieldset>
					<legend>Editar información</legend>
					<div class="row">
						<div class="col col-offset-1">
							<p>Nombre:</p>
							<input type="text" name="nombre" id="nombre" value="JAY_Z" class="formulario">
						</div>
					</div>
					<div class="row">
						<div class="col col-offset-1">
							<p>Información:</p>
							<textarea rows="8" cols="50">
								Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
							más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
							empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
							artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente.
							</textarea>
						</div>
					</div>
					<div class="row">
						<div class="col col-offset-1">
							<p>Foto:</p>
							<input type="file" name="archivo_foto">
						</div>
					</div>

					<div class="row">
						<div class="col col-4 col-offset-1">
							<button class="col" type="button">Guardar cambios</button>
							<button class="col" type="button">Cancelar</button>
						</div>
					</div>

					<div class="row">
						<div class="col col-4 col-offset-9">
							<button class="col" type="button"><a href="art_baja.php">Cancelar cuenta</a></button>
						</div>
					</div>
				</fieldset>
				
			</form>
		</div>
		<div class="row">
			<p>Solo debes de cambiar los datos que creas necesarios,cualquier dato que dejes en blanco o sin
				modificar,se quedará en su estado actual.</p>
			</div>
		</div>
		<?php
		include_once('includes/right-sidebar.php');
		?>
	</div>
	
	<?php
	include_once('includes/footer.php');
	?>
