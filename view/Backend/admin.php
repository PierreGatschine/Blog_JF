<?php $title = "Administration du Blog"; ?>

<?php ob_start(); ?>

<header>
    <h2>Tableau de bord</h2>
</header>

<div class="container">

    <p><a href="http://localhost:8888/Blog_JF/index.php"> Se déconnecter</a></p>

    <a class="waves-effect waves-light btn blue" href="index.php?action=writeChapter" id="buttonWriteChapter"><i class="material-icons left">create</i>Créer un nouveau chapitre</a>

    <section>
        <div class="col-lg-2">
            <a href="index.php?action=listPosts" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Liste des épisodes</a>
        </div>
        <div class="col-lg-2">
            <a href="index.php?action=editPost" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Ecrire</a>
        </div>
        <div class="col-lg-2">
            <a href="" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Publier</a>
        </div>
    </section>

    <section>
        <div class="col-lg-2">
            <a href="" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Commentaires signalés</a>
        </div>
        <div class="col-lg-2">
            <a href="editPost.php" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Modérer</a>
        </div>
        <div class="col-lg-2">
            <a href="" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Supprimer</a>
        </div>
    </section>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>


