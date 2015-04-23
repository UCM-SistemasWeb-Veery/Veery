<?php
	include_once('includes/header.php');
?>

		<div class="row">
			<div class="col col-10">
				<form action="#" >
					<div class="row">
						<div class="col col-7 col-push-4">
							<div class="row">
									<p>Nombre:
								<input type="text" name="nombre" required></p>
							</div>
							<div class="row">
									<p>Apellidos:
								<input type="text" name="apellidos"required></p>
							</div>
							<div class="row">
								<p><input type="radio" name="genero" value="H" checked class=" float-left">
								<label class="float-left">H</label>
								<input type="radio" name="genero" value="F" class="center">
								<label class="center">M</label></p>
							</div>
							<div class="row col-push-2">
								<p> Fecha de nacimiento
								<input type="date" name="bday"></p>
							</div>
						
							<div class="row">
								<p>Email:
								<input type="email" name="email" required></p>
							</div>
							<div class="row">
								<p>Nueva contraseña:
								<input type="password" name="contrasena" required  onchange="form.contrasena2.pattern = this.value;" ></p>
								<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
							</div>
							<div class="row">
								<p>Repita contraseña:
								<input type="password" name="contrasena2" required ></p>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col col-8 col-push-3">
							<div class="row">
									<p><input type="checkbox" name="artista" value="artista">Haz click si desea una cuenta de tipo artista </p>
							</div>
							<div class="row">
									<p><input type="checkbox" name="condiciones" value="condiciones" required>Haz click para aceptar los términos y condiciones de uso</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-12 col-push-7">
							<p><input type="submit" value="Registrar" class="btn primary"></p>
						</div>
					</div>
				</form>
			</div>
			
				<?php
					include_once('includes/right-sidebar.php');
				?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
