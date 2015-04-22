<?php
include_once('includes/header.php');
?>
<div class="row">
	<div id="page-handler" class="col col-10">

		<div class="row">
			<div class="col col-offset-9 col-3">
				<a class="btn inverse" href="art_modificar_info.php"><span class="fa fa-edit"></span>Modificar perfil</a>
			</div>
		</div>										
		<div class="row">
			<div id="artwork" class="col col-5">
				<img src="img/jay-z.jpg">
			</div>
			<div class="col col-3 col-offset-1">
				<h1>JAY_Z</h1>
			</div>

		</div>
		<div class="row">
			<div class="col col-12">
				<p>Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
					más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
					empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
					artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, 
					poseyendo un patrimonio neto de más de $500 millones en 2012.
				</p>
			</div>		
		</div>

		<div class="row">

			<div class="col col-12">
				<h2>Discografía</h2>
			</div>
			<div class="col col-3">
				<a class="btn inverse" href="upload_song.php"><span class="fa fa-upload"></span>Añadir canciones</a>
			</div>

			<div class="col col-12">
				<a href="album_view.php"><img class="col col-2 col-offset-1" src="img/album1.jpg"></a>
				<a href="album_view.php"><img class="col col-2 col-offset-1" src="img/album2.jpg"></a>
				<a href="album_view.php"><img class="col col-2 col-offset-1" src="img/album3.jpg"></a>
				<a href="album_view.php"><img class="col col-2 col-offset-1" src="img/album4.jpg"></a>
			</div>					
		</div>
		<div class="row">
			<div class="col col-4">
				<div class="col col-12">
					<h2>Video</h2>
				</div>
				<a class="btn inverse" href="upload_video.php"> <span class="fa fa-upload"></span>Añadir video </a>
			</div>
			<div class="col col-12">
				<iframe class="col col-3 col-offset-1" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
				frameborder="0" allowfullscreen></iframe>
				<iframe  class="col col-3 col-offset-1" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<iframe  class="col col-3 col-offset-1" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			</div>
			</div>
		<div class="row">
			<div class="col col-12 ">
				<h2>Streamings</h2>
				<a class="btn inverse" href="empezar_ensayo.php"> <span class="fa fa-upload"></span> Empezar ensayo</a>
				<a class="btn inverse" href="empezar_concierto.php"> <span class="fa fa-upload"></span> Empezar concierto</a>
				
			</div>
			<div class="col col-12">
				<iframe class="col col-5 col-offset-4" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
				frameborder="0" allowfullscreen></iframe>
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
