<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=testprojet;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }

/*$req=$bdd->prepare("SELECT id,contenu FROM `news` ORDER BY date DESC LIMIT 5");

$req2=$bdd->prepare("SELECT id,contenu FROM `news` WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1");*/

if(!isset($_GET['id']))
  $req=$bdd->prepare("SELECT id,contenu FROM `news` ORDER BY date DESC LIMIT 5");
else
 $req=$bdd->prepare("SELECT id,contenu FROM `news` WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1");

$req->execute();
$first = true;
while($res = $req->fetch()){
    if($first){
        print '<script>setId('.$res['id'].');</script>';
        $first = false;
    }
    print '<li><span class="id">'.$res['id'].'</span>'.$res['contenu'].'</li>';
}
?>