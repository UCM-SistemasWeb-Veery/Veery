<?php
include('sql/motor.php');
?>
<?php
	include_once('includes/header.php');
?>
<div class="row">
	<div class="col col-10">
		<!-- row for title -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<div class="col col-10 col-offset-1">
					<h1> Registro </h1>
				</div>
			</div>
		</div>
		<!-- ./ row -->

		<!-- row form -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<div class="module form-module">
					<!-- Formulario de registro -->
					<form  action="procesar_registro.php" method="post" enctype="multipart/form-data">
						<!-- row Nombre usuario -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Nombre:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="nombre" required>
							</div>
						</div>
						<!-- ./ row Nombre usuario -->
						<!-- row Apellidos -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Apellidos:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="apellidos" required>
							</div>
						</div>
						<!-- ./ row Apellidos -->
						<!-- row Sexo -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Sexo</label>
							</div>
							<div class="col col-6">
								<select name="sexo">
								  <option value="hombre">Hombre</option>
								  <option value="mujer">Mujer</option>
								</select>
							</div>
						</div>
						<!-- ./ row Sexo -->
						<!-- row Fecha nacimiento -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Fecha de nacimiento:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="date" name="bday" required>
							</div>
						</div>
						<!-- ./ row Fecha nacimiento -->
						<!-- row Email -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Email:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="email" name="email" placeholder="example@veery.com" required>
							</div>
						</div>
						<!-- ./ row Email -->
						<!-- row Password -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Contraseña:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="password" name="pwd" required onchange="form.contrasena2.pattern = this.value;">
								<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
							</div>
						</div>
						<!-- ./ row Password -->
						<!-- row Repeat password -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Confirmar contraseña:</label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="password" name="rpwd" required onchange="form.contrasena2.pattern = this.value;">
								<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" esto es para que meta diferentes elementos, letra, numero-->
							</div>
						</div>
						<!-- ./ row Repeat password -->
						<!-- row Cuenta artista -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">Tipo de cuenta (user o art): </label>
							</div>
							<div class="col col-6">
								<input class="float-left" type="text" name="tipo" required>
							</div>
						</div>
						<!-- ./ row Cuenta artista -->
						<!-- row T&C -->
						<div class="row">
							<div class="col col-6">
								<label class="float-right">He leído y acepto los términos y condiciones de uso: </label>
							</div>
							<div class="col col-6">
								<input type="checkbox" name="condiciones" value="condiciones" required>
							</div>
						</div>
						<!-- ./ row T&C -->
						<!-- row Submit -->
						<div class="row">
							<div class="col col-6 col-offset-6">
								<input class="btn primary float-left" method="post" type="submit" name="registrar" value="Registrar">
							</div>
						</div>
						<!-- ./ row Submit -->
					</div>
					<!-- ./ form -->
				</div>
				<!-- ./ module -->
			</div>
			<!-- ./ col col-8 col-offset-2 -->
		</div>
		<!-- ./ row form -->						
	</div>
	<!-- ./ row col-col-10 -->
	<?php
	include_once('includes/right-sidebar.php');
	?>
</div>
	
<?php
	include_once('includes/footer.php');
?>