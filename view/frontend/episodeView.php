<?php $title = htmlspecialchars($episode['title']); ?>

<?php ob_start(); ?>


<div class="container" >


    <a class="btn-floating btn-large waves-effect waves-light light-blue darken-4" href="index.php"><i class="material-icons">home</i></a>




    <!-- Episode view -->


    <div class="section">
        <div class="row">

            <div class="card">
                <div class="card-image ">
                    <img src="public/images/<?= $episode['image']?>" alt="bookCover" >

                </div>
            </div>
        </div>

    </div>

    
    <div class="row">
        <div class="col s12"><h3><?= htmlspecialchars($episode['title']) ?></h3></div>
        
        <div class="col s12"><?= nl2br(htmlspecialchars($episode['content'])) ?></div>
        <div class="col s6"><br /><em>Publié le <?= $episode['creation_date_fr'] ?></em></div>
    </div>
       
</div>



<!-- Add a comment -->


<div class="section">

    <div class="container">

        
        <div class="col s12"><h5>Commentaires</h5></div>
    
            <!--<div class="">-->
                <form action="index.php?action=addComment&amp;id=<?= $_GET['id'] ?>     &amp;idmax=<?=$_GET['idmax']?>" method="post">
                  <div class="row">
                    <div class="input-field col l4 s12">
                    <i class="material-icons prefix">person</i>
                        <label for="author">Pseudo</label><br />
                        <input type="text" id="author" name="author" />
                    </div>
                  </div>
                    <div class="row">
                        <div class="input-field col l8 s12">
                        <i class="material-icons prefix">comment</i>
                          <label for="comment">Commentaire</label>
                          <textarea id="comment" name="comment" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col s2 offset-s10">
                            <button type='submit' name='btn_comment' class="btn-floating btn-large waves-effect waves-light light-blue darken-4" ><i class="material-icons">send</i></button>
                        </div>
                    </div>
                </form>
        </div>  
    </div>
</div>
    


<!-- View comments and their report -->
<div class="section">

<div class="container">
    <div class="row">  

        <?php
        while ($comment = $comments->fetch())
        {
            ?>


            <div class="col l6 s12 ">
              <div class="card light-blue darken-4">
                <div class="card-content white-text">
                  <span class="card-title"><?= htmlspecialchars($comment['author']) ?></span>
                  <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                  <br />
                  <span class="dateComment">Commentaire publié le <?= $comment['comment_date_fr'] ?></span>
                  

                  <?php 
                  if($comment['report'] === "1"){
                    ?>
                    <p class="warning red-text">Ce commentaire a été signalé</p>
                    <?php 
                }else{

                    ?>

                    <a href="index.php?action=reportComment&amp;id=<?= $comment['id'] ?>&amp;episodeId=<?= $comment['episode_id'] ?>&amp;idmax=<?= $_GET['idmax'] ?>" class="warning blue-text" onclick="return confirm('Confirmer le signalement ?');"><br/>Signaler ce contenu </a>
                    <?php 
                } 
                ?> 
            </div>
        </div>
    </div>
    <?php
}

$comments->closeCursor();
?>


</div>
</div>



</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


