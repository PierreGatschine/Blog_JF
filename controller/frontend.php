<?php

require_once('model/EpisodeManager.php');
require_once('model/CommentManager.php');

use \NotreAgenceWeb\blog_JF\Model\EpisodeManager;
use  \NotreAgenceWeb\blog_JF\Model\CommentManager;

function author()
{
    require('view/frontend/author.php');
}


function listEpisodes()
{
    $episodeManager = new EpisodeManager();
    $episodes = $episodeManager->getEpisodes();
    $maxId = $episodeManager->getMaxId();

    require('view/frontend/listEpisodesView.php');
}

function episode()
{
    $episodeManager = new EpisodeManager();
    $commentManager = new CommentManager();

    $episode = $episodeManager->getEpisode($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/episodeView.php');
}

function addComment($episodeId, $idMax, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->episodeComment($episodeId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter le commentaire !");
    } else {
        header('Location: index.php?action=episode&id=' . $episodeId . '&idmax=' . $idMax);
    }
}

function reportComment($idComment, $episodeId, $idMax)
{
    $commentManager = new CommentManager();
    $report = $commentManager->reportComment($_GET['id']);
    if ($report > 0) {
        header('location: index.php?action=episode&id=' . $episodeId . '&idmax=' . $idmax);
    } else {
        throw new Exception(' aucun identifiant de billet envoyé');
    }
}
