<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div class="col col-10">
				<div class="row">
					<form id="formulario">
						<fieldset>
							<legend>Baja artista</legend>
								<div class="row">
									<div class="col col-offset-1">
										¿Deseas darte de baja?
										<select name="Confirmación" value="No">
										  <option value="si">Si</option>
										  <option value="no">No</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col col-offset-1">
										Motivo de baja:
										<input class="col col-12" type="text" name="información" id="información" class="formulario">
									</div>
								</div>
								<div class="row">
									<div class="col col-4 col-offset-1">
										<button class="col">Modificar</button>
										<button class="col">Cancelar</button>
									</div>
								</div>
						</fieldset>
					</form>
				</div>
			</div>
			<?php
				include_once('includes/right-sidebar.php');
			?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
