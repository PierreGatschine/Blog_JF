<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Blog d'écrivain de Jean Forteroche</title>
		<link href="style.css" rel="stylesheet" />
	</head>

		
	<body>
		<h1>Billet simple pour l'Alaska</h1>
		<p><a href="index.php">Retour à la liste des billets</a></p>
		<?php

		//connection to the Db
		try 
		{
			$bdd = new PDO('mysql:host=localhost;dbname=blog_d_ecrivain;charset=utf8', 'root', 'root');
			
		} 
		catch (Exception $e) 
		{
			die('Erreur : ' . $e->getMessage());
		}

		//recovery of episodes
		$req = $bdd->prepare('SELECT id, title, author, content, DATE_FORMAT(date_creation, \'%d-%m-%Y à ùHh%imin%ss\') AS date_creation_fr FROM episode WHERE id = ?');
		$req->execute(array($_GET['episode']));
		$data = $req->fetch();
		?>

		<div class="news">
		    <h3>
		        <?php echo htmlspecialchars($data['title']); ?>
		        <em>le <?php echo $data['date_creation_fr']; ?></em>
		    </h3>
		    
		    <p>
		    <?php
		    	echo nl2br(htmlspecialchars($data['content']));
		    ?>
		    </p>
		</div>

		<h2>Commentaires</h2>

		<?php
		$req->closeCursor(); 
		

		// recovery of comments
		$req = $bdd->prepare('SELECT author, content, DATE_FORMAT(date_commentaire, \'%d-%m-%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM comment WHERE id_episode = ? ORDER BY date_comment');
		$req->execute(array($_GET['episode']));


		while ($data = $req->fetch())
		{
		?>
		<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
		<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
		
		<?php
		}

		$req->closeCursor();
		?>

	</body>
</html>



