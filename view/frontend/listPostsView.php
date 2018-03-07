<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska</h1>

<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaire</a></em>
                </p>
            </div>
<?php
}

$posts->closeCursor();

?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
