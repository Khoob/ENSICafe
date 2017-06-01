<?php
	include('header.php');
	if(isset($_POST['envoi'])){
		if(!empty($_POST['nom'])){
			$nom=$_POST['nom'];
			if(!empty($_POST['prenom'])){
				$prenom=$_POST['prenom'];
				if(!empty($_POST['mel'])){
					$mel=$_POST['mail'];
					if(!empty($_POST['date'])){
						$date=$_POST['dateNaissance'];
						if(!empty($_POST['genre'])){
							$genre=$_POST['genre'];
							if(!empty($_POST['fonction'])){
								$fonction=$_POST['fonction'];
								if(!empty($_POST['mdp'])){
									$mdp=$_POST['mdp'];
									echo "<p> test: ".$mel." ".$date." ".$genre." ".$fonction.
									echo"<p>Félicitation ".$nom." ".$prenom.", vous vous êtes bien inscrit sur ENSICafé.</p>";
									$insertion=$bdd->prepare('INSERT INTO profil VALUES(NULL,"'.$nom.'","'.$prenom.'","'.$mel.'","'.$date.'","'.$genre.'","'.$fonction.'","'.$mdp.'")');
									$insertion->execute();
								}
							}
						}
					}
				}
			}
		}
	}
	include('footer.php');
?>