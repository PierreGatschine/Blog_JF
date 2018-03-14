<?php

namespace NotreAgenceWeb\blog_JF\Model;
require_once("model/Manager.php");
require_once("model/Comment.php");

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

    /* 
    public function showAllComments() {
        $comments = array();
        $db = $this->dbConnect();
        $q = $db->query('SELECT * FROM comment');
        while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = new Comment($data);
        }
        return $comments;
    }
    public function countComments() {
        $req = $this->_db->query('SELECT COUNT(*) AS nbcomment, episode_id FROM comment WHERE report = 0 GROUP BY episode_id');
        $data = $req->fetchAll();
        $req->closecursor();
        return $data;
    }
    //front-office : Ils signalent le commentaire : moderation passe à 1
    public function reportComment($id) {
        $req = $this->_db->prepare('UPDATE comment SET report = 1 WHERE id = :id');
        $req->execute(array('id'=> $id));
    }
    //back-office : Jean  decide de l'accepter : moderation repasse à 0
    Public function validate($id) {
        $req = $this->_db->prepare('UPDATE comment SET report = 0 WHERE id = :id');
        $req->execute(array('id'=> $id));
    }
    //back-office : Jean decide de le bannir : moderation passe à 2s
    public function ban($id) {
        $req = $this->_db->prepare('UPDATE comment SET report = 2 WHERE id = :id');
        $req->execute(array('id'=> $id));
    }

    public function signaledComment($id) {
        $req = $this->_db->prepare('SELECT id FROM comment WHERE id= :id AND report > 0');
        $req->execute(array('id' => $id));
        $signal = $req->fetch();
        if (empty($signal)) {
            return false;
        } else {
            return true;
        }
    }
    */
    public function selectComment($commentId)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, comment, episode_id FROM comment WHERE id = ?');
        $comment->execute(array($commentId));
        $comment = $comment->fetch();
        return $comment;
    }
    public function editComment($commentId, $comment) // fonction qui permet de modifier un commentaire
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comment SET comment = ?, report = 0 WHERE id = ?');
        $req->execute(array($comment, $commentId));
        $edit = $req->rowCount(); // permet de compter le nombre de ligne affectées par la dernière requête
        return $edit;
    }
    public function signalComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comment SET report = 1 WHERE id = ?');
        $req->execute(array($commentId));
        $signal = $req->rowCount(); // permet de compter le nombre de ligne affectées par la dernière requête
        return $signal;
    }
        public function getCommentsSignalised() // récupère les commentaires signalés associés à un id de post
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT comment.id, episode.title, comment.episode_id, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y (%Hh%imin%ss)\') AS comment_date_fr FROM comment INNER JOIN episode ON episode.id = comment.episode_id WHERE report = 1 ORDER BY date_comment DESC');
        return $comments;
    }
    public function deleteComment($commentId) { // permet de supprimer un commentaire de la bdd
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comment WHERE id = ?');
        $req->execute(array($commentId));
        $delete = $req->rowCount(); // permet de compter le nombre de ligne affectées par la dernière requête
        return $delete;
    }
}