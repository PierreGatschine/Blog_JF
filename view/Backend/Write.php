<?php $title = "Ecriture d'un épisode"; ?>



<?php ob_start(); ?>

<div class="container">

<a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
    

    <!-- Episode à écrire -->
    <?php
    if(!empty($episodes['id']))
    {
        ?>
        <form action="index.php?action=addEpisode" method="post">
            <input type="text" name="title" placeholder="Ajouter un titre">
            <textarea name="content"></textarea>
            <!-- FIN -->



     <!-- Episode à modifier -->
            <?php
        }
        
        else
        {
            ?>
            <form action="index.php?action=updateEpisode&amp;id=<?=$episodes['id']; ?>" method="post">
                <input type="text" name="title" value="<?= $episodes['title']; ?>">
                <textarea name="content"><?= $episodes['content']; ?></textarea>
                <!-- FIN -->

                <?php
            }
            ?>

            <button class="btn-floating btn-large right waves-effect waves-light blue hoverable" type="submit" name="action"><i class="material-icons">publish</i></button>

        </form>
    </div>


    <?php $content = ob_get_clean(); ?>

    <?php require('templateBackend.php'); ?>