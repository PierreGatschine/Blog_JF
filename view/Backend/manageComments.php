<?php $title = "Gestion des commentaires signalés"; ?>



<?php ob_start(); ?>


<div class="container">


    <h4 class="header blue-text">Gestion des commentaires </h4>

    <div class="row">
        <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
    </div>

    <section>

        <h5 class="blue-text">Commentaires signalés</h5>
        

        <?php if($test)
        {
            ?>
            
            <div class="card grey darken-3 z-depth-1">
                
                <table class="responsive-table z-depth-1">
                    <thead>
                        <tr>
                            <th class="blue-text">Signalés</th>
                            <th class="white-text">Episode</th>
                            <th class="white-text">Auteur</th>
                            <th class="white-text">Commentaire</th>
                            <th class="white-text">Date</th>
                            <th class="white-text">Modifier Supprimer</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        <?php while($data = $report->fetch())
                        {
                           ?>

                           <tr>
                            <td class="blue-text"><br/><i class="material-icons blue-text">warning</i><br/></td>
                            <td class="white-text"><strong><?= $data['episode_id']; ?></strong></td>
                            <td class="white-text"><?= $data['author']; ?></td>
                            <td class="white-text"><strong><?= $data['comment']; ?></strong></td>
                            <td class="white-text"><?= $data['comment_date_fr']; ?></td>
                            <td>
                                <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=changeComment&amp;id=<?=$data['id']?>"><i class="material-icons">create</i><br/></a></p>
                                <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;author=<?=$data['author'] ?>&amp;episode=<?=$data['episode_id'] ?>"><i class="material-icons">delete</i><br/></a></p>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>

                    <?php $report->closeCursor();?>

                </tbody>
            </table>
            <?php 
        } 
        ?>
        

    </div>
</section>

<section>
    
    <h5 class="blue-text">Commentaires à modérer</h5>


    <div class="card grey darken-3 z-depth-1">

        <table class="responsive-table z-depth-1">

            <thead>
                <tr>
                    <th class="blue-text">Episode</th>
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
                    <td class="blue-text"><strong><?= $data['episode_id']; ?></strong></td>
                    <td class="white-text"><?= $data['author']; ?></td>
                    <td class="white-text"><strong><?= $data['comment']; ?></strong></td>
                    <td class="white-text"><?= $data['comment_date_fr']; ?></td>
                    <td>
                        <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable"  href="index.php?action=changeComment&amp;id=<?=$data['id']?>"><i class="material-icons">create</i><br/></a></p>
                        <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;auteur=<?=$data['author'] ?>&amp;episode=<?=$data['episode_id'] ?>"><i class="material-icons">delete</i><br/></a></p>
                    </td>
                </tr>
                <?php
            }
            ?>

            <?php $comments->closeCursor();?>

        </tbody>
    </table>
    
    
</section>
</div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>