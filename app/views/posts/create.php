    <div id="page-handler" class="col col-10">
         <div class="row">
            <nav class="clearfix">
                <ul>
                    <li><a class="btn inverse" href="<?php echo PATH; ?>"><span class="fa fa-home"></span> Home</a></li>
                    <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle'); ?>"><span class="fa fa-user"></span> My Veery</a></li>
                    <li><a class="btn inverse active" href="<?php echo PATH.'posts/create'; ?>"><span class="fa fa-plus"></span> Add Post</a></li>
                    <li><a class="btn inverse" href="<?php echo PATH.'users/'.\core\session::get('currentUserHandle').'/edit'; ?>"><span class="fa fa-pencil-square-o"></span> Editar</a></li>
                </ul>
                <a href="#" id="pull">Just For You</a>
            </nav>
        </div>
        <div class="row">
            <div class="col col-10 col-offset-1">
                <h1>Add Post</h1>
                <form action="" method="post">
                    <textarea name="postContent"><?php echo '<p>New post here....</p>';?></textarea>
                    <input class="btn primary small center" type="submit" name="submit" value="Agregar">
                </form>
            </div>
        </div>
    </div>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true});</script>