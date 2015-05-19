<?php namespace core;


class Session{

    /**
     * Determine if session has started
     * @var boolean
     */
    private static $_sessionStarted = false;
    /**
     * if session has not started, start sessions
     */
    public static function init(){
        if(self::$_sessionStarted == false){
            session_start();
            self::$_sessionStarted = true;
        }
    }

    /**
     * Add value to a session
     * @param string $key   name the data to save
     * @param string $value the data to save
     */
    public static function set($key,$value = false){
        /**
        * Check whether session is set in array or not
        * If array then set all session key-values in foreach loop
        */
        if(is_array($key) && $value === false){
            foreach ($key as $name => $value) {
                $_SESSION[$name] = $value;
            }
        } else {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * extract item from session then delete from the session, finally return the item
     * @param  string $key item to extract
     * @return string      return item
     */
    public static function pull($key){
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $value;
    }

    /**
     * get item from session
     *
     * @param  string  $key       item to look for in session
     * @param  boolean $secondkey if used then use as a second key
     * @return string             returns the key
     */
    public static function get($key,$secondkey = false){
        if($secondkey == true){
            if(isset($_SESSION[$key][$secondkey])){
                return $_SESSION[$key][$secondkey];
            }
        } else {
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }
        }
        return false;
    }
    
    /**
     * empties and destroys the session
     */
    public static function destroy($key='') {
        if(self::$_sessionStarted == true) {
            if(empty($key)) {
                session_unset();
                session_destroy();
            } else {
                unset($_SESSION[$key]);
            }
        }
    }
}