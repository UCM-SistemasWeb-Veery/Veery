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
		<div class="row">
			<img class="col col-5" src="img/jay-z.jpg"></a>
			<div class="col col-7">
				<h1>JAY_Z</h1>
				<button class="btn" type="button" disabled>Favoritos</button>
				<button class="btn" type="button" disabled>Compartir</button>
			</div>															
		</div>				
		<div class="row ">
			<h2 class="col col-4">Discografía</h2>
			<div class="col col-12">
				<button class="btn" type="button" disabled>Escuchar</button>
				<div class="col col-12">
					<a href="album_view.php"><img class="col col-3" src="img/album1.jpg"></a>
					<a href="album_view.php"><img class="col col-3" src="img/album2.jpg"></a>
					<a href="album_view.php"><img class="col col-3" src="img/album3.jpg"></a>
					<a href="album_view.php"><img class="col col-3" src="img/album4.jpg"></a>
				</div>
			</div>
			
		</div>

		<div class="row">
			<h2 class="col col-4">Videos</h2>
			<div class="col col-12">
				<iframe class="col col-4 col-offset-2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
				frameborder="0" allowfullscreen></iframe>
				<iframe  class="col col-4 col-offset-1" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<h2 class="col col-4">Streamings</h2>
			<div class="col col-12">
				<iframe class="col col-4 col-offset-2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
				frameborder="0" allowfullscreen></iframe>
				<iframe  class="col col-4 col-offset-1" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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


