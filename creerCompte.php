<?php
	include("head.php");
	include("header.php");
?>
	<section id="creerCompte">
		<form method="post" action="traitementCreerCompte.php">
		<p>
		<label for="nom">Votre Nom</label>
		<input type="text" name="nom" placeholder="Votre Nom"/>
		</p>
		<p>
		<label for="prenom">Votre Prenom</label>
		<input type="text" name="prenom" placeholder="Votre Prenom"/>
		</p>
		<p>
		<label for="mel">Votre mél</label>
		<input type="text" name="mel" placeholder="Votre mél"/>
		</p>
		<p>
		<label for="date">Votre date de naissance</label>
		<input type="date" name="date" placeholder="AAAAMMJJ"/>
		</p>
		<p>
		<label for="genre">Votre genre</label>
		<input type="text" name="genre" placeholder="Homme ou Femme"/>
		</p>
		<p>
		<label for="fonction">Votre fonction</label>
		<input type="text" name="fonction" placeholder="Ensaignant, Etudiant ou Ancien Etudiant"/>
		</p>
		<p>
		<label for="mdp">Votre mot de passe</label>
		<input type="text" name="mdp" placeholder="Votre mot de passe"/>
		</p>
		<p>
		<input type="submit" name="envoi" value="S'inscrire"/>
		</p>
		</form>
		</section>
<?php
	include("footer.php");
?>