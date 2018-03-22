<?php

require_once ('model/userManager.php');

use \NotreAgenceWeb\blog_JF\Model\userManager;

function login()
{
    require('view/frontend/login.php');
}


function connexion($login, $password)
{
    $userManager = new userManager();
    $user = $userManager->connect($login, $password);
    if (!empty($user))
    {
        session_start();
        $_SESSION['login'] = $login['id'];
        $_SESSION['password'] = $password['id'];
        header('location: index.php?action=admin');
    }
    else
    {
        throw new Exception(' utilisateur inconnu');
    }
}
