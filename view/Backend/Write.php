<?php $title = "Ecriture d'un épisode"; ?>



<?php ob_start(); ?>

<div class="container">

    <h4 class="header blue-text">Ecrire ou modifier un épisode</h4>

<div class="row">
    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
</div>


    <!-- Episode à modifier -->
    <?php
    if(!empty($episode['id']))
    {
        ?>
        
        <form action="index.php?action=updateEpisode&amp;id=<?=$episode['id']; ?>" method="post">
            <div class="row">
                    <div class="input-field col l8 s12">
                        <div class="card grey darken-3">
                            <i class="material-icons prefix">title</i>
                            <label for="title">Titre</label><br />  
                            <input type="text" name="title" value="<?= $episode['title']; ?>">
                        </div>    
                    </div>
                        <!--<textarea name="content"><//?= $episode['content']; ?></textarea>-->
                    <div class="input-field col s12">
                        <textarea id="content" name="content" class="materialize-textarea"><?= $episode['content']; ?></textarea>
                    </div>       
            </div>


    <!-- Episode à écrire -->
     
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
                          <!--<textarea name="content"></textarea>--> 
                    <div class="input-field col s12">                                        
                            <textarea id="content" name="content" class="materialize-textarea"></textarea>     
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



   