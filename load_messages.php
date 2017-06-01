<?php
    $bdd = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8','root','');
    $allmsg = $bdd->query('SELECT * FROM actualites ORDER BY id DESC LIMIT 0,8');
    while($msg = $allmsg->fetch())
    {
?>
(<?php echo $msg['date']; ?>) <b><?php echo $msg['auteur']; ?> : </b><?php echo $msg['contenu']; ?><br/>
<?php 
    }
?>