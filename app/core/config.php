<?php namespace core;

class Config {
  /**
   * Basic init values for our web app
   */
  public function __construct() {
    //turn on output buffering
    ob_start();
    //site address
    define('PATH', 'http://veery.dev/');
    //css default path
    define('css_path', PATH.'app/assets/stylesheets/');
    //js default path
    define('js_path', PATH.'app/assets/javascript/');
    //default site title
    define('SITETITLE', 'Veery. Social streaming.');
    //set a default language
    define('DEFAULT_LANGUAGE', 'es');
    //set timezone
    date_default_timezone_set('Europe/Madrid');

    /**
     * Database configuration
     */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'veery');
    define('DB_USER', 'homestead');
    define('DB_PASS', 'secret');

    //start sessions
    \core\session::init();

  }
}
