<?php
require_once('model/EpisodeManager.php');
require_once('model/CommentManager.php');
require_once('model/userManager.php');

use \NotreAgenceWeb\blog_JF\Model\EpisodeManager;
use  \NotreAgenceWeb\blog_JF\Model\CommentManager;


function admin()
{

    require('view/backend/admin.php');
}

function writeEpisode()
{
    require('view/backend/write.php');
}

function validateDelete()
{
    require('view/backend/validateDelete.php');
}

function listPosts()
{
    $episodeManager = new EpisodeManager();
    $episodes = $episodeManager->getEpisodes();

    require ('view/backend/listPosts.php');
}

function post()
{
    $postManager = new EpisodeManager();
    $commentManager = new CommentManager();
    $post = $postManager->getEpisode($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/post.php');
}

function editEpisode()
{
    $episodeManager = new EpisodeManager();
    $posts = $episodeManager->getEpisodes();

    require('view/backend/editPost.php');
}

function addEpisode ($title,$content, $image, $create_date)
{
    $postManager = new EpisodeManager();
    $affectedLines = $postManager->addEpisode($title, $content, $image, $create_date);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter l'épisode !");
    } else {
        header('Location: index.php?action=editEpisode');
    }
}

function updateEpisode($episodeId, $title, $content, $image, $create_date)
{
    $postManager = new EpisodeManager();
    $update = $postManager->updateEpisode($episodeId, $title, $content, $image, $create_date);
    if ($update === false)
    {
        throw new Exception(" impossible de modifier l'épisode !");
    }
    else
    {
        header('location: index.php?action=editEpisode');
    }
}

function changeEpisode($idEpisode)
{
    $postManager = new EpisodeManager();
    $episode = $postManager->getEpisode($idEpisode);
    require('view/backend/write.php');
}

function deleteEpisode($episodeId)
{
    $postManager = new EpisodeManager();
    $delete = $postManager->deleteEpisode($episodeId);
    if ($delete === false)
    {
        throw new Exception("impossible de supprimer l'episode !" );
    }
    else
    {
        header('location: index.php?action=editEpisode');
    }
}

function manageComments()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->getAllComments();
    $test = $commentManager->testReport();
    $report = $commentManager->getReport();
    require('view/backend/manageComments.php');
}

function changeComment($commentId)
{
    $commentManager = new CommentManager();
    $comment = $commentManager->getComments($commentId);
    require('view/backend/updateComments.php');
}

function updateComment($idComment, $comment)
{
    $commentManager = new CommentManager();
    $update = $commentManager->updateComment($idComment, $comment);
    if ($update === false) {
        throw new Exception(' Impossible de modifier le commentaire');
    } else {
        header('location: index.php?action=udapteComment');
    }
}

function deleteComment($idComment)
{
    $commentManager = new CommentManager();
    $delete = $commentManager->deleteComment($idComment);
    if ($delete === false) {
       throw new Exception("Impossible d'effacer le commentaire !");
   } else {
      header('location: index.php?action=manageComments');
  }
}

