<?php $title = "Liste des épisodes"; ?>

<?php ob_start(); ?>




<div class="container">
  
            <?php while ($data = $episodes->fetch())
            {
                ?>
               
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card">
                            <div class="card-image">
                                <img src="public/images/4.png">
                                <span class="card-title"><?= htmlspecialchars($data['title']) ?><br /></span>
                                <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-4" href="index.php?action=episode&amp;id=<?= $data['id']?>"><span class="licon icon-black"></span><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                                <?= nl2br(htmlspecialchars($data['content'])) ?> <br />
                                <br />
                                <p>
                                    <em>publié le <?= $data['creation_date_fr'] ?></em>
                                </p>
                                <P>
                                    <!--<a href="index.php?action=episode&amp;id=<//?= $data['id'] ?>"><span class="fa fa-comment" aria-hidden="true"></span></a>-->
                                </p>

                            </div>
                        </div>
                    </div>
                    
                </div>


                <?php

            } 

            $episodes->closeCursor();

            ?>

</div>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
