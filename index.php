<?php

if(file_exists('vendor/autoload.php')){
    require 'vendor/autoload.php';
} else {
    echo "<h1>Please install via composer.json</h1>";
    echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
    echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
    exit;
}
if (!is_readable('app/core/config.php')) {
    die('No config.php found, configure and rename config.example.php to config.php in app/core.');
}

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;
//define routes
Router::any('', '\controllers\pagesController@index');
Router::any('start-broadcast', '\controllers\pagesController@startBroadcast');

Router::any('login', '\controllers\auth\authController@login');
Router::any('logout', '\controllers\auth\authController@logout');
Router::any('register', '\controllers\auth\authController@register');


Router::any('users/new', '\controllers\usersController@create');
Router::any('users/verify/(:any)/(:any)', '\controllers\usersController@verify');
Router::any('users/(:any)', '\controllers\usersController@view');


//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();