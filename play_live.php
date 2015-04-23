<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div class="col col-10" id="page-handler">
				<!-- row video -->
				<div class="row">
					<div class="col col-8 col-offset-2">
						<h3>Directo de artista X</h3>
						<div class="module">
							<div class="videoWrapper col col-10 col-offset-1">
								<iframe src="https://www.youtube.com/embed/ceoqlnoa_HU" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						
					</div>																
				</div>
				<!-- ./ row video -->
				<!-- row chat-->
				<div class="row">
					<div class="col col-8 col-offset-2">
						<!--<ul class="ul-plain">-->
						<div class="module">
							<ul>
								<li>Usuario 1: ¡Qué bien están tocando!</li>
								<li>Usuario 2: Se nota que han ensayado mucho...</li>
								<li>Usuario 1: Hace un año estaban más verdes</li>
								<li>Usuario 3: Pues a mi me parece un rollo... :(</li>
							</ul>
						</div>
						
					</div>
				</div>
				<!-- ./ row chat-->
				<!-- row enviar comentario -->
				<div class="row">
					<div class="col col-8 col-offset-2">
						<form action="procesa_comentario.php" method="post">
							<!--<div class="comment-wrapper">
								<input class="comment-field" type="text" name="texto_mensaje" value="Mensaje...">
								<input class="comment-button" type="submit" name="enviar" value="Enviar">
							</div>-->
							<div>
								<input class="btn alternate" type="text" name="texto_mensaje" value="Mensaje...">
								<input class="btn primary"type="submit" name="enviar" value="Enviar">
							</div>
						</form>
					</div>
				</div>																
				<!-- ./ row enviar comentario -->				
			</div>
			
				<?php
					include_once('includes/right-sidebar.php');
				?>
		</div>
	
<?php
	include_once('includes/footer.php');
?>