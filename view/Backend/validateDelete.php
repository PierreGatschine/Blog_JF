<?php $title= " Valider la suppression"; ?>


<?php ob_start(); ?>


<div class="container validation">


    <!-- AFFICHAGE VALIDATION SI SUPPRESSION DU CHAPITRE -->
    <?php
        if(!empty($_GET['title']))
        {
    ?>
        <h4> Supprimer l'épisode <?=$_GET['id'] ?><br/><strong><?= $_GET['title'] ?></strong> ?</h4>

        <a class="waves-effect waves-light btn blue" href="index.php?action=deleteEpisode&amp;id=<?=$_GET['id']?>">OUI</a>
        <a class="waves-effect waves-light btn blue" href="index.php?action=editEpisode">NON</a>
        <!-- FIN -->

        <!-- AFFICHAGE VALIDATION SI SUPRESSION DU COMMENTAIRE -->
        <?php
    }
    else
    {
        ?>
        <h4> Supprimer le commentaire de <strong><?=$_GET['author'] ?></strong><br/> l'épisode  <strong><?=$_GET['episode_id'] ?></strong> ?</h4>

        <a class="waves-effect waves-light btn blue" href="index.php?action=deleteComment&amp;id=<?=$_GET['id']?>">OUI</a>
        <a class="waves-effect waves-light btn blue" href="index.php?action=manageComments">NON</a>
        <!-- FIN -->
        <?php
    }
    ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>