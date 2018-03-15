<?php
session_start();
require('controler/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment'], $_POST['report'] = 0);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }

                } elseif ($_GET['action'] == 'signalComment') {
                if (!empty($_GET['id']) && $_GET['id'] > 0) {
                    signalComment($_GET['id'], $_GET['episodeId']);
                } else {
                    throw new Exception('L\'identifiant du billet n\'existe pas !');
                }

        } else {
            listPosts();
        }
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}