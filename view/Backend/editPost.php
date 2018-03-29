<?php $title= "Publier un épisode"; ?>


<?php ob_start(); ?>

<header>
    <h4 class="">Edition</h4>

</header>


<div class="container" >

    <p><a href="index.php?action=admin">Retour à la page d'administration du blog</a></p>

    <section>
            <!-- Editer un nouvel épisode -->
            <a class="waves-effect waves-light btn blue" href="index.php?action=writeEpisode" id="buttonWriteEpisode"><i class="material-icons left">create</i>Editer un nouvel épisode  </a>
            <!-- FIN -->

            <table class="responsive-table">



                <thead>
                    <tr>
                        <th>Numéro d'identification</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- FIN -->
                <tbody>

                    <?php while ($data = $episodes->fetch())
            {

                ?>
                        <tr>
                            <td><?= $data['id']; ?></td>
                            <td><?= '<strong>' . $data['title'] . '</strong>'; ?></td>
                            <td><?= $data['extract']; ?> [...]</td>
                            <td>
                                <p><a href="index.php?action=changeEpisode&amp;id=<?=$data['id']?>"><i class="material-icons">create</i>modifier</a></p>
                                <p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;title=<?=$data['title']?>"><i class="material-icons">delete_forever</i>supprimer</a></p>
                            </td>
                        </tr>
                        <!-- FIN -->
                        <?php

            }

            $episodes->closeCursor();

            ?>

                </tbody>
            </table>
        </div>
    </section>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>
