<?php
	include('header.php');
	$reponse=$bdd->query('SELECT id,mail,mdp FROM profil');
	if(isset($_POST['connexion'])){
		if(!empty($_POST['mail'])){
			$mail=$_POST['mail'];
			if(!empty($_POST['mdp'])){
				$mdp=$_POST['mdp'];
				foreach($reponse as $element){
					if($element['mail']==$mail && $element['mdp']==$mdp){
					$_SESSION['id']=$element['id'];
					// Signale que l'utilisateur est connecté.
					$update=$bdd->prepare('UPDATE profil SET connected=1 WHERE id='.$element['id'].')');
					$update->execute();
					// Utiliser la redirection --------------- 
					redir("accueil.php"); 
					}
				}
				redir("index.php");
			}
			redir("index.php");
		}
		redir("index.php");
	}
	if(isset($_POST['inscription'])){
		redir("Inscription.php");
	}
	redir("accueil.php");
	include('footer.php');
?>