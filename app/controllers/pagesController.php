<?php namespace controllers;

use core\view,
    \core\controller as Controller;

class PagesController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /**
     * Define Index page title and load template files
     */
    public function index() {
        $data['title'] = '';

        View::renderpartial('header', $data);
        View::render('index', $data);
        View::renderpartial('footer', $data);
    }

    public function startBroadcast(){
        $data['title'] = 'Start Broadcast';

        View::renderpartial('header', $data);
        View::render('start-broadcast', $data);
        View::renderpartial('footer', $data);
    }

}