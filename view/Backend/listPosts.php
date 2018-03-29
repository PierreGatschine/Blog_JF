<?php $title = "Liste des épisodes"; ?>


<?php ob_start(); ?>


<div class="container" >
    
        <div class="row">
<div class="col-sm-12">

            <?php while ($data = $episodes->fetch())
            {

                ?>
                <article class="col-sm-4">
                     


                    <img src=" <?= $data['image'] ?>" />
                    <h3><?= htmlspecialchars($data['title']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
                    <p><?= $data['creation_date_fr'] ?></p>


                </article>



                <?php

            }

            $episodes->closeCursor();

            ?>


        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>