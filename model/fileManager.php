<?php


namespace NotreAgenceWeb\blog_JF\Model;

require_once('model/Manager.php');

class fileManager
{
    public function upload($imgFiles, $episode)
    {
        if(isset($imageFiles['image']) AND $imageFiles['image']['error']== 0)
        {

            if($imageFiles['image']['size']<=1000000)
            {
                $filedatas = pathinfo($imageFiles['image']['name']);
                $extention_upload = $filedatas['extension'];
                $allowed_extension = array('png','jpeg','jpg','gif');
                if(in_array($extention_upload,$allowed_extension))
                {
                    move_uploaded_file($imageFiles['image']['tmp_name'],'public/images/'.basename($episode).'.'.$extention_upload);
                }
            }
        }
    }
}