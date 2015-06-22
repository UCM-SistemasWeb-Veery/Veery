<div id="page-handler" class="col col-10">
    <div class="row">
        <nav class="clearfix">
            <ul>
                <li><a class="btn inverse" href="<?php echo PATH; ?>"><span class="fa fa-home"></span> Home</a></li>
                <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle'); ?>"><span class="fa fa-user"></span> My Veery</a></li>
                <li><a class="btn inverse" href="<?php echo PATH.'posts/create'; ?>"><span class="fa fa-plus"></span> Add Post</a></li>
                <li><a class="btn inverse active"><span class="fa fa-pencil-square-o"></span> Editar</a></li>
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
        <div class="col col-6 col-offset-2">
            <h1>Editar perfil</h1>
            <form id="complete-registration" action="" method="post" enctype="multipart/form-data">
                <label for="">Handle</label>
                <input class="btn inverse small <?php if(!empty($data['user'][0]->userHandle)){echo 'error';} ?>" type="text" name="userHandle" value="<?php if(!empty($data['user'][0]->userHandle)){echo $data['user'][0]->userHandle;}else{echo 'Usuario';} ?>" disabled>
                <label for="">Email</label>
                <input class="btn inverse small <?php if(!empty($data['user'][0]->userEmail)){echo 'error';} ?>" type="email" name="userEmail" value="<?php if(!empty($data['user'][0]->userEmail)){echo $data['user'][0]->userEmail;}else{echo 'Email';} ?>">
                <label for="">Nombre</label>
                <input class="btn inverse small <?php if(!empty($data['user'][0]->userName)){echo 'error';} ?>" type="text" name="userName" value="<?php if(!empty($data['user'][0]->userName)){echo $data['user'][0]->userName;}else{echo 'Nombre';} ?>">
                <label for="">Apellidos</label>
                <input class="btn inverse small <?php if(!empty($data['user'][0]->userLastName)){echo 'error';} ?>" type="text" name="userLastName" value="<?php if(!empty($data['user'][0]->userLastName)){echo $data['user'][0]->userLastName;}else{echo 'Apellidos';} ?>">
                <textarea name="userBio"><?php if(!empty($data['user'][0]->userBio)){echo $data['user'][0]->userBio;}else{echo '<p>This is your Bio</p>';}?></textarea>
                <label for="">Foto de perfil</label>
                <input type="file" name="userProfilePicture">
                <label for="">Foto de cover</label>
                <input type="file" name="userHeader">
                <input class="btn primary small center" type="submit" name="submit" value="Terminar">
            </form>
        </div>
    </div>
</div>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true});</script>