<?php $title = "Administration du Blog"; ?>

<?php ob_start(); ?>

<header>
    <h2>Tableau de bord</h2>
</header>

<div class="container">

    <p><a href="http://localhost:8888/Blog_JF/index.php"> Se déconnecter</a></p>


    <div class="row">
        <div class="col s4">
           <div class="card grey darken-3">
            <div class="card-content white-text">
                
                <p><span class="card-title">Liste<br /> des épisodes publiés</span></p>
                <p></p>
            </div>
            <div class="card-action">
              <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=listPosts" id="buttonList"><i class="material-icons center">list</i></a>
          </div>
      </div>
  </div>



  <div class="col s4">
      <div class="card grey darken-3">
        <div class="card-content white-text">
            
            <span class="card-title">Ecrire<br /> un nouvel épisode</span>
            <p></p>
        </div>
        <div class="card-action">
          <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=writeEpisode" id="buttonWrite"><i class="material-icons center">create</i></a>
      </div>
  </div>
</div>


<div class="col s4">
  <div class="card grey darken-3">
    <div class="card-content white-text">
        
        <span class="card-title">Publier<br /> un nouvel épisode</span>
        <p></p>
    </div>
    <div class="card-action">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=editPost" id="buttonedit"><i class="material-icons center">publish</i></a>
  </div>
</div>
</div>
</div>




<div class="row">

    <div class="col s4">
      <div class="card grey darken-3">
        <div class="card-content white-text">
            
            <span class="card-title">Commentaires<br /> signalés</span>
            <p></p>
        </div>
        <div class="card-action">
          <div class="row">
          <div class="col s2 offset-s8">
          <a class="btn-floating btn-large  rigth waves-effect waves-light blue" href="index.php?action=manageComments" id="buttonCommentt"><i class="material-icons center">comment</i></a>
        </div>
      </div>
      </div>
  </div>
</div>



<div class="col s4">
  <div class="card grey darken-3">
    <div class="card-content white-text">
        
        <span class="card-title">Commentaires<br /> à modérer</span>
        <p></p>
    </div>
    <div class="card-action">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=changeComment" id="buttonModerate"><i class="material-icons center">warning</i></a>
  </div>
</div>
</div> 


<div class="col s4 m4">
  <div class="card grey darken-3">
    <div class="card-content white-text">
        
        <p><span class="card-title">Commentaires<br /> à supprimer</span></p>
        
    </div>
    <div class="card-action">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=deleteComment" id="buttonDelete"><i class="material-icons center">delete</i></a>
  </div>
</div>
</div>
</div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>


