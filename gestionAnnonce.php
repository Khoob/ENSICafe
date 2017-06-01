<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=testprojet;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }

if(!isset($_GET['id']))
  $req=$bdd->prepare("SELECT id,contenu FROM `actu` WHERE type='annonce' ORDER BY date DESC LIMIT 5");
else
 $req=$bdd->prepare("SELECT id,contenu FROM `actu` WHERE id>'".addslashes($_GET['id'])."'AND type='annonce' ORDER BY date LIMIT 1");

$req->execute();
$first = true;
while($res = $req->fetch()){
    if($first){
        print '<script>setId('.$res['id'].');</script>';
        $first = false;
    }
    print '<li>'.$res['contenu'].'</li>';
}
?>