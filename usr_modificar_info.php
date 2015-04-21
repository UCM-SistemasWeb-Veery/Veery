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
										Nombre:
										<input type="text" name="nombre" id="nombre" value="John Doe" class="formulario">
									</div>
								</div>
								<div class="row">
									<div class="col col-offset-1">
										Email:
										<input type="text" name="email"/>
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
				<?php
					include_once('includes/right-sidebar.php');
				?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
