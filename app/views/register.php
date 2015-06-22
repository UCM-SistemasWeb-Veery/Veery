<div id="page-handler" class="col col-10">
	<?php

		if(isset($error[0])){
			echo '
				<div class="error message shadow">
					<p>'.$error[0].'</p>
				</div>
			';
		}
		if(isset($data['message'][0])){
			echo '
				<div class="success message shadow">
					<p>'.$data['message'][0].'</p>
				</div>
			';
		}
	?>

	<div id="session-controls" class="col col-6">
		<h1>Existing users</h1>
		<form action="<?php echo PATH.'login'; ?>" method="post">
  		<input class="btn inverse small <?php if(!empty($data['userHandle'])){echo 'error';} ?>" type="text" name="userHandle" placeholder="<?php if(!empty($data['userHandle'])){echo $data['userHandle'];}else{echo 'Usuario';} ?>">
			<input class="btn inverse small <?php if(!empty($data['userHandle'])){echo 'error';} ?>" type="password" name="userPassword" placeholder="Contraseña">
			<input class="btn primary small center" method="post" type="submit" name="submit" value="Acceder">
		</form>
	</div>
	<div class="col col-6">
		<h1>New users</h1>
		<form id="register" action="<?php echo PATH.'users/create'; ?>" method="post">
  		<input class="btn inverse small <?php if(!empty($data['userHandle'])){echo 'error';} ?>" type="text" name="userHandle" placeholder="<?php if(!empty($data['username'])){echo $data['userHandle'];}else{echo 'Usuario';} ?>">
  		<input class="btn inverse small <?php if(!empty($data['userEmail'])){echo 'error';} ?>" type="email" name="userEmail" placeholder="<?php if(!empty($data['username'])){echo $data['userHandle'];}else{echo 'Email';} ?>">
			<input class="btn inverse small" type="password" name="userPassword" placeholder="Contraseña">
			<input class="btn primary small center" method="post" type="submit" name="submit" value="Registrarse">
		</form>
	</div>
</div>