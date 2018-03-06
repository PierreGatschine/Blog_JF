<?php
/**
 * Created by PhpStorm.
 * Date: 06/03/2018
 *connection to the Db
**/
function getEpisode(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog_d_ecrivain;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

//recovery of the last 5 messages
    $req = $bdd->query('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\') AS date_creation_fr FROM episode ORDER BY ID DESC LIMIT 0, 5');

    return $req;
}
