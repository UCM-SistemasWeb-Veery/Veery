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
				<!-- row video -->
				<div class="row">
					<div class="col col-12">
						<h3>Directo de artista X</h3>
						<div class="videoWrapper">
							<iframe src="https://www.youtube.com/embed/ceoqlnoa_HU" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>																
				</div>
				<!-- ./ row video -->
				<!-- row chat-->
				<div class="row">
					<div class="col col-12">
						<!--<ul class="ul-plain">-->
						<ul>
							<li>Usuario 1: ¡Qué bien están tocando!</li>
							<li>Usuario 2: Se nota que han ensayado mucho...</li>
							<li>Usuario 1: Hace un año estaban más verdes</li>
							<li>Usuario 3: Pues a mi me parece un rollo... :(</li>
						</ul>
					</div>
				</div>
				<!-- ./ row chat-->
				<!-- row enviar comentario -->
				<div class="row">
					<div class="col col-12">
						<form action="procesa_comentario.php" method="post">
							<!--<div class="comment-wrapper">
								<input class="comment-field" type="text" name="texto_mensaje" value="Mensaje...">
								<input class="comment-button" type="submit" name="enviar" value="Enviar">
							</div>-->
							<div>
								<input type="text" name="texto_mensaje" value="Mensaje...">
								<input type="submit" name="enviar" value="Enviar">
							</div>
						</form>
					</div>
				</div>																
				<!-- ./ row enviar comentario -->				
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