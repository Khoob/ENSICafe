<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=testprojet;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }

if(!isset($_GET['id']))
  $req=$bdd->prepare("SELECT id,contenu FROM `news` ORDER BY date DESC LIMIT 3");
else
 $req=$bdd->prepare("SELECT id,contenu FROM `news` WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1");

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
