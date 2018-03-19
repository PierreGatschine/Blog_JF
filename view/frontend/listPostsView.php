<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>






<div class="container" >
    <section class="col-sm-12">
        <div class="row">

            <?php while ($data = $posts->fetch()) 
            {
                ?>
                <article class="col-md-4">
                    
                        <img class="col-sm-4" src="public/images/episode1.png">

                        <h3><?= htmlspecialchars($data['title']) ?></h3>

                        <p>
                            <?= nl2br(htmlspecialchars($data['content'])) ?>
                            <!--<em><a href="index.php?action=post&amp;id=<?= $data['id']?>">Lire la suite<span class="licon icon-black"></span></a></em> -->
                            <br />
                            <em>le <?= $data['creation_date_fr'] ?></em>
                        </p>
                        <P>
                            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><span class="fa fa-comment" aria-hidden="true"></span></a>
                        </p>

                    

                </article> 



                <?php

            } 

            $posts->closeCursor();

            ?>


        </div>
    </section>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
