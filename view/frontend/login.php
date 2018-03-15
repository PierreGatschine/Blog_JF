<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>

<div class="container">

    <h2>Connexion administrateur</h2>

    <div class="news">
        <form action="index.php?action=login" method="post" class="connexionAdmin">
            <label for="login">Login</label>
            <input type="login" id="login" name="login" required /><br />
            <label for="password">Mot de passe</label>
            <input type="password" class="password" name="password" required /><br />
            <input type="submit" name="connexion" class="buttonStyle" value="Connexion" />
        </form>
    </div>



<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>

</div>