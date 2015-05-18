<?php namespace models;

use \core\model as Model;

class PostModel extends Model{
    public function getFeed($limit = 27){
        return $this->_db->select("SELECT * FROM vry_user_posts INNER JOIN vry_users ON vry_user_posts.userID=vry_users.userID LIMIT :limit", array(':limit' => $limit));
    }
    
    public function getPost($slug){
        return $this->_db->select("SELECT * FROM vry_user_posts WHERE slug = :slug", array(':slug' => $slug));
    }

    public function createPost($postData){
        $this->_db->insert('vry_user_posts', $postData);
    }
}

