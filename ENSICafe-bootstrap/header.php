<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>ENSICafé</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

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

    <!-- Wrapper : contenu principal de la page -->
    <div id="wrapper">

        <?php
        include('sidebar.php');
        ?>

        <!-- Page Content : tout le contenu principal à mettre ici -->
        <div id="page-content-wrapper">