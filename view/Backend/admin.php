<?php session_start(); ?>
<?php $title = "Administration du Blog"; ?>

<?php ob_start(); ?>

<header>
    <h2>Tableau de bord</h2>

</header>


<body>

    <section>
        <div class="col-lg-2">
            <a href="listPosts.php" class="btn btn-custom2 btn-lg" role="button" >
                <span class=" "></span><br><br>Liste des épisodes</a>
            </div>
            <div class="col-lg-2">
                <a href="editPost.php" class="btn btn-custom2 btn-lg" role="button" >
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

                            <?php $content = ob_get_clean(); ?>

                            <?php require('templateBackend.php'); ?>


                        </body>