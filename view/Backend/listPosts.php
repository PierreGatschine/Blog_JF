<?php $title = "Liste des épisodes"; ?>

<div class="container" >
    <section class="col-sm-12">
        <div class="row">

            <?php while ($data = $episodes->fetch())
            {
                ?>
                <article class="col-sm-4">

                    <h3><?= htmlspecialchars($data['title']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
                    <p><?= $data['creation_date_fr'] ?></p>

                    <P>
                        <a href="index.php?action=episode&amp;id=<?= $data['id'] ?>"><span class="fa fa-comment" aria-hidden="true"></span></a>
                    </p>



                </article>



                <?php

            }

            $episodes->closeCursor();

            ?>


        </div>
    </section>
</div>



<?php $content = ob_get_clean(); ?>