<?php namespace models;

use \core\model as Model;

class VeeryModel extends Model{

    public function getFeed($userID, $limit = 27){
        //$userFollowers[] = User::getFollowers($userID);
        //$userFollowing[] = \models\userModel::getFollowers($userID);
        //return $userFollowing;
        //return $this->_db->select("SELECT * FROM vry_user_posts INNER JOIN vry_users ON vry_user_posts.userID=vry_users.userID ORDER BY vry_user_posts.postDate DESC LIMIT :limit ", array(':limit' => $limit));
        
        //$in = join(',', $userID);
        $posts = array();
        $feed = array();
        for($i = 0; $i < count($userID); $i++){
           //array_push($in,$userID[$i]->userID);
           //array_push($posts, $this->_db->select("SELECT * FROM vry_user_posts WHERE userID = :userID", array(':userID' => $userID[$i]->userID)));
           array_push($posts, $this->_db->select("SELECT * FROM vry_user_posts INNER JOIN vry_users ON vry_user_posts.userID=vry_users.userID WHERE vry_users.userID = :userID ORDER BY vry_user_posts.postDate DESC LIMIT :limit ", array(':userID' => $userID[$i]->userID, ':limit' => $limit)));
        }
        for($i = 0; $i < count($posts); $i++){
            for($j = 0; $j < count($posts[$i]); $j++){
                array_push($feed, $posts[$i][$j]);
            }
        }
        return $feed;
        //return $this->_db->select("SELECT * FROM vry_user_posts WHERE userID IN (:in)", array(':in' => $in));

    }


    public function getPost($slug){
        return $this->_db->select("SELECT * FROM vry_user_posts WHERE slug = :slug", array(':slug' => $slug));
    }
}

