<!DOCTYPE html>
<html>
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



<body>


<!-- Navbar -->
          

    <div class="navbar-fixed" id="nav">
        <nav class="light-blue darken-4" role="navigation">
            <div class="nav-wrapper container"><a href="#!" class="brand-logo"><strong>JFR</strong></a>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="http://localhost:8888/Blog_JF/index.php">Page d'accueil</a></li>
                    <li><a href="http://localhost:8888/Blog_JF/view/frontend/author.php">L'auteur</a></li>
                </ul> 
                
            </div>
        </nav>
    </div>


<!--Haut de page -->


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
     <br><br>
     <h1 class="header center text-">Billet simple pour l'Alaska</h1>
         <div class="row center">
            <h2 class="header col s12 text">Jean Forteroche</h2>

        </div>
        <br><br>
     </div>   
</div>


<!-- Corps de page -->


<?= $content ?>


<!-- Pied de page -->


<footer class="text-left">
    <img src="images/logo.png" alt="logoPartenaire">
</footer>
<footer class="text-center">
    <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
    <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
    <p>Site réalisé par NotreAgenceWeb </p>
    <img src="Logo" alt="logoAgence">

</footer>

<footer class="text-right">
    <a href="index.php?action=login">Administration du site</a>
</footer>





<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</script>


</body>

</html>
