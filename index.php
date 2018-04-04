<?php
require('controller/frontend.php');
require('controller/backend.php');
require('controller/connexion.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listEpisodes') {
            listEpisodes();
        }elseif ($_GET['action'] == 'author') {
            author();
        }elseif ($_GET['action'] == 'episode') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                episode();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_GET['idMax'], htmlspecialchars($_POST['author']), nl2br(htmlspecialchars($_POST['comment'])));
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'reportComment') {
            if (isset($_GET['id']) && isset($_GET['episodeId']) && isset($_GET['idmax'])) {
                reportComment($_GET['id'], $_GET['episodeId'], $_GET['idmax']);
            } else {
                throw new Exception("L'identifiant du billet n'existe pas !");
            }
        } elseif ($_GET['action'] == 'login')
        {
            login();
        }
        elseif ($_GET['action'] == 'connexion')
        {
            if (isset($_POST['login']) && isset($_POST['password']))
            {
                connexion($_POST['login'], $_POST['password']);
            }
            else
            {
                throw new Exception("Vous n'etes pas connecté  !" );
            }
        }
        elseif ($_GET['action'] == '')
        {
            listEpisodes();
        }

        // Backend
        
        else

        {
            session_start();
            
            if (isset($_SESSION['login']))
            {
                if ($_GET['action'] == 'admin')
                {
                    admin();
                }
                elseif ($_GET['action'] == 'listPosts')
                {
                    listPosts();
                }
                elseif ($_GET['action'] == 'editEpisode')
                {
                    editEpisode();
                }
                elseif ($_GET['action'] == 'writeEpisode')
                {
                    writeEpisode();
                }
                elseif ($_GET['action'] == 'manageComments')
                {
                    manageComments();
                }
                elseif ($_GET['action'] == 'addEpisode')
                {
                    if (!empty($_POST['content']) && !empty($_POST['title']))
                    {
                        addEpisode($_POST['content'], $_POST['title']);
                    }
                    else
                    {
                        throw new Exception(' tous les champs ne sont pas remplis !');
                    }
                }
                elseif ($_GET['action'] == 'validateDelete')
                {
                    if (isset($_GET['id']))
                    {
                        validateDelete();
                    }
                    else
                    {
                        throw new Exception(' aucun identifiant de billet envoyé');
                    }
                }
                elseif ($_GET['action'] == 'deleteEpisode')
                {
                    if (isset($_GET['id']))
                    {
                        deleteEpisode($_GET['id']);
                    }
                    else
                    {
                        throw new Exception(' aucun identifiant de billet envoyé');
                    }
                }
                elseif ($_GET['action'] == 'changeEpisode')
                {
                    if (isset($_GET['id']))
                    {
                        changeEpisode($_GET['id']);
                    }
                    else
                    {
                        throw new Exception(' aucun identifiant de billet envoyé');
                    }
                }
                elseif ($_GET['action'] == 'updateEpisode')
                {
                    if (isset($_GET['id']) && !empty($_POST['content']) && !empty($_POST['title']) && !empty($_POST['image']) && !empty($_POST['create_date']))
                    {
                        updateEpisode($_GET['id'], $_POST['content'], $_POST['title'], $_POST['image'],  $_POST['create_date']);
                    }
                    else
                    {
                        throw new Exception(' tous les champs ne sont pas remplis !');
                    }
                }
                elseif ($_GET['action'] == 'deleteComment')
                {
                    if (isset($_GET['id']))
                    {
                        deleteComment($_GET['id']);
                    }
                    else
                    {
                        throw new Exception(' aucun identifiant de billet envoyé');
                    }
                }
                elseif ($_GET['action'] == 'changeComment')
                {
                    if (isset($_GET['id']))
                    {
                        changeComment($_GET['id']);
                    }
                    else
                    {
                        throw new Exception(' aucun identifiant de billet envoyé');
                    }
                }
                elseif ($_GET['action'] == 'updateComment')
                {
                    if (isset($_GET['id']) && !empty($_POST['comment']))
                    {
                        updateComment($_GET['id'], $_POST['comment']);
                    }
                    else
                    {
                        throw new Exception(' tous les champs ne sont pas remplis !');
                    }
                }
            }
            else
            {
                throw new Exception(' vous n\'avez pas accès, veuillez vous connecter');
            }
        }
    }

    else {
        listEpisodes();
    }

}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    echo '<br/>Vous allez être redirigé sur la page d\'accueil du blog dans 10 secondes';
    //echo '<META HTTP-EQUIV="Refresh" CONTENT="10;index.php?action=listEpisodes">';
}
