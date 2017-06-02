<?php
    include('header.php');

    $photo = $bdd->query('SELECT photo FROM profil WHERE mail='.$_SESSION['mail'].'');
    $nom = $bdd->query('SELECT nom FROM profil WHERE mail='.$_SESSION['mail'].'');
    $prenom = $bdd->query('SELECT prenom FROM profil WHERE mail='.$_SESSION['mail'].'');
    $perso = $bdd->query('SELECT naissance,genre,fonction FROM profil WHERE mail='.$_SESSION['mail'].''); //info perso
    $parcours = $bdd->query('SELECT parcours FROM profil WHERE mail='.$_SESSION['mail'].'');
    //echo '<br /><a href="Login.php">Login</a>';

    include('footer.php'); 
?>