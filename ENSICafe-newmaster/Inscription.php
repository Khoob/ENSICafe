<?php
	include("header.php");
?>
	<section id="Inscription">
		<form method="post" action="traitementInscription.php">
		<p>
		<label for="nom">Votre Nom</label>
		<input type="text" name="nom" placeholder="Votre Nom"/>
		</p>
		<p>
		<label for="prenom">Votre Prenom</label>
		<input type="text" name="prenom" placeholder="Votre Prenom"/>
		</p>
		<p>
		<label for="mail">Votre mail</label>
		<input type="email" name="mail" placeholder="Votre mail"/>
		</p>
		<p>
		<label for="date">Votre date de naissance</label>
		<input type="date" name="date" placeholder="AAAAMMJJ"/>
		</p>
		<p>
		<label for="genre">Votre genre </label>
		<select name="genre">
			<option value="homme">Homme</option>
			<option value="femme">Femme</option>
		</select>
		</p>
		<p>
		<label for="fonction">Votre fonction</label>
		<input type="text" name="fonction" placeholder="Enseignant, Etudiant ou Ancien Etudiant"/>
		</p>
		<p>
		<label for="mdp">Votre mot de passe</label>
		<input type="text" name="mdp" placeholder="Votre mot de passe"/>
		</p>
		<p>
		<input type="submit" name="inscription" value="S'inscrire"/>
		</p>
		</form>
	</section>
<?php
	include("footer.php");
?>