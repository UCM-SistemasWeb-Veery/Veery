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
						<h3>Videoclip de artista X</h3>
						<!-- TODO: ¿Hay que quitar el width y el height y hacerlo responsive?-->
						<iframe src="https://www.youtube.com/embed/otCpCn0l4Wo" width="640" height="480"></iframe>
					</div>																
				</div>
				<!-- ./ row video -->
				<!-- row más videos -->
				<div class="row">
					<div class="col col-12">
						<h4>Otros videos:</h4>
						<table>
							<tr>
							    <td> Video 1 </td>
							    <td> **** </td> 
							    <td> 3:59 </td>
						  	</tr>
						  	<tr>
							    <td> Video 2 </td>
							    <td> ** </td> 
							    <td> 2:23 </td>
						  	</tr>
						  	<tr>
							    <td> Video 3 </td>
							    <td> ***** </td> 
							    <td> 7:32 </td>
						  	</tr>
						  	<tr>
							    <td> Video 4 </td>
							    <td> **** </td> 
							    <td> 4:12 </td>
						  	</tr>
						</table>
					</div>
				</div>
				<!-- ./ row más videos -->		
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