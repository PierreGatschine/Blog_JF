<?php

namespace NotreAgenceWeb\blog_JF\Model;
require_once("model/Manager.php");

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
}