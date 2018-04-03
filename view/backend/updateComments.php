<?php $title = "Gestion des commentaires à modérer"; ?>

<?php ob_start(); ?>

<header>
    <h4 class="center blue-text">Gestion des commentaires à modérer</h4>

</header>

 <div class="container">

<a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>

<section>
    
    
<div class="card grey darken-3">

        <table class="responsive-table">

            <thead>
                <tr>
                    <th class="white-text">Episode</th>
                    <th class="white-text">Auteur</th>
                    <th class="white-text">Commentaire</th>
                    <th class="white-text">Date</th>
                    <th class="white-text">Modifier Suprimer</th>
                </tr>
            </thead>

            <tbody>

           <?php while($data = $comments->fetch())
            {
           ?>
                <tr>
                    <td class="white-text"><strong><?= $data['episode_id']; ?></strong></td>
                    <td class="white-text"><?= $data['author']; ?></td>
                    <td class="white-text"><strong><?= $data['comment']; ?></strong></td>
                    <td class="white-text"><?= $data['comment_date_fr']; ?></td>
                    <td>
                        <p><a href="index.php?action=changeComment&amp;id=<?=$data['id']?>"><i class="material-icons">create</i><br/></a></p>
                        <p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;auteur=<?=$data['author'] ?>&amp;chapitre=<?=$data['episode_id'] ?>"><i class="material-icons">delete</i><br/></a></p>
                    </td>
                </tr>
            <?php
            }
            ?>

            <?php $comments->closeCursor();?>

            </tbody>
        </table>
    
    <!-- FIN -->
</section>



<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>