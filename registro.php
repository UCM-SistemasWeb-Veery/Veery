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
				<form action="#" >
					<div class="row">
						<div class="col col-6">
							<div class="row">
									Nombre:
								<input type="text" name="nombre" required>
							</div>
							<div class="row">
									<br>
									Apellidos:
								<input type="text" name="apellidos"required>
							</div>
							<div class="row"><br>
								<input type="radio" name="genero" value="H" checked class=" float-left">
								<label class="float-left">Hombre</label>
								<br><br>
								<input type="radio" name="genero" value="F" class="float-left">
								<label class="float-left">Mujer</label>
							</div>
							<div class="row col-push-2">
								<br><label> Fecha de nacimiento</label>
								<input type="date" name="bday">
							</div>
						</div>
						<div class="col col-6">
							<div class="row">
								<input type="checkbox" name="artista" value="artista">Haz click si desea una cuenta de tipo artista
							</div>
							<div class="row">
								<br>Email:
								<input type="email" name="email" required><br>
							</div>
							<div class="row">
								<br>Nueva contraseña:
								<input type="password" name="contrasena" required  onchange="form.contrasena2.pattern = this.value;" >
								<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
							</div>
							<div class="row">
								<br>Repita contraseña:
								<input type="password" name="contrasena2" required >
							</div>
							<div class="row">
								<input type="checkbox" name="condiciones" value="condiciones" required><br>Haz click para aceptar los términos y condiciones de uso<br>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-12 col-push-9">
							<input type="submit" value="Registrar" class="btn">
						</div>
					</div>
				</form>
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
