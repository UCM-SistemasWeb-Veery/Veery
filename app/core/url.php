<?php namespace core;

class Url{

	/**
	 * Redirect to chosen url
	 * 
	 * @param  string  $url      The path to redirect to
	 * @param  boolean $fullpath If true, then no need to place the PATH constant
	 * 
	 */	
		public static function redirect($url, $fullpath = false){

			if(!$fullpath){

				$url = PATH.$url;

			}
			
			header('Location: '.$url);
		}

		/**
		 * Go to the previous url.
		 */
		public static function previous() {
			header('Location: '. $_SERVER['HTTP_REFERER']);
		}	
}