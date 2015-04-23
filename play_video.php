<?php
	include_once('includes/header.php');
?>

<div class="row">
	<div class="col col-10 id="page-handler""> 
		<!-- row video -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<h3>Videoclip de artista X</h3>
				<div class="module">
					<div class="videoWrapper col col-10 col-offset-1">
						<iframe src="https://www.youtube.com/embed/otCpCn0l4Wo" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div>																
		</div>
		<!-- ./ row video -->
		<!-- row más videos -->
		<div class="row">
			<div class="col col-8 col-offset-2">
				<h4>Otros videos:</h4>
				<div class="module">
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
		</div>
		<!-- ./ row más videos -->		
	</div>

	<?php
		include_once('includes/right-sidebar.php');
	?>

</div>
	
<?php
	include_once('includes/footer.php');
?>