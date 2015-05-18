<?php namespace models;
class AuthModel extends \core\model{
	public function getHash($userHandle){
			$data = $this->_db->select("SELECT userPassword FROM vry_users WHERE userHandle = :userHandle", array(':userHandle' => $userHandle));
			if(!empty($data)){
				return $data[0]->userPassword;
			}
			else{
				return false;
			}
	}
}
