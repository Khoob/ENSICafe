<?php
	include("head.php");
	include("header.php");
?>
	<section id="login">
		<form method="post" action="traitementLogin.php">
		<p>
		<label for="mel">Votre mél</label>
		<input type="text" name="mel" placeholder="Votre mél"/>
		</p>
		<p>
		<label for="mdp">Votre mot de passe</label>
		<input type="text" name="mdp" placeholder="Votre mot de passe"/>
		</p>
		</form>
		</section>
<?php
	include("footer.php");
?>