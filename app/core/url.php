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

		public static function generateSlug($slug) {
			// transform url
			$slug = ereg_replace("[áàâãª]","a",$slug);
			$slug = ereg_replace("[ÁÀÂÃ]","A",$slug);
			$slug = ereg_replace("[éèê]","e",$slug);
			$slug = ereg_replace("[ÉÈÊ]","E",$slug);
			$slug = ereg_replace("[íìî]","i",$slug);
			$slug = ereg_replace("[ÍÌÎ]","I",$slug);
			$slug = ereg_replace("[óòôõº]","o",$slug);
			$slug = ereg_replace("[ÓÒÔÕ]","O",$slug);
			$slug = ereg_replace("[úùû]","u",$slug);
			$slug = ereg_replace("[ÚÙÛ]","U",$slug);
			$slug = str_replace("ñ","n",$slug);
			$slug = str_replace("Ñ","N",$slug);
			$slug = preg_replace('/[^a-zA-Z0-9]/', '-', $slug);
			$slug = trim($slug, '-');
			//Removing more than one dashes
			$slug = preg_replace('/\-{2,}/', '-', $slug);
			return $slug;
		}		
}