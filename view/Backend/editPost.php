<?php $title= "Publier un épisode"; ?>


<?php ob_start(); ?>


<div class="container">

    <h4 class="header blue-text">Edition</h4>

<div class="row">
    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
</div>    
    

    <section>

<h5 class="blue-text">Publier un épisode</h5>
    
      
<div class="card grey darken-3">
    
        <table class="responsive-table">
            <thead>
                <tr>
                    
                    <th class="white-text">Id Episode</th>
                    <th class="white-text">Titre</th>
                    <th class="white-text">Contenu</th>
                    <th class="white-text">Image</th>
                    <th class="white-text">Date création</th>
                    <th class="white-text">Créer Supprimer</th>
                </tr>
            </thead>

            <tbody>
            
            <?php while($data = $episode->fetch())
            {
             ?>

               
                   
                    <tr>
                            <td><?= $data['id']; ?></td>
                            <td><?= $data['title']; ?></td>
                            <td><?= $data['content']; ?></td>
                            <td><?= $data['image']; ?></td>
                            <td><?= $data['creation_date_fr']; ?></td>
                            <td>
                                <p><a href="index.php?action=changeEpisode&amp;id=<?=$data['id']?>"><i class="material-icons">create</i></a></p>
                                <p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;title=<?=$data['title']?>"><i class="material-icons">delete</i></a></p>
                            </td>
                    </tr>
               
            <?php 
            }
            ?>

            <?php $episode->closeCursor();?>

            </tbody>
        </table>
        
      

<!--</div>
</section>

    <section>

           
            <a class="waves-effect waves-light btn blue" href="index.php?action=writeEpisode" id="buttonWriteEpisode"><i class="material-icons left">create

            <table class="responsive-table">



                <thead>
                    <tr>
                        <th>Numéro d'identification</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Action</th>
                    </tr>
                </thead>
              
                <tbody>

                    <//?php while ($data = $episode->fetch())
            {

                ?>
                        <tr>
                            <td><//?= $data['id']; ?></td>
                            <td><//?= '<strong>' . $data['title'] . '</strong>'; ?></td>
                            <td><//?= $data['extract']; ?> [...]</td>
                            <td>
                                <p><a href="index.php?action=changeEpisode&amp;id=<//?=$data['id']?>"><i class="material-icons">create</i></a></p>
                                <p><a href="index.php?action=validateDelete&amp;id=<//?=$data['id']?>&amp;title=<//?=$data['title']?>"><i class="material-icons">delete</i></a></p>
                            </td>
                        </tr>
                     
                        <//?php

            }

            $episode->closeCursor();

            ?>

                </tbody>
            </table>
        </div>
    </section>

</div>-->


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>
