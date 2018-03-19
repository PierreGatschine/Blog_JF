<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>

<div class="container">

    <h2>Connexion administrateur</h2>

    
        <!--<form action="/blog_JF/controller/connexion.php" method="post">-->
            <form action="index.php?action=connexion" method="post">
            <label for="login">Pseudo</label>
            <input type="login" id="login" name="login" required /><br />
            <label for="password">Mot de passe</label>
            <input type="password" class="password" name="password" required /><br />
            <input type="submit" name="connexion" class="buttonStyle" value="Connexion" />
        </form>
    



<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>

</div>