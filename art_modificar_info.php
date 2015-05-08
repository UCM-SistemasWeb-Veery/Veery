<?php
include_once('includes/header.php');
?>
<div class="row">
	<div class="col col-10">
			<div class="row">
				<!-- row for title -->
				<div class="row">
					<!-- col -->
					<div class="col col-10 col-offset-1">
						<div class="center">
							<h1> Modificar información artista</h1>
						</div>
					</div>
					<!-- ./ col -->
				</div>
			<!-- ./ row -->
			<div class="row">
				<div class="col col-8 col-offset-2">
					<div class="module form-module">
						<form action="algo_que_procesa_el_formulario.php" method="post" enctype="multipart/form-data" >
						<!-- row Seleccionar archivo -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Nombre:</label>
							</div>
							<div class="col col-6">
								<input type="text" name="nombre" id="nombre" value="JAY_Z" class="formulario">
							</div>
						</div>
						<!-- ./ row Seleccionar archivo -->
						<!-- row Nombre álbum -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Información:</label>
							</div>
							<div class="col col-6">
								<textarea id="informacion" class="col col-12">
									Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
								más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
								empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
								artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente.
								</textarea>
							</div>
						</div>
						<!-- ./ row Nombre álbum -->
						<!-- row Portada álbum -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Foto:</label>
							</div>
							<div class="col col-6">
								<input type="file" name="archivo_foto">
							</div>
						</div>
						<!-- ./ row Portada álbum -->
						<!-- row Nombre artista -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Email:</lable>
							</div>
							<div class="col col-6">
								<input type="text" name="email"/>
							</div>
						</div>
						<!-- ./ row Nombre artista -->
						<!-- row Subir archivo -->
						<div class="row">
							<div class="col col-4">
								<input class="btn primary" type="submit" name="guardar_cambios" value="Cancelar">
							</div>
							<div class="col col-4 col-offset-4">
								<input id="cancelar" class="btn primary" type="submit" name="cancelar" value="Guardar">
							</div>
							<div class="col col-4 col-offset-8">
								<a href="art_baja.php" class="btn inverse">Cancelar cuenta</a>
							</div>
						</div>
						<!-- ./ row Subir archivo -->

						</form>
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
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
		$('.form-module').submit(function(e){
			e.preventDefault();
		});
	</script>
<?php
	include_once('includes/footer.php');
?>
