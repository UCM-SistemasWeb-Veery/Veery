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
					<div class="col col-12">
						<!-- Formulario con información sobre el archivo -->
						<form action="algo_que_procesa_el_formulario.php" method="post" enctype="multipart/form-data">
							<fieldset>
								<legend><h3>Subir un video</h3></legend>
								<div>
							<div>
									<div class="col col-6">
										<label class="float-right">Seleccionar archivo:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="file" name="archivo"/>
									</d				<div class="col col-6">
										<label class="float-right">Nombre del video:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_cancion" value="Gasolina" size="20"></input>
									</div>
								</div>
						iv>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Nombre del álbum:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_cancion" value="Barrio Fino" size="20"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Portada del álbum:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="file" name="img_album"/>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Nombre del artista:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_cancion" value="Daddy Yankee" size="20"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Duración:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_cancion" value="3:13" size="6"></input>
									</div>
								</div>
								<div>
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
								<div>
									<div class="col col-6">
										<label class="float-right">Contenido explítico:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" name="explicit" type="checkbox" value="off" checked="checked"/>
									</div>
								</div>
								<div>
									<div class="col col-6">
									</div>
									<div class="col col-6">
										<input class="btn btn-lg btn-orange float-left" type="submit" name="enviar" value="SUBIR"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>																
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