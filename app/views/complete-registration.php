<div id="page-handler" class="col col-10">
	<div class="row">
		<div class="col col-8 col-offset-2">
			<h1>Complete Registration</h1>
			<form id="complete-registration" action="" method="post" enctype="multipart/form-data">
	  		<!-- <input class="btn inverse small <?php if(!empty($data['user'][0]->userHandle)){echo 'error';} ?>" type="text" name="userHandle" placeholder="<?php if(!empty($data['user'][0]->userHandle)){echo $data['user'][0]->userHandle;}else{echo 'Usuario';} ?>">
	  		<input class="btn inverse small <?php if(!empty($data['user'][0]->userEmail)){echo 'error';} ?>" type="text" name="userEmail" placeholder="<?php if(!empty($data['user'][0]->userEmail)){echo $data['user'][0]->userEmail;}else{echo 'Email';} ?>"> -->
	  		<input class="btn inverse small <?php if(!empty($data['user'][0]->userName)){echo 'error';} ?>" type="text" name="userName" placeholder="<?php if(!empty($data['user'][0]->userName)){echo $data['user'][0]->userName;}else{echo 'Nombre';} ?>">
	  		<input class="btn inverse small <?php if(!empty($data['user'][0]->userLastName)){echo 'error';} ?>" type="text" name="userLastName" placeholder="<?php if(!empty($data['user'][0]->userLastName)){echo $data['user'][0]->userLastName;}else{echo 'Apellidos';} ?>">
	  		<textarea name="userBio"><?php if(!empty($data['user'][0]->userBio)){echo $data['user'][0]->userBio;}else{echo '<p>This is your Bio</p>';}?></textarea>
	  		<input type="file" name="userProfilePicture">
	  		<input type="file" name="userHeader">
			<input class="btn primary small center" type="submit" name="submit" value="Terminar">
			</form>
		</div>
	</div>
</div>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true});</script>