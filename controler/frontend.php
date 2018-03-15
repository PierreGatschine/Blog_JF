<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new NotreAgenceWeb\blog_JF\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new NotreAgenceWeb\blog_JF\Model\PostManager();
    $commentManager = new NotreAgenceWeb\blog_JF\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComment($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($episodeId, $author, $comment)
{
    $commentManager = new NotreAgenceWeb\blog_JF\Model\CommentManager();

    $affectedLines = $commentManager->postComment($episodeId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&amp;id=' . $episodeId);
    }
}

/*
 * function signal()
 * {
    $commentSignal = new CommentManager();
    $signal = $commentSignal->reportComment($id);
    header('Location : index.php#comments');
    }
 */

// COMMENTS
function signal($commentId, $postId)
{
    $commentManager = new NotreAgenceWeb\blog_JF\Model\CommentManager();
    $signal = $commentManager->signalComment($commentId);
    if ($signal > 0) {
        header('Location: index.php?action=post&amp;id=' . $postId);
    } else {
        $this->error('Ce message a déjà été signalé et va être modéré prochainement, merci !');
    }
}





