<?php $title= " Valider la suppression"; ?>


<?php ob_start(); ?>


<div class="container">

    <h4 class="header blue-text">Valider la suppression</h4>

    <div class="row">
        <a class="btn-floating btn-large waves-effect waves-light light-blue" href="index.php?action=admin"><i class="material-icons">home</i></a>
    </div>



    <!-- Map to remove the episode -->

    <div class="row">
        <div class="col l8 s12">
            <h5 class="blue-text">Episode à supprimer</h5>
            <div class="card hoverable grey darken-3">
                <div class="card-content white-text">
                    <?php
                    if(!empty($_GET['title']))
                    {
                        ?>   
                        <p><span class="card-title">Supprimer<br /> l' <?=$_GET['title'] ?> qui a comme numéro d'identifiant <?= $_GET['id'] ?></span></p>
                        <p></p>
                    </div>
                    <div class="card-action">
                        <div class="row">
                            <div class="col s2 offset-s10">
                              <a class="btn-floating btn-large waves-effect waves-light btn blue" href="index.php?action=deleteEpisode&amp;id=<?=$_GET['id']?>"><i class="material-icons">check</i></a>
                              <br><br>
                              <a class="btn-floating btn-large waves-effect waves-light btn blue" href="index.php?action=editEpisode"><i class="material-icons">close</i></a>
                          </div>
                      </div>
                      <?php
                  }else
                  {
                    ?>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Map to remove comment -->

    <div class="row">
        <div class="col l8 s12">
            <h5 class="blue-text">Commentaire à supprimer</h5>
            <div class="card hoverable grey darken-3">
                <div class="card-content white-text">
                    <p><span class="card-title">Supprimer<br />le commentaire de <strong><?=$_GET['author'] ?></strong> sur l'épisode <?=$_GET['episode'] ?></span></p>
                    
                </div>
                <div class="card-action">
                  <div class="row">
                    <div class="col s2 offset-s10">
                        <a class="btn-floating btn-large waves-effect waves-light btn blue" href="index.php?action=deleteComment&amp;id=<?=$_GET['id']?>"><i class="material-icons">check</i></a>
                        <br><br>
                        <a class="btn-floating btn-large waves-effect waves-light btn blue" href="index.php?action=manageComments"><i class="material-icons">close</i></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</div>




<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>




