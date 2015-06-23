<?php namespace models;

use \core\model as Model;

class AlbumModel extends Model{
    public function getAlbum($limit = 27){
        return $this->_db->select("SELECT * FROM vry_user_posts INNER JOIN vry_users ON vry_user_posts.userID=vry_users.userID LIMIT :limit", array(':limit' => $limit));
    }

    public function getSong($slug){
        return $this->_db->select("SELECT * FROM vry_user_posts WHERE slug = :slug", array(':slug' => $slug));
    }

    public function createAlbum($album)
    {
        return $this->_db->insert('vry_albums', $album);
    }

    public function registerSongs($songs)
    {
        foreach ($songs as $song) {
            $saved[] =  $this->_db->insert('vry_songs', $song);
        }
        return $saved;
    }

    public function getArtist($userID)
    {
        return $this->_db->select("SELECT * FROM vry_users WHERE userID = :userID", array(':userID' => $userID));
    }

    public function getArtistID($userID)
    {
        return $this->_db->select("SELECT artistID FROM vry_artists WHERE userID = :userID", array(':userID' => $userID));
    }
}

