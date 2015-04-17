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
				<div id="userspace-header" class="row">
					<img class="col col_3" src="../img/koala.jpg">

					<p class="col col_6">
						Nombre de usuario
					</p>

					<p class="col col_3">
						botones
					</p>
				</div>	

				<div id="userspace-content" class="row">
					CONTENIDO
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
