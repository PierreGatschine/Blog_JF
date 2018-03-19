<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/userManager.php');

use \NotreAgenceWeb\blog_JF\Model\PostManager;
use  \NotreAgenceWeb\blog_JF\Model\CommentManager;


function login() {

    require('view/backend/admin.php');
}

function admin(){

    require('view/backend/admin.php');
}

function listPosts() {
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $posts = $postManager->getPosts();

   require ('view/backend/listPosts.php');
}

function post() {
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComment($_GET['id']);
    require('view/backend/post.php');
}
function addEpisode ($title,$content)
{
$postManager = new PostManager();

    $affectedLines = $postManager->addEpisode($title, $content);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter l'épisode !");
    } else {
        header('Location: index.php?action=post&amp;id=' . $title);
    }
}


function updateEpisode() {
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


function updateComment() {
    $commentmanager = new CommentManager();
    $commentmanager->updateComment($_POST['author'], $_POST['comment'], $_GET['id']);
    header('Location: index.php');
}

function deleteComment($getid) {
    $commentmanager = new CommentManager();
    $comment = $commentManager->deleteComment($_GET['id']);
    header('Location : admin.php?action=deleteComment');
}
// Reporte les commentaires signalés
function reportComment($postId, $id, $commentManager) {
    if (isset($report)) {
        if ($commentManager->signaledComment($report) == FALSE) {
            $commentManager->reportcomment($report);
            $commentManager->validate($id);
        } else {
            $commentManager->updateSignaled();
            echo'Attention message déjà signalé';
        }
    }
    header('Location: index.php?action=comment&id=' . $postId, $id);
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
}*/