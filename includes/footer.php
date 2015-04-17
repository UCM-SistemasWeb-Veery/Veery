						<div id="right-sidebar" class="col col-2">
							<?php
								include_once('includes/right_sidebar.php');
							?>
						</div>									
					</div>
			</div>		
		</div>
	</div>
	<footer>
		<div class="container">
			<div id="controls" class="col col-3">
				<h3>Aquí van los controles</h3>			
			</div>
			<div id="" class="col col-6">
				<h3>Aquí el streaming</h3>
			</div>
			<div id="album-art" class="col col-3">
				<h3>Aquí el album art</h3>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</body>
</html>