<?php namespace core;
/*ob_start();
session_start();

// Site path
define('PATH', 'http://veery.dev');

// Site title
define('SITETITLE', 'Veery. Social streaming.');

// Database credentials
define('DBHOST','localhost');
define('DBUSER', 'homestead');
define('DBPASS', 'secret');
define('DBNAME', 'veery');

$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Europe/Madrid');

//load classes as needed
/*function __autoload($class) {

   $class = strtolower($class);

    //if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

}

$user = new User($db); */



/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.1
 * @date June 27, 2014
 */

class Config {
  public function __construct() {
    //turn on output buffering
    ob_start();
    //site address
    define('PATH', 'http://veery.dev/');
    //set default controller and method for legacy calls
    //define('DEFAULT_CONTROLLER', 'welcome');
    //define('DEFAULT_METHOD' , 'index');
    //set a default language
    define('LANGUAGE_CODE', 'es');
    //database details ONLY NEEDED IF USING A DATABASE
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'veery');
    define('DB_USER', 'homestead');
    define('DB_PASS', 'secret');
    define('PREFIX', 'vry_');
    //set prefix for sessions
    define('SESSION_PREFIX', 'vry_');
    //optionall create a constant for the name of the site
    define('SITETITLE', 'Veery. Social streaming.');
    //turn on custom error handling
   /* set_exception_handler('core\logger::exception_handler');
    set_error_handler('core\logger::error_handler');*/
    //set timezone
    date_default_timezone_set('Europe/Madrid');
    //start sessions
    /*\helpers\session::init();
    //set the default template
    \helpers\session::set('template', 'default');*/
  }
}
?>