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
								<legend><h3>Empezar un ensayo en directo</h3></legend>
								<div>
									<div class="col col-6">
										<label class="float-right">Nombre de la emisión:</label> 
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_emision" value="Enayo en Paraninfo UCM"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Ubicación:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="ubicacion" value="Madrid"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Participantes:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="participantes" value="Green Cold Chilli Peppers & Jay-Ñ"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Hora estimada de finalización:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="hora_fin" value="21:45"></input>
									</div>
								</div>
								<div>
									<div class="col col-6">
										<label class="float-right">Género:</label>
									</div>
									<div class="col col-6">
										<select class="float-left" name="genero">
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
										<label class="float-right">Descripción:</label>
									</div>
									<div class="col col-6">
										<textarea class="float-left" name="nombre" rows="4" cols="40" >Escribe aquí tu comentario</textarea>
									</div>
								</div>
								
								<div>
									<!--Previsualización:-->
									<!-- Poner en la css del image el max width etc. y luego meterlo en un container -->
									<iframe src="https://www.youtube.com/embed/D2YIbo-uwhk" width="640" height="480"></iframe>
								</div>
								<div>
									<div class="col col-12">
										<input class="btn btn-lg btn-orange float-right" type="submit" name="enviar" value="EMPEZAR"/>
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