<?php $title = "Liste des épisodes"; ?>


<?php ob_start(); ?>


<div class="container" >

    <h4 class="header blue-text">Liste des épisodes</h4>

    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="index.php?action=admin"><i class="material-icons">home</i></a>
    

    <div class="row">
        <?php while ($data = $episodes->fetch())
            {

                ?>
        <div class="col s12">
           <div class="card grey darken-3">
              <div class="card-content white-text">
                  
                  <p><span class="card-title"><h3><?= htmlspecialchars($data['title']) ?></h3></span></p>
                  <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
                  <p><?= $data['creation_date_fr'] ?></p>
              </div>

            <div class="card-action">
              <div class="row">
                <div class="col s2 offset-s8">
                  <a class="btn-floating btn-large waves-effect waves-light blue" href="<a href="index.php?action=changeEpisode&amp;id=<?=$data['id']?> id="buttonCreate"><i class="material-icons center">create</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php

            }

            $episodes->closeCursor();

            ?>
  </div>
</div>
    

            


       



<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>


