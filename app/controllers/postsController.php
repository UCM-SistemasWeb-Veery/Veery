<?php namespace controllers;

use core\view,
    \core\controller as Controller;

class PostsController extends Controller{
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\postModel();
    }

    public function create() {
        $data['title'] = '';
        $data['feed'] = $this->_model->getFeed();
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('posts/create', $data);
        View::renderpartial('footer', $data);
    }

    public function view() {        
        $data['feed'] = $this->_model->getPost($id);.
        $data['title'] = 'View post';
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('posts/view', $data);
        View::renderpartial('footer', $data);
    }

    public function update() {        
        $data['feed'] = $this->_model->getPost($id);
        $data['title'] = 'Edit Post';
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('view/update', $data);
        View::renderpartial('footer', $data);
    }

    public function delete($id) {
        $data['feed'] = $this->_model->deletePost($id);
    }        

}