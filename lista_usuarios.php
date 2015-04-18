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
				<div class = "row">
					<form action="lista_usuarios.php" method="get">
						<input type="text" name="q" class = "input col col-8 center" value= ""/>
						<input type="submit" name="buscar" value="buscar" class="col col-2 btn left" />
					</form>
				</div>
				<div class = "row">
					<div class = "col col-12">
						<div class = "row">
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
								<div class="row center"><p>Contrasena</p></div>
							</div>
							<div class ="col col-2">
								Utilidades
							</div>	
						</div>
						<div class = "row">
							<fieldset>
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
										<a type="btn" class = "col col-12 btn">
											eliminar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-12 btn">
											mensaje
										</a>
									</div>
								</div>	
							</fieldset>
						</div>
						<div class = "row">
							<fieldset>
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
										<a type="btn" class = "col col-12 btn">
											eliminar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-12 btn">
											mensaje
										</a>
									</div>
								</div>	
							</fieldset>
						</div>
						<div class = "row">
							<fieldset>
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
										<a type="btn" class = "col col-12 btn">
											eliminar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-12 btn">
											mensaje
										</a>
									</div>
								</div>	
							</fieldset>
						</div>
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