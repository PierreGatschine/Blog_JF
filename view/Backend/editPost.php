<?php $title= "Publier un épisode"; ?>


<?php ob_start(); ?>


<div class="container">

    <h4 class="header blue-text">Edition</h4>

<div class="row">
    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
</div>    
    


<h5 class="blue-text">Publier un épisode</h5>
    
      
<div class="card grey darken-3">
    
        <table class="responsive-table" id="array">
            <thead>
                <tr>
                    
                    <th class="blue-text">Id Episode</th>
                    <th class="white-text">Titre</th>
                    <th class="white-text">Contenu</th>
                    <th class="white-text">Image</th>
                    <th class="white-text">Date création</th>
                    <th class="white-text">Créer Supprimer</th>
                </tr>
            </thead>

            <tbody>
            
            <?php while($data = $posts->fetch())
            {
             ?>

               
                   
                    <tr>
                            <td class="blue-text"><?= $data['id']; ?></td>
                            <td class="white-text"><?= $data['title']; ?></td>
                            <td class="white-text"><?= $data['content']; ?></td>
                            <td class="white-text"><?= $data['image']; ?></td>
                            <td class="white-text"><?= $data['creation_date_fr']; ?></td>
                            <td>
                                <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=changeEpisode&amp;id=<?=$data['id']?>"><i class="material-icons">create</i></a></p>
                                <p><a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;title=<?=$data['title']?>"><i class="material-icons">delete</i></a></p>
                            </td>
                    </tr>
               
            <?php 
            }
            ?>

            <?php $posts->closeCursor();?>

            </tbody>
        </table>
        
</div>     



<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>
