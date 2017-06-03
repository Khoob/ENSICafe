<?php
try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=ensicafé;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
if(!empty($_POST['contenu'])){
    $type = $_POST['type'];
	$contenu = htmlspecialchars($_POST['contenu']);
    $insertion = $bdd->prepare('INSERT INTO actu VALUES(NULL,"'.$type.'",NOW(),"'.$contenu.'",NULL,NULL)'); 
    $insertion->execute();
    }
?>