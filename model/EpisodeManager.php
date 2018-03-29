<?php

namespace NotreAgenceWeb\blog_JF\Model;

require_once('model/Manager.php');

class EpisodeManager extends Manager
{
    public function getEpisodes()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, author, content, image, DATE_FORMAT(create_date, \'%d-%m-%Y \') 
            AS creation_date_fr, SUBSTR(content, 1, 500) AS extract FROM episode ORDER BY create_date DESC LIMIT 0, 6');
        return $req;
    }

    public function getEpisode($episodeId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, author, content, image,  DATE_FORMAT(create_date, \'%d-%m-%Y \')
            AS creation_date_fr FROM episode WHERE id = ?');
        $req->execute(array($episodeId));
        $episode = $req->fetch();
        return $episode;
    }

    public function getMaxId()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT MAX(id) AS id_max FROM episode');
        $req = $req->fetch();
        return $req;
    }

    public function addEpisode($content, $title)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('INSERT INTO episode(title, content, image, create_date) VALUES (?,?,NOW())');
        $affectedLines = $episode->execute(array($title, $content));
        return $affectedLines;
    }

    public function updateEpisode($idEpisode, $title, $content)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('UPDATE episode SET title=?, content=? WHERE id=?');
        $episode->execute(array($idEpisode, $title , $content));
        return $episode;
    }

    public function deleteEpisode($idEpisode)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('DELETE FROM episode WHERE id=?');
        $episode->execute(array($idEpisode));
        return $episode;
    }
}