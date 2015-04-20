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
					<!-- div: col col-12 -->
					<div class="col col-12">
						<!-- Formulario con información sobre el archivo -->
						<form action="algo_que_procesa_el_formulario.php" method="post" enctype="multipart/form-data">
							<fieldset>
								<legend><h3>Subir una canción</h3></legend>
								<!-- row Nombre canción -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Nombre de la canción:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_cancion" value="Gasolina">
									</div>
								</div>
								<!-- ./ row Nombre canción -->
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
										<label class="float-right">Nombre del artista:</lable>
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
								<!-- row Explicit content -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Contenido explítico:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" name="explicit" type="checkbox" value="off" checked="checked">
									</div>
								</div>
								<!-- ./ row Explicit content -->
								<!-- row Subir archivo -->
								<div class="row">
									<div class="col col-6 col-offset-6">
										<input class="btn float-left" type="submit" name="subir_archivo" value="SUBIR">
									</div>
								</div>
								<!-- ./ row Subir archivo -->
							</fieldset>
						</form>
						<!-- ./ Formulario con información sobre el archivo -->
					</div>
					<!-- ./ div: col col-12 -->																
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