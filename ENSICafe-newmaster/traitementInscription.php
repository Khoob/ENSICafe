<?php
	include('header.php');
	$reponse2=$bdd->query('SELECT mail FROM profil');
	if(isset($_POST['inscription'])){
		if(!empty($_POST['nom'])){
			$nom=htmlspecialchars($_POST['nom']);
			if(!empty($_POST['prenom'])){
				$prenom=htmlspecialchars($_POST['prenom']);
				if(!empty($_POST['mail'])){
					$mail=htmlspecialchars($_POST['mail']);
					if(!empty($_POST['date'])){
						$date=htmlspecialchars($_POST['dateNaissance']);
						if(!empty($_POST['genre'])){
							$genre=htmlspecialchars($_POST['genre']);
							if(!empty($_POST['fonction'])){
								$fonction=htmlspecialchars($_POST['fonction']);
								if(!empty($_POST['mdp'])){
									$mdp=sha1($_POST['mdp']);
									foreach($reponse2 as $amail){
										if($amail['mail']==$mail){
											redir("Inscription.php");
										}
									}
									echo "<p> test: ".$mail." ".$date." ".$genre." ".$fonction."</p>";
									echo"<p>Félicitation ".$nom." ".$prenom.", vous vous êtes bien inscrit sur ENSICafé.</p>";
									$insertion=$bdd->prepare('INSERT INTO profil VALUES(NULL,"'.$nom.'","'.$prenom.'","'.$mail.'","'.$date.'","'.$genre.'","'.$fonction.'","'.$mdp.'")');
									$insertion->execute();
									redir("index.php");
								}
							}
						}
					}
				}
			}
		}
	}
	//include('footer.php');
?>
