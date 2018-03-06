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

		//connection to the Db
		try 
		{
			$bdd = new PDO('mysql:host=localhost;dbname=blog_d_ecrivain;charset=utf8', 'root', 'root');
			
		} 
		catch (Exception $e) 
		{
			die('Erreur : ' . $e->getMessage());
		}

		//recovery of the last 5 messages
		$req = $bdd->query('SELECT id, title, author, content, DATE_FORMAT(create_date, \'%d-%m-%Y à %Hh%imin%ss\') AS date_creation_fr FROM episode ORDER BY ID DESC LIMIT 0, 5');

		// Display of each message 
		while ($data = $req->fetch())
		{
		?>

		<div class="news">
		    <h3>
		        <?php echo htmlspecialchars($data['title']); ?> <br />
		        <em>le <?php echo $data['date_creation_fr']; ?></em>
		    </h3>
		    
		    <p>
		 <?php
		    // On affiche le contenu de l'épisode
		    echo nl2br(htmlspecialchars($data['content']));
		 ?>
		    <br />
		    <em><a href="commentaire.php?episode=<?php echo $data['id']; ?>">Commentaire</a></em>
		    </p>
		</div>

		<?php
		} // Fin de la boucle des billets
		
		$req->closeCursor();

		?>
	</body>
</html>
