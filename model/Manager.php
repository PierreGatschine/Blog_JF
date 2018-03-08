<?php

namespace JeanForteroche\blog_JF\Model;

    class Manager
    {
        protected function dbConnect()
        {
            $db = new \PDO('mysql:host=localhost;dbname=blog_d_ecrivain;charset=utf8', 'root', 'root');
            return $db;
        }
    }
