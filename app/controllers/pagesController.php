<?php namespace controllers;

use \core\view,
    \core\session as Session,
    \core\controller as Controller;

class PagesController extends Controller{
    private $_model;
    private $_user;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\veeryModel();
        $this->_user = new \models\userModel();
    }
    /**
     * Define Index page title and load template files
     */
    public function index() {

        if(!Session::get('loggedin')){
            View::render('welcome');
        }else{
            $data['following'] = $this->_user->getFollowing(Session::get('currentUserID'));
            $data['feed'] = $this->_model->getFeed($data['following']);
            //var_dump($data['feed']);
            $data['js'] = "
                <script>
                  var container = document.querySelector('#feed-grid');
                  var msnry = new Masonry( container, {
                  });
                </script>
            ";
            View::renderpartial('header', $data);
            View::render('index', $data);
            View::renderpartial('footer', $data);
        }
    }

    public function startBroadcast(){
        $data['title'] = 'Start Broadcast';

        View::renderpartial('header', $data);
        View::render('start-broadcast', $data);
        View::renderpartial('footer', $data);
    }

}