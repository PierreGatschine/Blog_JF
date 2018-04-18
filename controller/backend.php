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

function addEpisode ($title,$content, $image, $file_url)
{
    
    $postManager = new EpisodeManager();
    $affectedLines = $postManager->addEpisode($title, $content, $image, $file_url);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter l'épisode !");
    } 
        if (!empty($_FILES)) {
            $file_name = $_FILES['fichier']['name'];
            $file_extension = strchr($file_name, ".");

            $file_tmp_name = $_FILES['fichier']['tmp_name'];
            $file_dest = 'images/' . $file_name;

            $extension_autorisees = array('.png', '.jpg', '.jpeg');

            if (in_array($file_extension, $extension_autorisees)) {

                if (move_uploaded_file($file_tmp_name, $file_dest)) {


                    echo "Fichier envoyé avec succés";
                } else {
                    echo "Une erreur est survenue lors de l'envoi du fichier";
                }

            } else {
                echo 'Seuls les fichiers png, jpg et jpeg sont autorisés';
            }
        }
    else {
            header('Location: index.php?action=listPosts');
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
            header('location: index.php?action=listPosts');
        }
    }

    function changeEpisode($idEpisode)
    {
        $postManager = new EpisodeManager();
        $posts = $postManager->getEpisode($idEpisode);
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
        $comment = $commentManager->getComment($commentId);
        require('view/backend/updateComments.php');
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

