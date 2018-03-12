<?php


namespace NotreAgenceWeb\blog_JF\Model;


class Comment
{
    protected $_id;
    protected $_episode_id;
    protected $_author;
    protected $_comment;
    protected $_comment_date;
    protected $_report;

    const NO_SIGNAL = 0;
    const SIGNAL = 1;
    const BANNED = 2;


    public function __construct($report) {
        $this->setReport($report);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getEpisodeId()
    {
        return $this->_episode_id;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function getComment()
    {
        return $this->_comment;
    }

    public function getCommentDate()
    {
        return $this->_comment_date;
    }

    public function getReport()
    {
        return $this->_report;
    }

    public function setId($id): void
    {
        $this->_id = $id;
    }

    public function setEpisodeId($episode_id): void
    {
        $this->_episode_id = $episode_id;
    }

    public function setAuthor($author): void
    {
        $this->_author = $author;
    }

    public function setComment($comment): void
    {
        $this->_comment = $comment;
    }

    public function setCommentDate($comment_date): void
    {
        $this->_comment_date = $comment_date;
    }

    public function setReport($report): void
    {
        $this->_report = $report;
    }
}

