<?php
	include_once('includes/header.php');
?>
<div class="row">
	<div class="col col-10">
		<div class="row">
			<!-- row for title -->
				<div class="row">
				<!-- col -->
				<div class="col col-8 col-offset-2">
						<h1> Cancelar cuenta artista</h1>
				</div>
			<!-- ./ col -->
			</div>
		</div>
		<!-- ./ row -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<div class="module form-module">	
								<div class="row">
									<div class="col col-offset-1">
										<p>¿Deseas darte de baja?</p>
										<select name="Confirmación" value="No">
										  <option value="si">Si</option>
										  <option value="no">No</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col col-offset-1">
										<p>Motivo de baja</p>
										<textarea rows="8" cols="50">
										</textarea>
									</div>
								</div>
								<div class="row">
									<div class="col col-3 col-offset-2">
										<input class="btn primary" type="submit" name="Aceptar" value="Aceptar">
									</div>
									<div class="col col-3 col-offset-1">
										<a href="art_modificar_info.php" class="btn primary">Cancelar</a>
									</div>
								</div>
				</div>
			<!-- ./ col col-8 col-offset-2 -->																
			</div>
		<!-- ./ row form -->				
		</div>
		<!-- ./ row col-col-10 -->
	</div>
	<?php
	include_once('includes/right-sidebar.php');
	?>	
</div>
	
<?php
	include_once('includes/footer.php');
?>
