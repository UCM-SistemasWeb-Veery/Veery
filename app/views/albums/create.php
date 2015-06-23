    <div id="page-handler" class="col col-10">
         <div class="row">
            <nav class="clearfix">
                <ul>
                    <li><a class="btn inverse" href="<?php echo PATH; ?>"><span class="fa fa-home"></span> Home</a></li>
                    <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle'); ?>"><span class="fa fa-user"></span> My Veery</a></li>
                    <li><a class="btn inverse" href="<?php echo PATH.'posts/create'; ?>"><span class="fa fa-plus"></span> Add Post</a></li>
                    <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle').'/edit'; ?>"><span class="fa fa-pencil-square-o"></span> Editar</a></li>
                    <?php if(intval(\core\session::get('currentUserType')) == 2){ echo '<li><a class="btn inverse active" href="'.PATH.'"albums/create"><span class="fa fa-plus"></span> Add Album</a></li>';} ?>
                </ul>
                <a href="#" id="pull">Just For You</a>
            </nav>
        </div>
        <div class="row">
            <div class="col col-10 col-offset-1">
                <h1>Add Album</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <label for="albumCover">Album name</label>
                        <input type="text" name="albumName">
                    </div>
                    <div class="row">
                        <label for="albumCover">Album cover</label>
                        <input type="file" name="albumCover">
                    </div>

                    <div id="songs" class="row">
                        <label for="albumCover">Album songs</label>
                        <input type="file" name="albumSongs[]" multiple>
                    </div>



                    <div class="row">
                        <input class="btn primary small center" type="submit" name="submit" value="Agregar">
                    </div>
                </form>
                <div class="row">
                    <button id="add-song" class="btn alternate small">Agregar canciones</button>
                </div>
            </div>
        </div>
    </div>


