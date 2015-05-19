<?php namespace controllers;

use \core\view,
    \core\session as Session,
    \core\controller as Controller;

class InvitesController extends Controller{
    private $_model;
    private $_user;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\inviteModel();
    }
    /**
     * Define Index page title and load template files
     */
    public function sendInvites() {
        var_dump($this->_model->inviteAll());
        //Url::redirect('');
    }
}