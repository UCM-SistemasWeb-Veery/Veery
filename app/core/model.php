<?php namespace core;

abstract class Model{
    /**
     * hold the database connection
     * @var object
     */
    protected $_db;

    /**
     * create a new instance of the database helper
     */
    public function __construct(){
        //connect to PDO here.
        $this->_db = \core\database::get();
    }
}