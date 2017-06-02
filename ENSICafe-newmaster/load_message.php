<?php
    try{
	$bdd=new PDO('mysql:host=localhost;dbname=ENSICafé;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}
    $allmsg = $bdd->query('SELECT * FROM message ORDER BY id DESC LIMIT 0,8');
    while($msg = $allmsg->fetch())
    {
?>
(<?php echo $msg['dateEnvoi']; ?>) <b><?php echo $msg['auteur']; ?> : </b><?php echo $msg['contenu']; ?><br/>
<?php 
    }
?>