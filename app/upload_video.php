<?php
	include_once('includes/header.php');
?>
<div class="row">
	<div class="col col-10">
		<!-- row for title -->
		<div class="row">
			<!--  col -->
			<div class="col col-8 col-offset-2">
				<div class="col col-10 col-offset-1">
					<h1>Subir un video</h1>
				</div>
			</div>
			<!-- ./ col -->
		</div>
		<!-- ./ row for title -->

		<!-- row for form -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<div class="module form-module">
					<!-- Formulario con información sobre el archivo -->
					<form action="algo_que_procesa_el_formulario.php" method="post" enctype="multipart/form-data">
						<!-- row Nombre video -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Nombre del video:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="nombre_video" value="Gasolina">
							</div>
						</div>
						<!-- ./ row Nombre video -->
						<!-- row Seleccionar archivo -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Seleccionar archivo:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="file" name="archivo">
							</div>
						</div>
						<!-- ./ row Seleccionar archivo -->
						<!-- row Nombre álbum -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Nombre del álbum:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="nombre_album" value="Barrio Fino">
							</div>
						</div>
						<!-- ./ row Nombre álbum -->
						<!-- row Portada álbum -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Portada del álbum:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="file" name="img_album">
							</div>
						</div>
						<!-- ./ row Portada álbum -->
						<!-- row Nombre artista -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Nombre del artista:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="nombre_artista" value="Daddy Yankee">
							</div>
						</div>
						<!-- ./ row Nombre artista -->
						<!-- row Duración -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Duración:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="duracion" value="3:13">
							</div>
						</div>
						<!-- ./ row Duración -->
						<!-- row Género -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Género:</label>
							</div>
							<div class="col col-6">
								<select name="genero">
								  <option value="Rock">Rock</option>
								  <option value="Pop">Pop</option>
								  <option value="Hip-Hop">Hip-Hop</option>
								  <option value="Reggaeton" selected>Reggaeton</option>
								  <option value="Clásica">Clásica</option>
								  <option value="Folk">Folk</option>
								</select>
							</div>
						</div>
						<!-- ./ row Género -->
						<!-- row Explicit -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Contenido explítico:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" name="explicit" type="checkbox" value="off" checked="checked">
							</div>
						</div>
						<!-- ./ row Explicit -->
						<!-- row Subir video -->
						<div class="row">
							<div class="col col-6">
								<a href="artista_main.php" class="btn primary float-right center">Cancelar</a>
							</div>
							<div class="col col-6">
								<input class="btn primary float-left" type="submit" name="subir_archivo" value="Subir">
							</div>
						</div>
						<!-- ./ row Subir video -->
					</form>
					<!-- ./ Formulario con información sobre el archivo -->
				</div>
				<!-- ./ module -->															
			</div>
			<!-- ./ col col-8 col-offset-2 -->				
		</div>
		<!-- ./ row -->
	</div>
	<!-- ./ col col-10 -->	
	<?php
	include_once('includes/right-sidebar.php');
	?>
</div>
	
<?php
	include_once('includes/footer.php');
?>