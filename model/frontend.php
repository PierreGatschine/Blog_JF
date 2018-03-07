<?php

function getPosts()
{

    $db = dbConnect();
    $req = $db->query('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\') 
    AS creation_date_fr FROM episode ORDER BY create_date DESC LIMIT 0, 5');

    return $req;
}

function getPost($episodeId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\')
    AS creation_date_fr FROM episode WHERE id = ?');
    $req->execute(array($episodeId));
    $post = $req->fetch();

    return $post;
}


function getComment($episodeId)
{
    $db = dbConnect();
    $comment = $db->prepare('SELECT id, author, comment, DATE_FORMAT(date_comment, \'%d-%m-%Y à %Hh%imin%ss\') 
    AS comment_date_fr FROM comment WHERE episode_id = ? ORDER BY date_comment DESC');
    $comment->execute(array($episodeId));

    return $comment;

}

function postComment($episodeId, $author, $comment)
{
    $db = dbConnect();
    $comment = $db->prepare('INSERT INTO comment (episode_id, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comment->execute(array($episodeId, $author, $comment));

    return $affectedLines;
}

function dbConnect()
{
        $db = new PDO('mysql:host=localhost;dbname=blog_d_ecrivain;charset=utf8', 'root', 'root');
        return $db;
}
