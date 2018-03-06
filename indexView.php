
/**
 * Created by PhpStorm.
 * Date: 06/03/2018
 */
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Blog d'écrivain de Jean Forteroche</title>
		<link href="style.css" rel="stylesheet" />
	</head>

	<body>
		<h1>Billet simple pour l'Alaska</h1>

        <?php
        while ($data = $posts->fetch())
        {
         ?>

            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?> <br />
                    <em>le <?= $data['date_creation_fr'] ?></em>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a href="commentaire.php?episode=<?= $data['id'] ?>">Commentaire</a></em>
                </p>
            </div>
          <?php
           }

           $req->closeCursor();

          ?>
    </body>

</html>
