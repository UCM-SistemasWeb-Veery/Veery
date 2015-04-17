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
					<img class="col col_4" src="../img/koala.jpg">

					<h4 class="col col_4">John Doe</h2>

					<div class="col col_4">
						<div class="row">
							<button type="button" class="col col_7 col_offset_2">Darse de baja</button>
						</div>
						<div class="row">
							<button type="button" class="col col_7 col_offset_2">modificar perfil</button>
						</div>
					</div>
				</div>	

				<div id="userspace-content" class="row">
					<div class="col col_3">
						<div  class="row">
							<img class="col col_9 col_offset_1" src="../img/disco1.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col_12">Pink Floyd</p>
						</div>
						<div  class="row">
							<p class="tracklist-author col col_12">Dark side of the moon</p>
						</div>		
					</div>

					<div class="col col_3">
						<div  class="row">
							<img class="col col_9 col_offset_1" src="../img/disco2.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col_12">Guns and roses</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col_12">Appettite for destruction</p>
						</div>		
					</div>

					<div class="col col_3">
						<div  class="row">
							<img class="col col_9 col_offset_1" src="../img/disco3.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col_12">Metallica</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col_12">Death Magnetic</p>
						</div>		
					</div>

					<div class="col col_3">
						<div  class="row">
							<img class="col col_9 col_offset_1" src="../img/disco4.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col_12">Led zeppelin</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col_12">Led zeppelin IV</p>
						</div>		
					</div>

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
