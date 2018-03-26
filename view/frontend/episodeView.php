<?php $title = htmlspecialchars($episode['title']); ?>

<?php ob_start(); ?>

<div class="container" >

    <p><a href="index.php">Retour à la page d'accueil</a></p>


    <div>
     <h3><?= htmlspecialchars($episode['title']) ?></h3>
     <p>
        <em>publié le <?= $episode['creation_date_fr'] ?></em>
    </p>
     <p>
        <?= nl2br(htmlspecialchars($episode['content'])) ?>
            
    </p>
 </div>

 <h5>Commentaires</h5>

 <form action="index.php?action=addComment&amp;id=<?= $episode['id'] ?>" method="post">
    <div>
        <label for="author">Pseudo</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($comment = $comments->fetch())
{
    ?>
    <p>
        <strong><?= htmlspecialchars($comment['author']) ?></strong>
    </p> <br />

    <p>
        le <?= $comment['comment_date_fr'] ?>
    </p>
    
    <p>
        <?= nl2br(htmlspecialchars($comment['comment'])) ?>
    </p>
    <p><span class="fa fa-exclamation-triangle" aria-hidden="true"></span>

        <!--<a #comments" style ="font-size: 0.7em; color: #e5a5a5"> Signaler</a> <br />-->
        <a href="index.php?action=reportComment&amp;id=<?= $data['id'] ?>&amp;episode_id=<?= $data['episode_id'] ?>&amp;idmax=<?= $_GET['idmax'] ?>" class="warning" onclick="return confirm('Confirmer le signalement ?');">Signaler ce contenu </a>
        Le <?= $comment['comment_date_fr'] ?></p>


        <?php
    }

    $comments->closeCursor();


    ?>

    <?php $content = ob_get_clean(); ?>

</div>

<?php require('template.php'); ?>

