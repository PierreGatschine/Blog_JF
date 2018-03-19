<?php

namespace NotreAgenceWeb\blog_JF\Model;

require_once('model/Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\') 
            AS creation_date_fr FROM episode ORDER BY create_date DESC LIMIT 0, 6');
        return $req;
    }

    public function getPost($episodeId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\')
            AS creation_date_fr FROM episode WHERE id = ?');
        $req->execute(array($episodeId));
        $post = $req->fetch();
        return $post;
    }

    public function addEpisode($content, $title)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('INSERT INTO episode(title, content, create_date) VALUES (?,?,NOW())');
        $affectedLines = $episode->execute(array($title, $content));
        return $affectedLines;
    }

    public function deleteEpisode($episodeId)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('DELETE FROM episode WHERE id=?');
        $episode->execute(array($episodeId));
        return $episode;
    }

    public function updateEpisode($episodeId, $title, $content)
    {
        $db = $this->dbConnect();
        $episode = $db->prepare('UPDATE episode SET title=?, content=? WHERE id=?');
        $episode->execute(array($episodeId, $title , $content));
        return $episode;
    }
}