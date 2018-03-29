<?php $title = "Blog d'écrivain de Jean Forteroche"; ?>

<?php ob_start(); ?>



<div class="container">

<a class="btn-floating btn-large waves-effect waves-light light-blue darken-4" href="index.php"><i class="material-icons">home</i></a>

<div class="section">
	<div class="col s12"><h3>Connexion administrateur du blog</h3></div>
</div>
	<div class="section">
		  
		<div class="row">
			<form action="index.php?action=connexion" method="post">
				<div class="row">
					<div class="input-field col s7">
						<input id="login" type="password" name="login" class="validate">
						<label for="login">Pseudo</label>
					</div>


					<div class="row">
						<div class="input-field col s10">
							<input id="password" type="password" name="password" class="validate">
							<label for="password">Mot de passe</label>
						</div>						</div>
						<div class="section">
							<div class="row">
								<div class="col s2 offset-s10">
								<button type='submit' name='btn_login' class="btn-floating  btn-large waves-effect waves-light light-blue darken-4 rigth"><i class="material-icons">power_settings_new</i></button>
							</div>
					
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php $content = ob_get_clean(); ?>


	<?php require('template.php'); ?>


<!--<label for="login">Pseudo</label>
		<input type="login" id="login" name="login" required /><br />
		<label for="password">Mot de passe</label>
		<input type="password" class="password" name="password" required /><br />
		<input type="submit" name="connexion" class="buttonStyle" value="Connexion" />-->