<?php namespace controllers;

use core\view,
    \core\controller as Controller;

class UsersController extends Controller{
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\userModel();
    }

    public function view($slug) {        
        $data['user'] = $this->_model->getUser($slug);
        $data['title'] = $data['user'][0]->userName.' '.$data['user'][0]->userLastName;
        $data['posts'] = $this->_model->getUserPosts($data['user'][0]->userID);
        $artistID = $this->_model->isArtist($data['user'][0]->userID);
        if($artistID){
            $data['artist']['albums'] = $this->_model->getAlbums($artistID);
            $data['artist']['videos'] = $this->_model->getVideos($artistID);
            $data['artist']['streams'] = $this->_model->getStreams($artistID);
        }

        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('user/view', $data);
        View::renderpartial('footer', $data);
    }

}