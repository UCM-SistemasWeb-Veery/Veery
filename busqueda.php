<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div class="col col-10">
				<div class = "row">
					<div class="col col-8 col-offset-2">
						<form action="busqueda.php" method="get">
							<input type="text" name="q" class = "btn inverse col-9" placeholder= "Introduzca una canción video o artista"/>
							<input type="submit" name="buscar" value="buscar" class="col col-2 col-push-2 btn alternate" />
						</form>
					</div>
				</div>
				<div class = "row">
					<div class = "col col-10 col-push-1 module">
							<div class = "row">
								<div class ="artwork col col-2">
									<img src="<?php echo PATH; ?>/img/the_blueprint.jpg" class="col col-11 module">
								</div>	
								<div class ="col col-3">
									<p><a href ="reproduccion.php" class = "btn inverse">Jigga that nigga</a></p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php" class = "btn inverse">The blueprint
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php" class = "btn inverse">
										Jay Z
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-play"></span>
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-plus"></span>
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
									<p><a href ="reproduccion.php" class = "btn inverse">Song Cry</a></p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php" class = "btn inverse">The blueprint
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php" class = "btn inverse">
										Jay Z
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-play"></span>
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-plus"></span>
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
									<p><a href ="reproduccion.php" class = "btn inverse">Encore</a></p>
								</div>	
								<div class="col col-3">
									<p><a href ="album_view.php" class = "btn inverse">THe Grey Album
									</a></p>
								</div>
								<div class="col col-2">
									<p><a href="artist_view.php" class = "btn inverse">
										<span class	="center">Jay Z </span>
									</a></p>
								</div>
								<div class ="col col-2">
									<p><div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-play"></span>
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn inverse"><span class="fa fa-plus"></span>
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
