<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>



<div class="container">
<div class="row"></div>
<div class="row">
<a class="btn-floating btn-large waves-effect waves-light light-blue darken-4" href="index.php"><i class="material-icons">home</i></a>
</div>

<div class="container">

        
        <div class="col s12"><h5>Connexion l'administration du blog</h5></div>
    
            <!--<div class="">-->
                <form action="index.php?action=connexion" method="post">
                  <div class="row">
                    <div class="input-field col l4 s12">
                    <i class="material-icons prefix">person</i>
                        <label for="login">login</label><br />
                        <input id="login" type="password" name="login" class="validate">
                    </div>
                  </div>
                    <div class="row">
                        <div class="input-field col l8 s12">
                        <i class="material-icons prefix">lock</i>
                          <label for="password">Mot de passe</label>
                          <input id="password" type="password" name="password" class="validate">
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col s2 offset-s10">
                            <button type='submit' name='btn_login' class="btn-floating  btn-large waves-effect waves-light light-blue darken-4 rigth"><i class="material-icons">power_settings_new</i></button>
                        </div>
                    </div>
                </form>
        </div>  
</div>


	<?php $content = ob_get_clean(); ?>


	<?php require('template.php'); ?>
