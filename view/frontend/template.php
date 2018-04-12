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


  <div class="navbar-fixed">
    <nav class="light-blue darken-4" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container " href="index.php" class="brand-logo"><h5>JFR blog</h5></a>
        <!--<a href="#" data-activites="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>-->
        <!--<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
        <ul class="right hide-on-med-and-down">  
          <li><a href="index.php">Page d'accueil</a></li>
          <li><a href="index.php?action=author">L'auteur</a></li>
        </ul> 
        <ul id="mobile-demo" class="side-nav">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="index.php?action=author"><i class="material-icons">person</i></a></li>
        </ul>
      </div>
    </nav>
  </div>


<!--<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="">
      </div>
    </div>
      </li>
    <li><a href="index.php"><i class="material-icons">home</i></a></li>
    <li><a href="index.php?action=author"><i class="material-icons">person</i></a></li>
  </ul>-->
  <!--<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
        


  <!--Top of page -->

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <h5 class="header white-text">Jean Forteroche</h3>
        <h4 class="header white-text"><strong>Billet simple pour l'Alaska</strong></h4>
        <br>
      </div>
    </div>


    <!-- Body  -->


    <?= $content ?>


  

  </body>

  <!-- Body -->

  <footer class="page-footer light-blue darken-4">
    <div class="container-fluid center">
      <div class="row">

        <div class="col l4 s12">
          <h6 class="white-text center-align">Dernier livre paru</h6>
          <img src="public/images/iceberg.png" class="circle responsive-img" width="50" position="center-align" alt="Iceberg">
          <a class="amber-text text-lighten-4" href="#!"><em>Maison d'édition de l' Iceberg</em></a>
        </div>

        <div class="col l4 s12">
          <h6 class="white-text center">Réseaux sociaux</h6>
          <br>


  
          <ul>

         <!--<li> <a class="waves-effect waves-light"><i class="fab fa-facebook-f"></i></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <i class="fa fa-twitter">Twitter</i></a>
           <li><a class="waves-effect waves-light social-icon btn twitter"><i class="fa fa-twitter"></i></a></li>-->   
          </ul>    
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
          <div class="container">
            <div class="center"><p> Mars 2018 - Blog réalisé par NotreAgenceWeb</p></div>
            
            <div class="center"><img src="public/images/NotreAgenceWeb.png" class="circle responsive-img" width="50" position="center-align" alt="NotreAgenceWeb"></div>
          </div>
        </div>

      </footer>






      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="public/js/init.js"></script>
      



      </html>
