<?php namespace models;

use \core\model as Model;

class UserModel extends Model{
    public function getUser($userSlug){
        return $this->_db->select("SELECT * FROM vry_users WHERE userSlug = :userSlug", array(':userSlug' => $userSlug));
    }

    public function getUserPosts($userID){
        return $this->_db->select("SELECT * FROM vry_user_posts WHERE userID = :userID", array(':userID' => $userID));
    }

    public function isArtist($userID){
    		$artistID = $this->_db->select("SELECT * FROM vry_users INNER JOIN vry_artists ON vry_users.userID=vry_artists.userID WHERE vry_users.userID = :userID", array(':userID' => $userID));
    		if(!empty($artistID)){
    			return $artistID[0]->artistID;
    		}
    		else{
    			return false;
    		}
    }

    public function getAlbums($artistID){
				return $this->_db->select("SELECT * FROM vry_albums WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }

    public function getVideos($artistID){
				return $this->_db->select("SELECT * FROM vry_video WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }

    public function getStreams($artistID){
				return $this->_db->select("SELECT * FROM vry_streams WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }        
}

