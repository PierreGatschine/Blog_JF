<?php $title = "Ecriture d'un épisode"; ?>



<?php ob_start(); ?>

<div class="container">


    <!-- Episode à écrire -->
    <?php
    if(!empty($episode['id']))
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
            <form action="index.php?action=updateEpisode&amp;id=<?=$episode['id']; ?>" method="post">
                <input type="text" name="title" value="<?= $episode['title']; ?>">
                <textarea name="content"><?= $episode['content']; ?></textarea>
                <!-- FIN -->

                <?php
            }
            ?>

            <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></button>

        </form>
    </div>


    <?php $content = ob_get_clean(); ?>

    <?php require('templateBackend.php'); ?>