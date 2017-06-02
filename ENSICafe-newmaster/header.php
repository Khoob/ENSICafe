<!DOCTYPE html>
 
<html lang='fr'>
<head>
<link rel='stylesheet' href='style.css' />
<meta charset="utf-8" />
<title>ENSICafé</title>
</head>
<body>
	<header>
			<h1>
                <section id="navigation">
                    <div class="aligne_gauche">
                        <a href="accueil.php"><img src="img/logo.jpg" width="50px" height="50px" title="logo-ensiscafe" alt="ENSICafe" /></a>
                         <a href="accueil.php">ENSICafé</a>
                   </div>
                    <div class="aligne_droite">
                        <a href="http://www.ensisa.uha.fr/" target="_blank"><img src="img/logo_ensisa.jpg" width="50px" height="50px" title="logo-ensisa" alt="ENSISA" /></a>
                    </div>
                    </section>
			</h1>
         
			<!--<nav>
			<a href="Login.html">Connexion</a>-->
             <?php
            include('navigation.php');
			session_start();
			try{
	$bdd=new PDO('mysql:host=localhost;dbname=ENSICafé;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}
	// la fonction de redirection ------------ 
	function redir($url){ 
		echo "<script language=\"javascript\">"; 
		echo "window.location='$url';"; 
		echo "</script>"; 
	} 
        ?>
	</header>
