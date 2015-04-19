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
								<legend><h3>Empezar un ensayo en directo</h3></legend>
								<!-- row Nombre emisión -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Nombre de la emisión:</label> 
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="nombre_ensayo" value="Enayo en Paraninfo UCM">
									</div>
								</div>
								<!-- ./ row Nombre emisión -->
								<!-- row Ubicación -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Ubicación:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="ubicacion" value="Madrid">
									</div>
								</div>
								<!-- ./ row Ubicación -->
								<!-- row Participantes -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Participantes:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="participantes" value="Red Hot Chili Peppers">
									</div>
								</div>
								<!-- ./ row Participantes -->
								<!-- row Hora finalización -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Hora estimada de finalización:</label>
									</div>
									<div class="col col-6">
										<input class="float-left" type="text" name="hora_fin" value="21:45">
									</div>
								</div>
								<!-- ./ row Hora finalización -->
								<!-- row Género -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Género:</label>
									</div>
									<div class="col col-6">
										<select name="genero">
										  <option value="Rock" selected>Rock</option>
										  <option value="Pop">Pop</option>
										  <option value="Hip-Hop">Hip-Hop</option>
										  <option value="Reggaeton">Reggaeton</option>
										  <option value="Clásica">Clásica</option>
										  <option value="Folk">Folk</option>
										</select>
									</div>
								</div>
								<!-- ./ row Género-->
								<!-- row Descripción -->
								<div class="row">
									<div class="col col-6">
										<label class="float-right">Descripción:</label>
									</div>
									<div class="col col-6">
										<textarea class="float-left" name="descripcion">Escribe aquí tu comentario</textarea>
									</div>
								</div>
								<!-- ./ row Descripción -->
								<!-- row Previsualización -->
								<div class="row">
									<div class="col col-12">
										<div class="videoWrapper">
											<iframe src="https://www.youtube.com/embed/D2YIbo-uwhk" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
								<!-- ./ row Previsualización -->
								<!-- row Empezar emisión -->
								<div class="row">
									<div class="col col-12">
										<input class="btn float-right" type="submit" name="empezar_emision" value="EMPEZAR">
									</div>
								</div>
								<!-- ./ row Empezar emisión -->
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