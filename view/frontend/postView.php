<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class="container" >

    <p><a href="index.php">Retour à la liste des épisodes</a></p>


    <div class="news">
       <h3><?= htmlspecialchars($post['title']) ?></h3>
       <p><em>le <?= $post['creation_date_fr'] ?></em></p>
       <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
   </div>

   <h2>Commentaires</h2>

   <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
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
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong>
        <br /> le <?= $comment['comment_date_fr'] ?>
    </p>
    <p>
        <?= nl2br(htmlspecialchars($comment['comment'])) ?>
    </p>
    <p><span class="fa fa-exclamation-triangle" aria-hidden="true"></span>

        <a href="index.php?action=reportComment&amp;id= <?=  $comment['id'] ?> &amp; episode_id=<?= $comment['episode_id'] ?>&amp;']id= <//?= $_GET ['id'] ,>
        ?>#comments" style ="font-size: 0.7em; color: #e5a5a5"> Signaler</a> <br />
        Le <?= $comment['comment_date_fr'] ?></p>
       <!-- <a href="index.php?action=reportComment&amp;
        ?>#comments" style ="font-size: 0.7em; color: #e5a5a5"> Signaler</a> <br />
        Le <//?= $comment['comment_date_fr'] ?></p> -->

<?php
    }

    $comments->closeCursor();


?>

<?php $content = ob_get_clean(); ?>

</div>

<?php require('template.php'); ?>

