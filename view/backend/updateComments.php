<?php $title = "Gestion des commentaires à modérer"; ?>

<?php ob_start(); ?>

<header>
    <h4 class="center blue-text">Gestion des commentaires à modérer</h4>

</header>

 <div class="container">

<a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>

<?php
if(!empty($comment['id']))
{
?>
        
        <form action="index.php?action=updateComment&amp;id=<?=$comment['id']; ?>" method="post">
            <div class="row">
                    <div class="input-field col l8 s12">
                        
                            <i class="material-icons prefix">title</i>
                            <label for="title">Titre</label><br />  
                            <input type="text" name="title" value="<?= $comment['author']; ?>">   
                    </div>
                        
                    <div class="input-field col s12">
                        <textarea name="comment"><?= $comment['content']; ?></textarea>
                    </div>       
            </div>


    <!-- Episode à écrire -->
     
<?php
}
?>
            <?php $comments->closeCursor();?>

           



<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>