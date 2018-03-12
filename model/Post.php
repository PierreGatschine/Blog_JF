<?php


namespace NotreAgenceWeb\blog_JF\Model;



class Post {
    protected $_id;
    protected $_title;
    protected $_author;
    protected $_content;
    protected $_create_date;


    public function __construct($data) {
        if (!empty($data)) {
            return $this->hydrate($data);
        }
    }
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId() {
        return $this->_id;
    }
    public function getTitle() {
        return $this->_title;
    }
    public function getAuthor() {
        return $this->_author;
    }
    public function getContent() {
        return $this->_content;
    }
    public function getCreateDate() {
        return $this->_create_date;
    }


    public function setId($id) {
        $this->_id = (int) $id;
    }
    public function setTitle($title) {
        if (is_string($title)) {
            $this->_title = $title;
        }
    }
    public function setAuthor($author) {
        $this->_author = (int) $author;
    }
    public function setContent($content) {
        if (is_string($content)) {
            $this->_content = $content;
        }
    }

    public function setCreateDate($create_date) {
        if (is_string($create_date)) {
            DateTime::createFromFormat('m/d/Y', $create_date);
        }
        $this->_create_date = $create_date;
    }
}
