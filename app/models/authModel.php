<?php namespace models;
class AuthModel extends \core\model{
	public function getHash($userHandle)
    {
		$data = $this->_db->select("SELECT userPassword FROM vry_users WHERE userHandle = :userHandle", array(':userHandle' => $userHandle));
		if(!empty($data)){
			return $data[0]->userPassword;
		}
		else{
			return false;
		}
	}

    public function getUserId($userHandle)
    {
        $data = $this->_db->select("SELECT userID FROM vry_users WHERE userHandle = :userHandle",array(':userHandle' => $userHandle));
        return $data[0]->userID;
    }

    public function isActive($userHandle)
     {
        $active = true;
        $user = $this->_db->select("SELECT userActive FROM vry_users WHERE userHandle = :userHandle", array(':userHandle' => $userHandle));
        if($user[0]->userActive == 0)
        {
            $active = false;
        }

        return $active;
     }
}
