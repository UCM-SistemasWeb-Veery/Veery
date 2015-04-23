<?php
	include_once('includes/header.php');
?>

		<div class="row">
			<div class="col col-10">
				<div class = "row">
					<form action="lista_usuarios.php" method="get">
						<input type="text" name="q" class = "input col col-6 col-push-2 form-module" placeholder= "Introduzca usuario"/>
						<input type="submit" name="buscar" value="buscar" class="col col-2 btn primary col-push-2" />
					</form>
				</div>
				<div class = "row">
					<div class = "col col-10 col-push-1">
						<p><div class = "row module-content">
							<div class ="col col-2">
								Imagen
							</div>	
							<div class ="col col-2" >
								Nombre Usuario
							</div>	
							<div class="col col-2">
								<div class="row center">Fecha</div>
								<div class="row center"><p>Genero (H/M)</p></div>
							</div>
							<div class="col col-4">
								<div class="row center">Email</div>
								<div class="row center"><p>Contraseña</p></div>
							</div>
							<div class ="col col-2">
								Utilidades
							</div>	
						</div></p>
						<div class = "row module">
							<p>
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/user.jpg" class="col col-12">
								</div>	
								<div class ="col col-2">
									Joselito Martinez
								</div>	
								<div class="col col-2">
									<div class="row center">15/3/1993</div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center">emailprueba@email.com</div>
									<div class="row center"><p>*******</p></div>
								</div>
								<div class ="col col-2">
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											eliminar
										</a></p>
									</div>
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											mensaje
										</a></p>
									</div>
								</div>	
							</p>
						</div>
						<div class = "row module">
							<p>
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/user.jpg" class="col col-12">
								</div>	
								<div class ="col col-2">
									Joselito Martinez
								</div>	
								<div class="col col-2">
									<div class="row center">15/3/1993</div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center">emailprueba@email.com</div>
									<div class="row center"><p>*******</p></div>
								</div>
								<div class ="col col-2">
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											eliminar
										</a></p>
									</div>
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											mensaje
										</a></p>
									</div>
								</div>	
							</p>
						</div>
						<div class = "row module">
							<p>
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/user.jpg" class="col col-12">
								</div>	
								<div class ="col col-2">
									Joselito Martinez
								</div>	
								<div class="col col-2">
									<div class="row center">15/3/1993</div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center">emailprueba@email.com</div>
									<div class="row center"><p>*******</p></div>
								</div>
								<div class ="col col-2">
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											eliminar
										</a></p>
									</div>
									<div class="row">
										<p><a type="btn" class = "col col-12 btn inverse">
											mensaje
										</a></p>
									</div>
								</div>	
							</p>
						</div>
					</div>
				</div>
			</div>
			
				<?php
					include_once('includes/right-sidebar.php');
				?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
