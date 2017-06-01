<?php
	// la fonction de redirection ------------ 
	function redir($url){ 
		echo "<script language=\"javascript\">"; 
		echo "window.location='$url';"; 
		echo "</script>"; 
	} 
	$reponse=$bdd->query('SELECT id,mail,mdp FROM profil');
	include('header.php');
	if(isset($_POST['envoi'])){
		if(!empty($_POST['mel'])){
			$mel=$_POST['mail'];
			if(!empty($_POST['mdp'])){
				$mdp=$_POST['mdp'];
				foreach($reponse as $element){
					if($element['mail']==$mel && $element['mdp']==$mdp){
					$_SESSION['id']=$element['id'];
					// Signale que l'utilisateur est connecté.
					$update=$bdd->prepare('UPDATE profil SET connected=1 WHERE id='.$element['id'].')');
					$update->execute();
					// Utiliser la redirection --------------- 
					redir("accueil.php"); 
					}
					else{
						echo "Vous vous êtes trompés de mail ou de mot de passe";
						redir("Login.php")
					}
				}
					
			}
		}
	}
	include('footer.php');
?>