<?php
require('model/frontend.php');

function listPosts()
{
    $posts = getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comment = getComment($_GET['id']);

    require('view/frontend/postView.php');
}
function addComment($episodeId, $author, $comment)
{
    $affectedLines = postComment($episodeId, $author, $comment);

    if ($affectedLines === false) {
       throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $episodeId);
    }
}


