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
    $postManager = new EpisodeManager();
    $commentManager = new CommentManager();
    $posts = $postManager->getEpisodes();

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
    $post = $episodeManager->getEpisodes();

    require('view/backend/editPost.php');
}

function addEpisode ($title,$content)
{
    $postManager = new EpisodeManager();
    $affectedLines = $postManager->addEpisode($title, $content);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter l'épisode !");
    } else {
        header('Location: index.php?action=post&id=' . $title);
    }
}

function updateEpisode($episodeId, $title, $content)
{
    $postManager = new EpisodeManager();
    $update = $postManager->updateEpisode($episodeId, $title, $content);
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
        throw new Exception("impossible de modifier l'episode !" );
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
    require('view/backend/write.php');
}

function updateComment($idComment, $comment)
{
    $commentManager = new CommentManager();
    $update = $commentManager->updateComment($idComment, $comment);
    if ($update === false) {
        throw new Exception(' Impossible de modifier le commentaire');
    } else {
        header('location: index.php?action=manageComments');
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

/*function addEpisode() {
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'];
    if ((!empty($title)) && (!empty($content))) {
        $post = new post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setUserId('1');

        $episodeAdd = new PostManager();
        $addEpisode = $episodeAdd->addPost($post);

        header('Location: editPost.php');
    }else {
        throw new Exception("L'episode n'a pas été ajouté");
    }
}
function updateEpisode()
{
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'];
    $id = htmlspecialchars($_POST['id']);
    if ((!empty($title)) && (!empty($content)) && (!empty($id))) {
        $post = new Post();
        $post->setTitle($title);
        $post->setContent($content);
        $episodeUpdate = new PostManager();
        $updateEpisode = $episodeUpdate->updatePost($post);
        header('Location : admin.php?action=editPost');
    }else {
        throw new Exception("L'episode n'a pas été modifié");
    }
}

function deleteEpisode() {
    $id = htmlspecialchars($_POST['id']);

    if(!empty($id)){

        $deleteEpisode =new PostManager();
        $EpisodeDelete = $deleteEpisode ->deletePost($id);

        header('Location : admin.php?action=editPost');
    }else {
        throw new Exception("L'episode n'a pas été supprimé");
    }
}

function updateComment()
{
    $commentManager = new CommentManager();
    $commentManager->updateComment($_POST['author'], $_POST['comment'], $_GET['id']);
    header('Location: index.php');
}

function deleteComment($getid) {
    $commentmanager = new CommentManager();
    $comment = $commentManager->deleteComment($_GET['id']);
    header('Location : admin.php?action=deleteComment');
}

// Reporte les commentaires signalés
    function reportComment($episodeId, $id, $commentManager)
    {
        if (isset($report)) {
            if ($commentManager->reportComment($report) === FALSE) {
                $commentManager->reportcomment($report);
                $commentManager->validate($id);
            } else {
                $commentManager->updateSignaled();
                echo 'Attention message déjà signalé';
            }
        }
        header('Location: index.php?action=comment&id=' . $postId, $id);
    }
*/