<?php
	$lmail=$bdd->query('SELECT mail FROM profil');
	$lmdp=$bdd->query('SELECT mdp FROM profil');
	include('header.php');
	if(isset($_POST['envoi'])){
		if(!empty($_POST['mel'])){
			$mel=$_POST['mail'];
			if(!empty($_POST['mdp'])){
				$mdp=$_POST['mdp'];
				
					
			}
		}
	}
	include('footer.php');
?>