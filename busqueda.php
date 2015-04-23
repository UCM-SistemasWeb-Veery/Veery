<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div class="col col-10">
				<div class = "row">
					<form action="busqueda.php" method="get">
						<input type="text" name="q" class = "input col col-5 col-push-2 form-module" placeholder= "Introduzca una canción video o artista"/>
						<input type="submit" name="buscar" value="buscar" class="col col-2 col-push-2 btn inverse left" />
					</form>
				</div>
				<div class = "row">
					<div class = "col col-10 col-push-1 module-panel">
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/the_blueprint.jpg" class="col col-11 module">
								</div>	
								<div class ="col col-3">
									<p>Jigga that nigga</p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php">The blueprint
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php">
										Jay Z
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											añadir
										</a>
									</div></p>
								</div>	
							</div>
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/the_blueprint.jpg" class="col col-11 module">
								</div>	
								<div class ="col col-3">
									<p>Song Cry</p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php">The blueprint
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php">
										Jay Z
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											añadir
										</a>
									</div></p>
								</div>	
							</div>
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/album1.jpg" class="col col-11 module">
								</div>	
								<div class ="col col-3">
									<p>Encore</p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php">THe Grey Album
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php">
										<span class	="center">Jay Z </span>
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse">
											añadir
										</a>
									</div></p>
								</div>	
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
