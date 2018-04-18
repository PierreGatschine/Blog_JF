<?php


namespace NotreAgenceWeb\blog_JF\Model;

require_once('model/Manager.php');

class fileManager
{
    public function upload($image, $file_url)
    {
        if (!empty($_FILES)) {
        $file_name = $_FILES['image']['name'];
        $file_extension = strchr($file_name, ".");

        $file_tmp_name = $_FILES['image']['tmp_name'];
        $file_dest = 'images/' .$file_name;

        $extension_autorisees = array('.png', '.jpg', '.jpeg');

        if(in_array($file_extension, $extension_autorisees)){
            if (move_uploaded_file($file_tmp_name, $file_dest)) {
                

                echo "Fichier envoyé avec succés";
            }else{
                echo "Une erreur est survenue lors de l'envoi du fichier";
            }

        }else {
            echo 'Seuls les fichiers png, jpg et jpeg sont autorisés';
        }
    
    }
}