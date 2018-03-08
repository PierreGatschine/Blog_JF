<?php

namespace JeanForteroche\blog_JF\Model;
require_once("model/Manager.php");
class CommentManager extends Manager
{
    public function getComment($episodeId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(date_comment, \'%d-%m-%Y à %Hh%imin%ss\') 
    AS comment_date_fr FROM comment WHERE episode_id = ? ORDER BY date_comment DESC');
        $comments->execute(array($episodeId));

        return $comments;

    }

    public function postComment($episodeId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comment (episode_id, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($episodeId, $author, $comment));

        return $affectedLines;
    }
}