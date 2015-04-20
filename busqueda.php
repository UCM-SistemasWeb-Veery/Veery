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
					<form action="busqueda.php" method="get">
						<input type="text" name="q" class = "input col col-7 center" value= ""/>
						<select name="busqueda" class="btn">
							<option>Canción</option>
							<option>Video</option>
							<option>Artista</option>
						</select>
						<input type="submit" name="buscar" value="buscar" class="col col-2 btn left" />
					</form>
				</div>
				<div class = "row">
					<div class = "col col-12">
						<fieldset>
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/the_blueprint.jpg" class="col col-12">
								</div>	
								<div class ="col col-3">
									Jigga that nigga
								</div>	
								<div class="col col-3">
									<a href ="album_view.php">The blueprint
									</a>
								</div>
								<div class="col col-2">
									<a href="artist_view.php">
										Jay Z
									</a>
								</div>
								<div class ="col col-2">
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											añadir
										</a>
									</div>
								</div>	
							</div>
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/the_blueprint.jpg" class="col col-12">
								</div>	
								<div class ="col col-3">
									Song Cry
								</div>	
								<div class="col col-3">
									<a href ="album_view.php">The blueprint
									</a>
								</div>
								<div class="col col-2">
									<a href="artist_view.php">
										Jay Z
									</a>
								</div>
								<div class ="col col-2">
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											añadir
										</a>
									</div>
								</div>	
							</div>
							<div class = "row">
								<div class ="col col-2">
									<img src="<?php echo PATH; ?>/img/album1.jpg" class="col col-12">
								</div>	
								<div class ="col col-3">
									Encore
								</div>	
								<div class="col col-3">
									<a href ="album_view.php">THe Grey Album
									</a>
								</div>
								<div class="col col-2">
									<a href="artist_view.php">
										Jay Z
									</a>
								</div>
								<div class ="col col-2">
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											escuchar
										</a>
									</div>
									<div class="row">
										<a type="btn" class = "col col-10 btn">
											añadir
										</a>
									</div>
								</div>	
							</div>
						</fieldset>
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
