<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

use \NotreAgenceWeb\blog_JF\Model\PostManager;
use  \NotreAgenceWeb\blog_JF\Model\CommentManager;

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

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

    $affectedLines = $commentManager->postComment($episodeId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter le commentaire !");
    } else {
        header('Location: index.php?action=postView&amp;id=' . $episodeId);
    }
}

function reportComment($commentId, $episodeId)
{
    $commentManager = new CommentManager();
    $signal = $commentManager->reportComment($commentId);
    if ($signal > 0) {
        header('Location: index.php?action=postView&amp;id=' . $episodeId);
    } else {
        $this->error('Ce message a déjà été signalé et va être modéré prochainement, merci !');
    }
}



// COMMENTS
/*
 * function signal()
 {
    $commentSignal = new CommentManager();
    $signal = $commentSignal->reportComment($id);
    header('Location : index.php#comments');
 }
 */





