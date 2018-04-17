<?php $title = "Ecriture d'un épisode"; ?>



<?php ob_start(); ?>


<div class="container">

    <h4 class="header blue-text">Ecrire ou modifier un épisode</h4>

    <div class="row">
        <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
    </div>


    <!-- Episode to edit -->

    <?php
    if(!empty($posts['id']))
    {

        ?>
        
        <form action="index.php?action=updateEpisode&amp;id=<?=$posts['id']; ?>" method="post">
            <div class="row">
                <div class="input-field col l8 s12">

                    <i class="material-icons prefix">title</i>
                    <label for="title">Titre</label><br />  
                    <input type="text" name="title" value="<?= $posts['title']; ?>">   
                </div>

                <div class="input-field col s12">
                    <textarea name="content"><?= $pots['content']; ?></textarea>
                </div>
            </div>



        <form action="index.php?action=updateEpisode&amp;id=<?=$posts['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="file-field input-field col l8 s12">
                    <i class="material-icons prefix">insert_photo</i>
                    <label for="fileName">Nom du fichier(après upload)</label><br />
                        <input type="text" name="fileNam" id="image" value=""/>
                    </div>
                    <div class="file-path-wrapper">
                        <input type="file" name="fichier" id=""/>
                    </div>
                        <input type="submit" value="Enregistrer"/>
                </div>       
            </div>



    <!-- Episode to write -->

            <?php
        }  
        else
        {
           
            ?>

            <form action="index.php?action=addEpisode" method="post">
                <div class="row">
                    <div class="input-field col l8 s12">

                        <i class="material-icons prefix">title</i>
                        <label for="title">Titre</label><br />
                        <input type="text" name="title">
                    </div> 
                    <br/> <br/> 
                    <div class="input-field col s12">                                        
                        <textarea name="content"></textarea>
                    <br/> <br/>        
                    </div>

            


            


            <form action="index.php?action=addEpisode" method="post" enctype="multipart/form-data">
 
                <div class="row">

                    <i class="material-icons prefix">insert_photo</i>
                    <label for="photo">Ajouter une image</label><br />
                    <input type="file" name="image">
                </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>    
                </div>
               

            <?php
                
            }
            ?>
               

                
            <div class="row">    
                <div class="input-field col l10 s12">
                    <button class="btn-floating btn-large right waves-effect waves-light blue hoverable" type="submit" name="action"><i class="material-icons">publish</i></button>
                </div>
            </div>
        </form>

    </div>

    <?php $content = ob_get_clean(); ?>

    <?php require('templateBackend.php'); ?>



<!--<form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Ajouter une image">
      </div>
    </div>
  </form>-->

<!--<div class="file-field input-field col l8 s12">
                        <i class="material-icons prefix">insert_photo</i>
                        <label for="fileName">Nom de l'image f</label><br />
                        <p><input type="file" name="fichier" id=""/></p>
                        
                            <input type="submit" value="Enregistrer"/>
                    </div>-->

