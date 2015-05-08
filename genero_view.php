<?php
include_once('includes/header.php');
?>
<div class="row">

	<div id="page-handler" class="col col-10">								
		<div class="row">
			<div class="col col-3 col-offset-2">
				<div id="artwork">
					<img src="<?php echo PATH ?>img/top40.jpg">
				</div>
			</div>		
			<div class="col col-6 col-offset-1">
				<h2>VeeryLista</h2>
				<p>Esta es la vista de una playlist. Puedes compartirla, agregarla a tus favoritos o escucharla. O las tres cosas!</p>
				<button class="btn primary" type="button"><span class="fa fa-star"> Favoritos</span></button>
				<button class="btn primary" type="button"><span class="fa fa-share-alt"> Compartir</span></button>
			</div>															
		</div>				
		<div class="row">
			<div class="col col-2 col-offset-2">
				<button class="btn alternate" type="button"><span class="fa fa-play"></span> Escuchar</button>
			</div>
			<div class="col col-6 col-offset-2">		
				<input class="btn inverse" type="search" name="busqueda" placeholder="Buscar">
				<button class="btn alternate" type="button"><span class="fa fa-play"></span> Buscar</button>
			</div>
		</div>
		<div class="row">
			<div class="col col-8 col-offset-2">
				<table id="tracklist">
					<thead>
						<tr>
							<th>Album Cover</th>
							<th>Canción</th>
							<th>Artista</th>
							<th>Album</th>
							<th>Duración</th>
						</tr>
					</thead>
					<tfoot>
					</tfoot>
					<tbody>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>See You Again (feat. Charlie Puth)</td>
							<td>Wiz Khalifa Featuring Charlie Puth</td>
							<td>Chains</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Uptown Funk!</td>
							<td>Mark Ronson Featuring Bruno Mars</td>
							<td>Post To Be</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Sugar</td>
							<td>Maroon 5</td>
							<td>Time Of Our Lives</td>
							<td>03:54</td>
						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Trap Queen</td>
							<td>Fetty Wap</td>
							<td>Truffle Butter</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Thinking Out Loud</td>
							<td>Ed Sheeran</td>
							<td>Chains</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Earned It (Fifty Shades Of Grey)</td>
							<td>The Weeknd</td>
							<td>Blank Space</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Love Me Like You Do</td>
							<td>Ellie Goulding</td>
							<td>Lay Me Down</td>
							<td>03:54</td>

						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>G.D.F.R.</td>
							<td>Want To Want Me</td>
							<td>Flo Rida Featuring Sage The Gemini &amp; Lookas</td>
							<td>03:54</td>
						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Shut Up And Dance</td>
							<td>WALK THE MOON</td>
							<td>The Blueprint</td>
							<td>03:54</td>
						</tr>
						<tr>
							<td><img src="https://theocculteliteexposed.files.wordpress.com/2015/03/mark-ronson-bruno-mars-uptown-funk.jpg"></td>
							<td>Style</td>
							<td>Taylor Swift</td>
							<td>Want To Want Me</td>
							<td>03:54</td>
						</tr>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
	<?php
	include_once('includes/right-sidebar.php');
	?>

</div>

<?php
include_once('includes/footer.php');
?>


