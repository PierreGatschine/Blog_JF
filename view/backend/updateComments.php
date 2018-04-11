<?php $title = "Commentaires à modérer"; ?>

<?php ob_start(); ?>




<div class="container">

  <h4 class="header blue-text">Commentaires à modérer</h4>  

<div class="row">
    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
</div>


    <?php
    if(!empty($comment['id']))
    {
    ?>
        
        <form action="index.php?action=updateComment&amp;id=<?=$comment['id']; ?>" method="post">
            <div class="row">
                <div class="input-field col l8 s12">
                    
                    <i class="material-icons prefix">person</i>
                    <label for="title">Pseudo</label><br />  
                    <input type="text" name="title" value="<?= $comment['author']; ?>">   
                </div>
                
                <div class="input-field col s12">
                    <textarea name="comment"><?= $comment['comment']; ?></textarea>
                </div>       
            </div>
    <?php
    }else 
    {
        throw new Exception('Tous les champs ne sont pas remplis !');
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

