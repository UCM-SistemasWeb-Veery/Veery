<?php namespace controllers;

use \core\view,
    \core\controller as Controller;

class PostsController extends Controller{
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\postModel();
    }

    public function create() {
        $data['title'] = 'Add Post';
        $error = NULL;

        if(isset($_POST['submit'])){
            $postContent = $_POST['postContent'];

            if($postContent == ''){
                $error[] = 'El contenido es obligatorios';
            }

            if(!$error){
                $postData = array('postContent' => $postContent, 'userID' => \core\session::get('currentUserID'));
                $this->_model->createPost($postData);
                \core\session::set('message', 'Asistente agregado correctamente');
                \core\url::redirect('user/'.\core\session::get('currentUserHandle'));
            }
        }

        View::renderpartial('header', $data);
        View::render('post/create', $data);
        View::renderpartial('footer', $data);
    }

    public function view() {
        $data['feed'] = $this->_model->getPost($id);
        $data['title'] = 'View post';
        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('post/view', $data);
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