<?php

require_once("model/PostManager.php");
require_once("model/CommentManager.php");

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();// Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComment($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($episodeId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = postComment($episodeId, $author, $comment);

    if ($affectedLines === false) {
       throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $episodeId);
    }
}



