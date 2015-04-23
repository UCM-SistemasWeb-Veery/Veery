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
								<p class="center">Imagen</p>
							</div>	
							<div class ="col col-2" >
								<p class="center">Nombre Usuario</p>
							</div>	
							<div class="col col-2">
								<div class="row center"><p class="center">Fecha</p></div>
								<div class="row center"><p class="center">Genero (H/M)</p></div>
							</div>
							<div class="col col-4">
								<div class="row center"><p class="center">Email</p></div>
								<div class="row center"><p class="center">Contraseña</p></div>
							</div>
							<div class ="col col-2">
								<p>Utilidades</p>
							</div>	
						</div></p>
						<div class = "row module">
							<p>
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/user.jpg" class="col col-12">
								</div>	
								<div class ="col col-2">
									<p>Joselito Martinez</p>
								</div>	
								<div class="col col-2">
									<div class="row center"><p>15/3/1993</p></div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center"><p>emailprueba@email.com</p></div>
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
											mensaje/ticket
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
									<p>Joselito Martinez</p>
								</div>	
								<div class="col col-2">
									<div class="row center"><p>15/3/1993</p></div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center"><p>emailprueba@email.com</p></div>
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
											mensaje/ticket
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
									<p>Joselito Martinez</p>
								</div>	
								<div class="col col-2">
									<div class="row center"><p>15/3/1993</p></div>
									<div class="row center"><p>M</p></div>
								</div>
								<div class="col col-4">
									<div class="row center"><p>emailprueba@email.com</p></div>
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
											mensaje/ticket
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
