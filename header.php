<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
	
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
<link rel='stylesheet' href='style.css' >
<meta charset="utf-8" />
<title>ENSICafé</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<header>
			<h1>
            <img id="img_gauche" src="img/logo.jpg" width="50px" height="50px" title="logo-ensiscafe" alt="ENSICafe" onclick="alert('Laisses cette image tranquille !');"/>
			<a href="index.html">ENSICafé</a>
            <img id="img_droite" src="img/logo_ensisa.jpg" width="50px" height="50px" title="logo-ensisa" alt="ENSISA" onclick="alert('logo de ENSISA :D');"/>
			</h1>
             <?php
            include('navigation.php'); 
        ?>
	</header>
