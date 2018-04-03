<!DOCTYPE html>
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $title ?></title>
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    
    <link rel="stylesheet" href="public/css/frontend/style.css">

</head>






<!-- Navbar -->
          
<body>

    <nav class="light-blue darken-4" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container "href="#!" class="brand-logo"><strong>JFR blog</strong></a>
        <ul class="right hide-on-med-and-down">  
          <li><a href="http://localhost:8888/Blog_JF/index.php">Page d'accueil</a></li>
          <li><a href="http://localhost:8888/Blog_JF/view/frontend/author.php">L'auteur</a></li>
        </ul> 
        <ul id="nav-mobile" class="sidenav" >
          <li><a href="http://localhost:8888/Blog_JF/index.php">Page d'accueil</a></li>
          <li><a href="http://localhost:8888/Blog_JF/view/frontend/author.php">L'auteur</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>



        <!--<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        

      <ul class="sidenav" id="nav-mobile">
        <li><a href="http://localhost:8888/Blog_JF/index.php">Page d'accueil</a></li>
        <li><a href="http://localhost:8888/Blog_JF/view/frontend/author.php">L'auteur</a></li>
         <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>-->
      
   



<!--Haut de page -->


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
     <h1 class="header center white-text">Billet simple pour l'Alaska</h1>
     <h2 class="header center white-text">Jean Forteroche</h2>
     <br />
   </div>
</div>


<!-- Corps de page -->


<?= $content ?>


<!-- Pied de page -->

</body>

<footer class="page-footer light-blue darken-4">
  <div class="container-fluid center">
    <div class="row">
      <div class="col l4 s12">
        <h6 class="white-text center-align">Information sur le blog</h6>
        <p>Dernier livre paru chez:</p>
        <a class="amber-text text-lighten-4" href="#!"><em>Maison d'édition de l' Iceberg</em></a>
        <img class="materialboxed" position="center-align" width="50" src="public/images/iceberg.png" alt="Iceberg">
        


      </div>
      <div class="col l4 s12">
        <h6 class="white-text center">Réseaux sociaux</h6>

        <a class="waves-effect waves-light btn-floating social facebook">
        <i class="fa fa-facebook">Facebook</i></a>
        <br/><br/>
         <a class="waves-effect waves-light btn-floating social twitter">
        <i class="fa fa-twitter">Twitter</i></a>

        </div>
        <div class="col l4 s12">
          <h6 class="white-text center">Administration du blog</h6>
          <ul>
            <li><a class="center white-text" href="index.php?action=login"><i class="small material-icons">power_settings_new</i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
        <p> Mars 2018 - Blog réalisé par NotreAgenceWeb</p>
        <img class="materialboxed" position="absolute"  width="50" src="public/images/NotreAgenceWeb.png" alt="NotreAgenceWeb">
      </div>
    </div>
  </footer>






<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>
 <script src="js/materialize.js"></script>
<script src="public/js/init.js"></script>





</html>
