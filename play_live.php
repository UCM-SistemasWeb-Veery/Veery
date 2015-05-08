<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div class="col col-10" id="page-handler">
				<!-- row video -->
				<div class="row">
					<div class="col col-8 col-offset-2">
						<h3>Directo de artista X</h3>
						<div class="videoWrapper col col-10 col-offset-1">
							<iframe src="https://www.youtube.com/embed/ceoqlnoa_HU" allowfullscreen></iframe>
						</div>
					</div>																
				</div>
				<!-- ./ row video -->
				<!-- row chat-->
				<div class="row">
					<div class="col col-8 col-offset-2">
						<!--<ul class="ul-plain">-->
						<div class="module medium">
							<ul id="chat-messages">
								<li><span class="fa fa-user"></span> Usuario 1: ¡Qué bien están tocando!</li>
								<li><span class="fa fa-user"></span> Usuario 2: Se nota que han ensayado mucho...</li>
								<li><span class="fa fa-user"></span> Usuario 1: Hace un año estaban más verdes</li>
								<li><span class="fa fa-user"></span> Usuario 3: Pues a mi me parece un rollo... :(</li>
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
								<input class="btn inverse col-8" type="text" name="texto_mensaje" placeholder="Mensaje...">
								<input class="btn primary col-3"type="submit" name="enviar" value="Enviar">
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