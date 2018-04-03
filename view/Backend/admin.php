<?php $title = "Administration du Blog"; ?>

<?php ob_start(); ?>


<div class="container">


    <h4 class="header blue-text">Tableau de bord</h4>


    <a class="btn-floating btn-large waves-effect waves-light light-blue hoverable" href="http://localhost:8888/Blog_JF/index.php"><i class="material-icons">cancel</i></a>
    
    <!--<p><a href="http://localhost:8888/Blog_JF/index.php"> Se déconnecter</a></p>-->


    <div class="row">
        <div class="col l4 s12">
           <div class="card hoverable grey darken-3">
            <div class="card-content white-text">
                
                <p><span class="card-title">Liste<br /> des épisodes publiés</span></p>
                <p></p>
            </div>
            <div class="card-action">
              <div class="row">
      <div class="col s2 offset-s8">
              <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=listPosts" id="buttonList"><i class="material-icons center">list</i></a>
          </div>
        </div>
      </div>
      </div>
  </div>



  <div class="col l4 s12">
      <div class="card hoverable grey darken-3">
        <div class="card-content white-text">
            
            <span class="card-title">Ecrire<br /> un nouvel épisode</span>
            <p></p>
        </div>
        <div class="card-action">
          <div class="row">
      <div class="col s2 offset-s8">
          <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=writeEpisode" id="buttonWrite"><i class="material-icons center">create</i></a>
      </div>
    </div>
  </div>
  </div>
</div>


<div class="col l4 s12">
  <div class="card hoverable grey darken-3">
    <div class="card-content white-text">
        
        <span class="card-title">Publier<br /> un nouvel épisode</span>
        <p></p>
    </div>
    <div class="card-action">
      <div class="row">
      <div class="col s2 offset-s8">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=editPost" id="buttonedit"><i class="material-icons center">publish</i></a>
  </div>
</div>
</div>
</div>
</div>
</div>




<div class="row">

    <div class="col l4 s12">
      <div class="card hoverable grey darken-3">
        <div class="card-content white-text">
            
            <span class="card-title">Commentaires<br /> signalés</span>
            <p></p>
        </div>
        <div class="card-action">
          <div class="row">
          <div class="col s2 offset-s8">
          <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=manageComments" id="buttonCommentt"><i class="material-icons center">comment</i></a>
        </div>
      </div>
      </div>
  </div>
</div>



<div class="col l4 s12">
  <div class="card hoverable grey darken-3">
    <div class="card-content white-text">
        
        <span class="card-title">Modérer<br />un commentaires </span>
        <p></p>
    </div>
    <div class="card-action">
    <div class="row">
      <div class="col s2 offset-s8">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=updateComment" id="buttonModerate"><i class="material-icons center">warning</i></a>
  </div>
</div>
</div>
</div>
</div> 


<div class="col l4 s12">
  <div class="card hoverable grey darken-3">
    <div class="card-content white-text">
        
        <p><span class="card-title">Supprimer<br />un commentaires</span></p>
        
    </div>
    <div class="card-action">
      <div class="row">
      <div class="col s2 offset-s8">
      <a class="btn-floating btn-large waves-effect waves-light blue" href="index.php?action=deleteComment" id="buttonDelete"><i class="material-icons center">delete</i></a>
  </div>
</div>
</div>
</div>
</div>
</div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateBackend.php'); ?>


