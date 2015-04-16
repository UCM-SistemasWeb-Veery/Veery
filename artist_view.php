<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div id="right-sidebar" class="col col_2">
				<?php
					include_once('includes/left_sidebar.php');
				?>
			</div>

			<div id="content-handler" class="col col_7">								
				<div class="row">
					<a href="index.php"><img class="col col_5" src="img/jay-z.jpg"></a>
					<div class="col col_7">
						<p><h1>JAY_Z</h1></p>
					</div>															
				</div>				
				<div class="row">
					<p class="col col_12"> Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), 
						más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, 
						empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los 
						artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, 
						poseyendo un patrimonio neto de más de $500 millones en 2012.
					</p>		
				</div>

				<div class="row ">
					<div class="col col_4">
						<h2>Álbumnes</h2>
					</div>
					<div class="col col_12">
						<a href="index.php"><img class="col col_3" src="img/album1.gif"></a>
						<a href="index.php"><img class="col col_3" src="img/album2.jpg"></a>
						<a href="index.php"><img class="col col_3" src="img/album3.jpg"></a>
						<a href="index.php"><img class="col col_3" src="img/album4.jpg"></a>
					</div>
					
				</div>

				<div class="row">
					<div class="col col_4">
						<h2>Video</h2>
					</div>
					<iframe height="315" class="col col_8 col_offset_2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
					frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="row">
					<div class="col col_4 ">
						<h2>Streamings</h2>
					</div>
					<iframe height="315" class="col col_8 col_offset_2" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				
			</div>
			
			<div id="left-sidebar" class="col col_3">
				<?php
					include_once('includes/right_sidebar.php');
				?>
			</div>
		</div>
	
<?php
	include_once('includes/footer.php');
?>


