<?php

namespace NotreAgenceWeb\blog_JF\Model;

require_once("model/Manager.php");



class CommentManager extends Manager
{
  public function getComments($episodeId)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, episode_id, report, DATE_FORMAT(date_comment, \'%d\%m\%Y\') 
      AS comment_date_fr FROM comment WHERE episode_id = ? ORDER BY date_comment DESC');
    $comments->execute(array($episodeId));

    return $comments;
  }

  public function getComment($idComment)
  {
    $db = $this->dbConnect();
    $comment = $db->prepare('SELECT *, DATE_FORMAT(date_comment, \'%d\%m\%Y\') AS comment_date_fr FROM comment WHERE id = ?');
    $comment->execute(array($idComment));
    $comment = $comment->fetch();
    return $comment;

  }

  public function episodeComment($episodeId, $author, $comment)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO comment (episode_id, author, comment, date_comment, report) VALUES(?, ?, ?, NOW(),0)');
    $affectedLines = $comments->execute(array($episodeId, $author, $comment));

    return $affectedLines;
  }

  public function getAllComments()
  {
    $db = $this->dbConnect();
    $comments = $db->query('SELECT *, DATE_FORMAT(date_comment, \'%d\%m\%Y\') AS comment_date_fr FROM comment ORDER BY date_comment DESC');
    return $comments;
  }

  public function selectComment($idComment)
  {
    $db = $this->dbConnect();
    $comment = $db->prepare('SELECT id, comment, episode_id FROM comment WHERE id = ?');
    $comment->execute(array($idComment));
    $comment = $comment->fetch();
    return $comment;
  }

  public function getMaxComment($episodeId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT COUNT(*) AS nbr_id FROM comment WHERE episode_id = ?');
    $req->execute(array($episodeId));
    $req = $req->fetch();
    return $req;
  }


    public function updateComment($idComment, $comment) 
    {
      $db = $this->dbConnect();
      $update = $db->prepare('UPDATE comment SET comment = ?, report = 0 WHERE id = ?');
      $update->execute(array($comment, $idComment));
      return $update;
    }

    public function deleteComment($idComment) {
      $db = $this->dbConnect();
      $comment = $db->prepare( 'DELETE FROM comment WHERE id = ?');
      $comment->execute(array($idComment));
      return $comment;
    }

    public function reportComment($idComment)
    {
      $db = $this->dbConnect();
      $report = $db->prepare('UPDATE comment SET report = 1 WHERE id = ?');
      $report->execute(array($idComment));
      return $report;
    }

    public function testReport()
    {
      $db = $this->dbConnect();
      $req = $db->query('SELECT * FROM comment WHERE report = 1');
      $req = $req->fetch();
      return $req;
    }
    public function getReport()
    {
      $db = $this->dbConnect();
      $req = $db->query('SELECT *, DATE_FORMAT(date_comment, \'%d\%m\%Y\') AS comment_date_fr  FROM comment WHERE report= 1 ORDER BY date_comment DESC');
      return $req;
    }
  }

