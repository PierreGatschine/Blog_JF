<?php

require_once 'model/userManager.php';

/*
 * $userManager = new UserManager();
if (!empty($_POST)) {
    if (!isset($_POST['login']) OR ! isset($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_data');
        exit();
    }
    if (empty($_POST['pseudo'])) {
        header('Location:../view/frontend/login.php?message=no_login');
        exit();
    } elseif (empty($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_password');
        exit();
    } else {

        $result = $userManager->connect($_POST['login'], $_POST['password']);
        if (!isset($result)) {
            header('Refresh:2, url=../view/frontend/login.php?message=internal_error');
            echo'Mauvais identifiant ou mot de passe !';
        } else {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['login'] = $result['login'];
            echo 'Vous êtes connecté !';
            header('Location:../view/backend/admin.php');
        }
    }
}
 */
function connexion($login, $password) 
{
    $adminManager = new NotreAgenceWeb\blog_JF\Model\CommentManager();

    $adminInfo = $adminManager->connexion($_POST['login'], $_POST['password']);

        if (is_array($adminInfo)) 
        { // on vérifie que l'on est en présence d'un tableau, car la méthode checkLogin retourne soit un tableau (dans la variabe $adminInfo), soit false.
        $_SESSION['admin'] = true;
        $_SESSION['login'] = $adminInfo['pseudo']; // va chercher l'info pseudo contenu dans le tableau data contenu dans la variable adminInfo lorsque status = ok
        $_SESSION['password'] = $adminInfo['email'];
        header('Location: index.php?action=adminIndex');
        } 
        else {
        $this->error('Votre pseudo ou votre mot de passe est incorrect !');
    }
}
