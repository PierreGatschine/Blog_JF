<?php

require_once ('model/userManager.php');

use \NotreAgenceWeb\blog_JF\Model\userManager;

function connexion($login, $password)
{
    $userManager = new userManager();
    $user = $userManager->connect($login, $password);
    if (!empty($user))
    {
        session_start();
        $_SESSION['login'] = $login['id'];
        header('location: index.php?action=admin');
    }
    else
    {
        throw new Exception(' utilisateur ineconnu');
    }
}

/*
$userManager = new UserManager();

if (!empty($_POST)) {
    if (!isset($_POST['login']) OR !isset($_POST['password'])) {
        header('Location:../view/frontend/connexion.php?message=no_data');
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
            header('Location:..view/frontend/login.php?message=internal_error');
            //echo 'Mauvais identifiant ou mot de passe !';
        } else {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['login'] = $result['login'];
            $_SESSION['password'] = $result['password'];
            echo 'Vous êtes connecté !';
            header('Lo cation:../view/backend/admin.php');
        }

    }
}
*/