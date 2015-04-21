<?php
	include_once('includes/header.php');
?>
		<div class="row">

			<div class="col col-10">
				<div class="row">
					<div class="col col-offset-9 col-3">
							<button><a href="art_modificar_info.php">Modificar perfil</a></button>

					</div>
				</div>										
				<div class="row">
					<a href="artista_main.php"><img class="col col-5" src="img/jay-z.jpg"></a>
					<div class="col col-7">
						<p><h1>JAY_Z</h1></p>
					</div>															
				</div>				
				<div class="row">
					<p class="col col-12">Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
								más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
								empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
								artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, 
								poseyendo un patrimonio neto de más de $500 millones en 2012.
					</p>		
				</div>
				<div class="row">
					<div class="col col-4">
						<h2>Álbumnes</h2>
						<button><a href="upload_song.php">Añadir canciones</a></button>
					</div>
					<div class="col col-12">
						<a href="artista_main.php"><img class="col col-3" src="img/album1.jpg"></a>
						<a href="artista_main.php"><img class="col col-3" src="img/album2.jpg"></a>
						<a href="artista_main.php"><img class="col col-3" src="img/album3.jpg"></a>
						<a href="artista_main.php"><img class="col col-3" src="img/album4.jpg"></a>
					</div>					
				</div>
				<div class="row">
					<div class="col col-4">
						<h2>Video</h2>
						<button><a href="upload_videos.php">Añadir videos</a></button>
					</div>
					<iframe height="315" class="col col-8 col-offset-2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0"		frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="row">
					<div class="col col-4 ">
						<h2>Streamings</h2>
						<button class="col col-5"><a href="html/empezar_ensayo.php">Empezar ensayo</a></button>
						<button class="col col-5 col-offset-2"><a href="html/empezar_concierto.php">Empezar concierto</a></button>
					</div>
					<iframe height="315" class="col col-8 col-offset-2" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
				<?php
					include_once('includes/right-sidebar.php');
				?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
