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
				<div class="row">
					<a href="index.php"><img class="col col-5" src="img/top40.jpg"></a>
					<div class="col col-7">
						<h1>VeeryLista</h1>
						<button class="btn" type="button">Favoritos</button>
						<button class="btn" type="button">Compartir</button>
					</div>															
				</div>				
				<div class="row ">
					<div class="col col-12"> 
						<a href="index.php"><h3 class="col col-4">Canciones</h3></a>
						<a href="index.php"><h3 class="col col-4">Comentarios</h3></a>
						<a href="index.php"><h3 class="col col-4">Fans</h3></a>
					</div>
				</div>
				<div class="row">
					<div class="col col-3"><button class="btn" type="button">Escuchar</button></div>
					<div class="col col-2 col-offset-3"><input class="btn" type="search" name="busqueda" placeholder="Buscar"></div>
				</div>
				<div class="row">
					<div class="col col-12">
	
						<table>
				            <thead>
				              <tr>
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
					                     <td>The Ruler's Back</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>

					                  </tr>
					                  <tr>
					                     <td>Izzo (H.O.V.A)</td>
                					     <td>JAY_Z</td>
                					     <td>The Blueprint</td>
                					     <td>03:54</td>
					                     
					                  </tr>
					                  <tr>
					                     <td>Jigga That Nigga</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                  </tr>
					                  <tr>
					                     <td>U Don't Know</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                     
					                  </tr>
					                  <tr>
					                     <td>Hola' Hovito</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                     
					                  </tr>
					                  <tr>
					                     <td>Heart of the City</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                    
					                  </tr>
					                  <tr>
					                     <td>Never Change</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                    
					                  </tr>
					                   <tr>
					                     <td>Song Cry</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                  </tr>
					                   <tr>
					                     <td>All I Need</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                  </tr>
					                  <tr>
					                     <td>Renegade</td>
					                     <td>JAY_Z</td>
					                     <td>The Blueprint</td>
					                     <td>03:54</td>
					                  </tr>
				            </tbody>
	        			</table>
	        		</div>	
				</div>
				
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


