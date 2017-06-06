<?php
    session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

    if(isset($_SESSION['id']) AND !empty($_SESSION['id']))
    {
    $msg = $bdd->prepare('SELECT * FROM messages WHERE id_destinataire = ? ORDER BY id DESC');
    $msg->execute(array($_SESSION['id']));
    $msg_nbr = $msg->rowCount();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Boîte de réception</title>
    <meta charset="utf-8"/>
</head>
    <body>
        <a href="profil.php?id=<?= $_SESSION['id'] ?>"> Profil </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="envoi.php"> Nouveau message</a><br /><br /><br />
        <h3> Votre boîte de réception :</h3>
        <?php 
            if($msg_nbr == 0){ echo "Vous n'avez aucun message ..."; }
            while($m = $msg->fetch()) {
            $p_exp = $bdd->prepare('SELECT mail FROM membres WHERE id = ?');
            $p_exp->execute(array($m['id_expediteur']));
            $p_exp = $p_exp->fetch();
            $p_exp = $p_exp['mail'];
        ?>
        <?php if($m['lu'] == 1){ ?> <i>(Lu)<i> <?php } ?> <b><?= $p_exp ?></b> vous a envoyé <a href="lecture.php?id=<?= $m['id'] ?>">ce message</a> <br />
        --------------------------------------------------------<br/>
        <?php } ?>
    
    </body>
</html>
<?php } ?>