<?php namespace controllers;

use \core\view,
    \core\controller as Controller;

class AlbumsController extends Controller{
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\albumModel();
    }

    public function create() {
        $data['title'] = 'Add Album';
        $error = NULL;

        $data['js'] = "";

        if(isset($_POST['submit'])){
            $album['albumName'] = $_POST['albumName'];
            if(!empty($_FILES['albumCover']['name'])){
                $albumCover = $_FILES['albumCover']['name'];
                move_uploaded_file($_FILES['albumCover']['tmp_name'], 'img/albumCovers/'.$albumCover);
                $album['albumCover'] = $albumCover;
            }

            $artist = $this->_model->getArtistID(\core\session::get('currentUserID'));
            $album['artistID'] = $artist[0]->artistID;
            $album = $this->_model->createAlbum($album);
            $songArtist = $this->_model->getArtist(\core\session::get('currentUserID'));
            foreach($_FILES['albumSongs']['name'] as $key => $name_tmp) {
                $name = $_FILES['albumSongs']['name'][$key];
                $tmpnm = $_FILES['albumSongs']['tmp_name'][$key];
                $dir = 'music/'.$name;
                move_uploaded_file($tmpnm, $dir);
                $songs[$key]['songTitle'] = $name;
                $songs[$key]['songPath'] = $name;
                $songs[$key]['songArtist'] = $songArtist[0]->userName;
                $songs[$key]['albumID'] = $album;
            }
            var_dump($this->_model->registerSongs($songs));
            \core\url::redirect('users/'.\core\session::get('currentUserHandle'));

        }

        View::renderpartial('header', $data);
        View::render('albums/create', $data);
        View::renderpartial('footer', $data);
    }

    public function view() {
        $data['feed'] = $this->_model->getAlbum($id);
        $data['title'] = 'View album';
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('albums/view', $data);
        View::renderpartial('footer', $data);
    }

    public function update() {
        $data['feed'] = $this->_model->getPost($id);
        $data['title'] = 'Edit album';
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('albums/update', $data);
        View::renderpartial('footer', $data);
    }

    public function delete($id) {
        $data['feed'] = $this->_model->deletePost($id);
    }

}