<?php namespace core;

use core\view;

abstract class Controller {

    /**
     * View of the Controller
     * @var  \core\view
     */
    public $view;

    public function __construct()
    {
        /**
         * Instantiate new View for the Controller
         * @var View
         */
        $this->view = new View();
    }
}