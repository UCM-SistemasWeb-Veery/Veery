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
						<button type="button" disabled>Play!</button>
						<button type="button" disabled>Favoritos</button>
						<button type="button" disabled>Compartir</button>
					</div>															
				</div>				
				<div class="row ">
					<div class="col col_4">
						<h2>Discografía</h2>
					</div>
					<div class="col col_12">
						<a href="index.php"><img class="col col_3" src="img/album1.jpg"></a>
						<a href="index.php"><img class="col col_3" src="img/album2.jpg"></a>
						<a href="index.php"><img class="col col_3" src="img/album3.jpg"></a>
						<a href="index.php"><img class="col col_3" src="img/album4.jpg"></a>
					</div>
					
				</div>

				<div class="row">
					<div class="col col_12">
						<h2>Videos</h2>
					</div>
					<iframe class="col col_4 col_offset_2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
					frameborder="0" allowfullscreen></iframe>
					<iframe  class="col col_4 col_offset_2" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="row">
					<div class="col col_12">
						<h2>Streamings</h2>
					</div>
					<iframe class="col col_4 col_offset_2" src="https://www.youtube.com/embed/8rnr2wuAhYc?rel=0&amp;showinfo=0" 
					frameborder="0" allowfullscreen></iframe>
					<iframe  class="col col_4 col_offset_2" src="https://www.youtube.com/embed/Rk-7Ql_5fZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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


