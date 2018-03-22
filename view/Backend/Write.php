<?php $title = "Ecriture d'un épisode"; ?>

<?php ob_start(); ?>

<div class="container">
    <!-- Episode à modifier -->
    <?php
    if(!empty($chapter['id']))
    {
        ?>
        <form action="index.php?action=updateChapter&amp;id=<?=$episode['id']; ?>" method="post">
            <input type="text" name="title" value="<?= $episode['title']; ?>">
            <textarea name="content"><?= $episode['content']; ?></textarea>
            <!-- FIN -->

            <!-- Commentaire à modofier -->
            <?php
        }
        else if(!empty($comment['id']))
        {
            ?>
            <form action="index.php?action=updateComment&amp;id=<?=$comment['id']; ?>" method="post">
                <textarea name="comment"><?= $comment['comment']; ?></textarea>
                <!-- FIN -->

                <!-- SI CHAPITRE A CREER  -->
                <?php
            }
            else
            {
                ?>
                <form action="index.php?action=addEpisode" method="post">
                    <input type="text" name="title" placeholder="Ajouter un titre">
                    <textarea name="content"></textarea>
                    <!-- FIN -->
                    <?php
                }
                ?>

                <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></button>

            </form>
        </div>


        <?php $content = ob_get_clean(); ?>

        <?php require('template.php'); ?>