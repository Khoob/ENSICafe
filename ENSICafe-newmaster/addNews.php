<?php
try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=ensicafé;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
if(!empty($_POST['prenom'])){
				$prenom = htmlspecialchars($_POST['prenom']);
                $type = $_POST['type'];
                $id=$bdd->query('SELECT id FROM profil WHERE profil.prenom="'.$prenom.'"');
                $res=$id->fetch();
				if(!empty($_POST['contenu'])){
					$contenu = htmlspecialchars($_POST['contenu']);
                  $insertion = $bdd->prepare('INSERT INTO actu VALUES(NULL,"'.$res['id'].'","'.$type.'",NOW(),"'.$contenu.'",NULL,NULL)'); 
                    $insertion->execute();
				}
    }
?>