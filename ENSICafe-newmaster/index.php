<?php
	include("header1.php");
?>
	<section id="login">
		<form method="post" action="traitementLogin.php">
		<p>
		<label for="mail">Votre mail</label>
		<input type="email" name="mail" placeholder="Votre mail"/>
		</p>
		<p>
		<label for="mdp">Votre mot de passe</label>
		<input type="password" name="mdp" placeholder="Votre mot de passe"/>
		</p>
		<p>
		<input type="submit" name="connexion" value="Connexion"/>
		</p>
        <p>
		<input type="submit" name="inscription" value="S'inscrire"/>
		</p>
		</form>
	</section>
<?php
	include("footer.php");
?>