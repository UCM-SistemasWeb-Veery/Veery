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
						<div class="module center">
							<h1> Modificar información artista</h1>
						</div>
					</div>
					<!-- ./ col -->
				</div>
			<!-- ./ row -->
			<div class="row">
				<div class="col col-8 col-offset-2">
					<div class="module form-module">
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
							<div class="col col-offset-1">
								Email:
								<input type="text" name="email"/>
							</div>
						</div>
						<div class="row">
							<div class="col col-3 col-offset-2">
								<input class="btn primary" type="submit" name="guardar_cambios" value="Guardar cambios">
							</div>
							<div class="col col-3 col-offset-1">
								<input class="btn primary " type="submit" name="Cancelar" value="Cancelar">
							</div>
						</div>

						<div class="row">
							<div class="col col-4 col-offset-8">
								<input class="btn inverse " type="submit" name="Cancelar_cuenta" value="Cancelar cuenta">
							</div>
						</div>
					</div>
						<!-- ./ col col-8 col-offset-2 -->																
				</div>
				<!-- ./ row form -->				
			</div>
			<!-- ./ row col-col-10 -->
		
		</div>
			<div class="row">
					<!-- col -->
					<div class="col col-8 col-offset-2">
						<p>Solo debes de cambiar los datos que creas necesarios,cualquier dato que dejes en blanco o sin
						modificar,se quedará en su estado actual.</p>
					</div>
					<!-- ./ col -->
			</div>
			
	</div>
		<?php
		include_once('includes/right-sidebar.php');
		?>
</div>
	
<?php
	include_once('includes/footer.php');
?>
