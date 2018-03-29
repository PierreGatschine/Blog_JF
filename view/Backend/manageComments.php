<?php $title = "Gestion des commentaires"; ?>



<?php ob_start(); ?>


<header>
    <h4 class="center blue-text">Gestion des commentaires</h4>

</header>

<section>
    <!-- AFFICHAGE TABLEAU SI COMMENTAIRE SIGNALE -->
    <?php if($test)
    {
    ?>

    <div class="container" id="report">
        <table class="bordered centered">
            <thead>
                <tr>
                    <th class="red-text">Signalement</th>
                    <th>Numéro de Chapitre</th>
                    <th>Auteur</th>
                    <th>Commentaire</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            
            <?php while($data = $report->fetch())
            {
             ?>

                <tr>
                    <td><br/><i class="material-icons red-text">warning</i><br/></td>
                    <td><strong><?= $data['episode_id']; ?></strong></td>
                    <td><?= $data['author']; ?></td>
                    <td><strong><?= $data['comment']; ?></strong></td>
                    <td><?= $data['comment_date_fr']; ?></td>
                    <td>
                        <p><a href="index.php?action=changeComment&amp;id=<?=$data['id']?>"><i class="material-icons">create</i><br/>modifier</a></p>
                        <p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;author=<?=$data['author'] ?>&amp;episode=<?=$data['episode_id'] ?>"><i class="material-icons">delete_forever</i><br/>supprimer</a></p>
                    </td>
                </tr>
            <?php 
            }
            ?>

            <?php $report->closeCursor();?>

            </tbody>
        </table>
    </div>

    <?php 
    } 
    ?>
    
    <!-- FIN -->

    <!-- TABLEAU COMMENTAIRE -->
    <div class="container">
        <table class="striped centered">
            <thead>
                <tr>
                    <th>Numéro de Chapitre</th>
                    <th>Auteur</th>
                    <th>Commentaire</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            
           

            </tbody>
        </table>
    </div>
    <!-- FIN -->
</section>


        <?php $content = ob_get_clean(); ?>

        <?php require('templateBackend.php'); ?>