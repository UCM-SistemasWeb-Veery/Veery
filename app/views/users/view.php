	<?php/* var_dump ( $data['follower']);*/ ?>
	<div id="page-handler" class="col col-10">
         <div class="row">
			<nav class="clearfix">
			    <ul>
			    	<li><a class="btn inverse" href="<?php echo PATH; ?>"><span class="fa fa-home"></span> Home</a></li>
			    	<li><a class="btn inverse <?php if(!strcmp($data['user'][0]->userID, \core\session::get('currentUserID'))){ echo 'active';} ?>" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle'); ?>"><span class="fa fa-user"></span> My Veery</a></li>
			        <li><a class="btn inverse" href="<?php echo PATH.'posts/create'; ?>"><span class="fa fa-plus"></span> Add Post</a></li>
			        <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle').'/edit'; ?>"><span class="fa fa-pencil-square-o"></span> Editar</a></li>
			        <?php if(intval(\core\session::get('currentUserType')) == 2){ echo '<li><a class="btn inverse" href="'.PATH.'albums/create"><span class="fa fa-plus"></span> Add Album</a></li>';} ?>
			    </ul>
			    <a href="#" id="pull">Just For You</a>
			</nav>
		</div>
		<div class="row">
			<div id="cover-photo" class="phone-hide medium col col-12">
				<img src="<?php echo PATH.'img/headerPictures/'.$data['user'][0]->userHeader; ?>">
			</div>
		</div>
		<div id="profile-intro" class="row">
			<div id="profile-picture" class="col col-3 col-offset-1">
				<img src="<?php echo PATH.'img/profilePictures/'.$data['user'][0]->userProfilePicture; ?>">
			</div>
			<div class="col col-7 col-offset-1">
				<h1 ><?php echo $data['user'][0]->userName.' '.$data['user'][0]->userLastName ?></h1>
				<?php
					if(strcmp($data['user'][0]->userID, \core\session::get('currentUserID'))){
						if(!$data['follower']){
							echo '<button id="follow" class="btn alternate block float-right follow">Follow <span class="fa fa-plus"></span></button>';
						}else{
							echo '<button id="unfollow" class="btn primary block float-right unfollow">Unfollow <span class="fa fa-check-square-o"></span></button>';
						}
					}
				?>
				<h2><?php echo '@'.$data['user'][0]->userHandle; if($data['user'][0]->userType==2){echo ' <span class="fa fa-check"></span>';}?></h2>

				<?php echo $data['user'][0]->userBio; ?>
			</div>
		</div>
		<?php if(!empty($data['artist']['albums'])){

			echo'
				<div class="row profile-content">
					<div class="col col-12">
						<h2>Discografía</h2>
					</div>
					<div class="col col-12">
					';
					foreach ($data['artist']['albums'] as $album) {
						echo
						'<div class="col col-2 col-offset-1">
							<a href="albums/'.$album->albumID.'"><img class="artwork"  src="'.PATH.'img/albumCovers/'.$album->albumCover.'"></a>
						</div>
						';
					}
					echo
					'
					</div>
				</div>
			';

			} ?>

		<?php if(!empty($data['artist']['videos'])){

			echo'
				<div class="row  profile-content">
					<div class="col col-4">
						<div class="col col-12">
							<h2>Video</h2>
						</div>
					</div>
					<div class="col col-10 col-offset-1">
						<div class="row">';
							foreach ($data['artist']['videos'] as $video) {
								echo
								'
									<div class="col col-3 col-offset-1">
										<iframe class="small" src="'.$video->videoUrl.'" allowfullscreen></iframe>
									</div>
								';
							}
					echo'
						</div>
					</div>
				</div>
					';

			} ?>

			<?php if(!empty($data['artist']['streams'])){
				echo'
					<div class="row  profile-content">
						<div class="col col-4">
							<div class="col col-12">
								<h2>Streamings</h2>
							</div>
						</div>
						<div class="col col-10 col-offset-1">
							<div class="row">';
								foreach ($data['artist']['streams'] as $stream) {
									echo
									'
										<div class="col col-6 col-offset-3">
											<iframe class="medium" src="'.$stream->streamUrl.'" allowfullscreen></iframe>
										</div>
									';
								}
						echo'
							</div>
						</div>
					</div>
						';

			} ?>
			<div class="row  profile-content">
				<div class="col col-8 col-offset-2">
					<div id="userPosts">
						<h3><?php echo '@'.$data['user'][0]->userHandle; ?>'s Posts</h3>
							<?php

									if(empty($data['posts'])){
										echo '<h4>'.$data['user'][0]->userHandle.' has no posts yet!</h4>';
									}
									else{
										foreach ($data['posts'] as $post) {
											$posted = Carbon\Carbon::parse($post->postDate);
											echo '
													<div class="row post">
														<p>'.$post->postContent.'</p>
														<p>'.$posted->diffForHumans().'</p>
													</div>
											';
										}
									}
							?>
					</div>
				</div>
			</div>
	</div>