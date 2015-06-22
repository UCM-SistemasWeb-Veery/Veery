<?php namespace models;
require_once 'vendor/mandrill/mandrill/src/Mandrill.php';
use \core\model as Model;

class UserModel extends Model{
    public function getUser($userHandle)
    {
       return $this->_db->select("SELECT * FROM vry_users WHERE userHandle = :userHandle", array(':userHandle' => $userHandle));
    }

    public function getUserByEmail($userEmail)
    {
        return $this->_db->select("SELECT * FROM vry_users WHERE userEmail = :userEmail", array(':userEmail' => $userEmail));
    }

    public function getUserPosts($userID)
    {
        return $this->_db->select("SELECT * FROM vry_user_posts WHERE userID = :userID", array(':userID' => $userID));
    }

    public function isArtist($userID)
    {
		$artistID = $this->_db->select("SELECT * FROM vry_users INNER JOIN vry_artists ON vry_users.userID=vry_artists.userID WHERE vry_users.userID = :userID", array(':userID' => $userID));
		if(!empty($artistID)){
			return $artistID[0]->artistID;
		}
		else{
			return false;
		}
    }

    public function getFollowers($userID)
    {
        return $this->_db->select("SELECT followerID FROM vry_followers WHERE userID = :userID", array(':userID' => $userID));
    }

    public function isFollowing($userID, $followerID)
    {
        $isFollowing = false;

        $foundSomething = $this->_db->select("SELECT * FROM vry_followers WHERE userID = :userID AND followerID = :followerID", array(':userID' => $userID, ':followerID' => $followerID));

        if(!empty($foundSomething)){
            $isFollowing = true;
        }

        return $isFollowing;
    }

    public function followUser($userID, $followerID)
    {
        $relationID = array(
            'userID' => $userID,
            'followerID' => $followerID
        );
        $this->_db->insert('vry_followers', $relationID);
    }

    public function unfollowUser($userID, $followerID)
    {
        $relationID = array(
            'userID' => $userID,
            'followerID' => $followerID
        );
        $this->_db->delete('vry_followers', $relationID);
    }

    public function getFollowing($userID)
    {
        return $this->_db->select("SELECT userID FROM vry_followers WHERE followerID = :userID", array(':userID' => $userID));
    }

    public function getAlbums($artistID)
    {
		return $this->_db->select("SELECT * FROM vry_albums WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }

    public function getVideos($artistID)
    {
		return $this->_db->select("SELECT * FROM vry_video WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }

    public function getStreams($artistID)
    {
		return $this->_db->select("SELECT * FROM vry_streams WHERE artistID = :artistID", array(':artistID' => $artistID));    	
    }

    public function uniqueUser($userHandle, $userEmail)
    {
        $matchFound = true;

        $foundSomething = $this->_db->select("SELECT * FROM vry_users WHERE userHandle = :userHandle OR userEmail = :userEmail", array(':userHandle' => $userHandle, ':userEmail' => $userEmail));

        if(!empty($foundSomething)){
            $matchFound = false;
        }

        return $matchFound;
    }

    public function createUser($user)
    {
        $this->_db->insert("vry_users", $user);
        try {
            $mandrill = new \Mandrill('UdCR1EPItIwbRlDq5VFu_w');
            $message = array(
                'html' => '
                    <img src="http://veery.es/img/veryLogo.png" alt="Veery Logo" style="max-width: 250px; display: block; margin: 50px auto;">
                    <p>Complete su registro:</p>
                    <a href="'.PATH.'users/verify/'.$user['userEmail'].'/'.$user['userHash'].'">Click me!</a>

                ',
                'text' => 'Un último paso...',
                'subject' => 'Bienvenido a Veery!',
                'from_email' => 'noreply@veery.es',
                'from_name' => 'Veery. Social Streaming',
                'to' => array(
                    array(
                        'email' => $user['userEmail'],
                        'name' => $user['userHandle'],
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => 'noreply@veery.es'),
                'important' => false
            );
            $async = true;
            $result = $mandrill->messages->send($message, $async);
        } catch(Mandrill_Error $e) {
            // Mandrill errors are thrown as exceptions
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
            throw $e;
        }
    }

    public function updateUser($user,  $where)
    {
         $this->_db->update("vry_users", $user, $where);
    }

    public function verifyUser($user,  $where)
    {
         $this->_db->update("vry_users", $user, $where);
    }
}

