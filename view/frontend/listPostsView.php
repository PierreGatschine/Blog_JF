<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>


<?php
while ($data = $posts->fetch())
{
?>
<div class="container" >
    <section class="col-sm-12">
        <div class="row">
            <article class="col-md-4">
                <div class="news">
                    <img class="col-xs-12" src="public/images/episode1.png">

                    <h3><?= htmlspecialchars($data['title']) ?></h3>

                    <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        <!--<em><a href="index.php?action=post&amp;id=<?= $data['id']?>">Lire la suite<span class="licon icon-black"></span></a></em> -->
                        <br />
                        <em>le <?= $data['creation_date_fr'] ?></em>
                    </p>
                    <P>
                        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
                        <spam class="fa fa-comment" aria-hidden="true"></a>
                    </p>

                </div>

            </article>
            <article class="col-md-4">
                <div class="news">
                    <img class="col-xs-12" src="public/images/episode2.png">

                    <h3><?= htmlspecialchars($data['title']) ?></h3>

                    <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        <!--<em><a href="index.php?action=post&amp;id=<?= $data['id']?>">Lire la suite<span class="licon icon-black"></span></a></em> -->
                        <br />
                        <em>le <?= $data['creation_date_fr'] ?></em>
                    </p>
                    <P>
                        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
                            <spam class="fa fa-comment" aria-hidden="true"></a>
                    </p>

                </div>

            </article>
            <article class="col-md-4">
                <div class="news">
                    <img class="col-xs-12" src="public/images/episode3.png">

                    <h3><?= htmlspecialchars($data['title']) ?></h3>

                    <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        <!--<em><a href="index.php?action=post&amp;id=<?= $data['id']?>">Lire la suite<span class="licon icon-black"></span></a></em> -->
                        <br />
                        <em>le <?= $data['creation_date_fr'] ?></em>
                    </p>
                    <P>
                        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
                            <spam class="fa fa-comment" aria-hidden="true"></a>
                    </p>

                </div>
            </article>
            <article class="col-sm-6">

            </article>
            <article class="col-sm-6">

            </article>
            <article class="col-sm-6">

            </article>
        </div>
    </section>
</div>

<?php
}

$posts->closeCursor();

?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
