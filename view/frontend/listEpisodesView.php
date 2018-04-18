<?php $title = "Liste des épisodes"; ?>


<?php ob_start(); ?>


<div class="container-fluid">
  
    
 
    <div class="row">
        <?php while ($data = $episodes->fetch())
        {
            ?>
            <div class="col l4 s12">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="public/images/<?= $data['image']?>">
                        <span class="card-title"><h5><strong><?= htmlspecialchars($data['title']) ?></strong></h5></span>
                        <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-4" href="index.php?action=episode&amp;id=<?= $data['id']?>"><span class="licon icon-black"></span><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <span><?= $data['extract']; ?> [...]</span>
                        <br/>
                        <br/>
                        <p><em>publié le <?= $data['creation_date_fr'] ?></em><i class=" right small material-icons">comment</i></p>
                        

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

<?php require('template.php'); ?>
