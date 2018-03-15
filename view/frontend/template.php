
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <! --<link rel="stylesheet" href="public/style.css"> -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

<!-- Navbar
      ================================================== -->
    <header>
        <nav class="navbar navbar-inverse navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top"><strong>Jean Forteroche</strong>   Billet simple pour l'Alaska</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a href="index.php">Page d'accueil</a></li>
                        <li><a href="listPostsView.php">Liste des épisodes</a></li>
                        <li><a href="auteur.php">L'auteur</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<!-- Corps de page
    ================================================== -->
<div class="container">

        <div class="row">
            <img class="col-sm-12" src="public/images/entete.png" alt="Episodes2" id="imageEpisode"> </img>
                 <div class="row">
                     <div class="col align-self-center">
                        <h2 class="text-center">Billet simple pour l'Alaska</h2>
                        <h3 class="text-center">Jean Forteroche</h3>
                    </div>
                  </div>
        </div>

</div>
<!--<div class="container">

    <div class="row">
        <img class="col-md-9" src="public/images/entete.png" alt="Episodes2" id="imageEpisode"> </img>
            <div class="row">
                <div class="col-xs-3">
                    <h2>Billet simple pour l'Alaska</h2>
                    <!--<h3 class="text-center">Jean Forteroche</h3>-->
                <!--</div>
                <div class="col-xs-5">
                    <h3 class="text-center">Jean Forteroche</h3>
                </div>

                <!-- cette derniere section occupe le reste de la grille (4 colonnes) -->
               <!-- <div class="col-xs-4">
                    <p>.col-xs-5</p>
                </div>
            </div>
    </div>

</div>-->


    <?= $content ?>








    <!-- Pied de page
    ================================================== -->

        <footer class="text-left">
            <img src="Logo" alt="logoPartenaire">
        </footer>
        <footer class="text-center">
            <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
            <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
            <p>Site réalisé par NotreAgenceWeb </p>
            <img src="Logo" alt="logoAgence">

        </footer>

        <footer class="text-right">
            <a href="view/frontend/login.php">Administration du site</a>
        </footer>




    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
