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
                        
                            <i class="material-icons prefix">title</i>
                            <label for="title">Titre</label><br />  
                            <input type="text" name="title" value="<?= $episode['title']; ?>">   
                    </div>
                        
                    <div class="input-field col s12">
                        <textarea name="content"><?= $episode['content']; ?></textarea>
                    </div>

                    <div class="file-field input-field col l8 s12">
                        <div class="btn-floating waves-effect waves-light light-blue hoverable">
                            <span><i class="material-icons prefix">file_upload</i></span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
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
                    <div class="input-field col s12">                                        
                        <textarea name="content"></textarea>
                        <!--<textarea id="content" name="content" class="materialize-textarea"></textarea>-->    
                    </div>
                <div class="file-field input-field col l8 s12">
                        <div class="btn-floating waves-effect waves-light light-blue hoverable">
                            <span><i class="material-icons prefix">file_upload</i></span>
                            <input type="file">
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



   