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
				<div id="userspace-header" class="row">
					<img class="col col-4" src="../img/koala.jpg">

					<h4 class="col col-4">John Doe</h2>

					<div class="col col-4">
						<div class="row">
							<button type="button" class="col col-7 col_offset-2">Darse de baja</button>
						</div>
						<div class="row">
							<button type="button" class="col col-7 col_offset-2">modificar perfil</button>
						</div>
					</div>
				</div>	

				<div id="userspace-content" class="row">
					<div class="col col-3">
						<div  class="row">
							<img class="col col-9 col-offset-1" src="../img/disco1.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col-12">Pink Floyd</p>
						</div>
						<div  class="row">
							<p class="tracklist-author col col-12">Dark side of the moon</p>
						</div>		
					</div>

					<div class="col col-3">
						<div  class="row">
							<img class="col col-9 col-offset-1" src="../img/disco2.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col-12">Guns and roses</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col-12">Appettite for destruction</p>
						</div>		
					</div>

					<div class="col col-3">
						<div  class="row">
							<img class="col col-9 col_offset-1" src="../img/disco3.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col-12">Metallica</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col-12">Death Magnetic</p>
						</div>		
					</div>

					<div class="col col-3">
						<div  class="row">
							<img class="col col-9 col-offset-1" src="../img/disco4.bmp">
						</div>
						<div  class="row">
							<p class="tracklist-title col col-12">Led zeppelin</p>
						</div>
						<div  class="row">
							<p class="tracklist-description col col-12">Led zeppelin IV</p>
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
