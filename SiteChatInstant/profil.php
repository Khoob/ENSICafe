<?php
    session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

    if(isset($_GET['id']) AND $_GET['id'] > 0)
    {
        $getid = intval($_GET['id']);
        $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
     
?>
<html>

    <head>
        <meta charset="utf-8">
        <title> ROAD TO CHAT </title>
    </head>
    <body>
        <div align="center">
            <h2> Profil de <?php echo $userinfo['prenom']; ?></h2>
            <br /><br />
            <img src="membres/avatars/<?php echo $userinfo['avatar']?>"
            <br/><br />
            Nom = <?php echo $userinfo['nom']; ?>
            <br/>
            Prénom = <?php echo $userinfo['prenom']; ?>
            <br/>
            Mail = <?php echo $userinfo['mail']; ?>
            <br/>
             <?php
                if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                {
            ?>
                    <a href="editionprofil.php"> Editer mon profil </a> <br />
                    <a href="envoi.php"> Envoyer un message </a> <br/>
                    <a href="reception.php"> Boîte de réception </a> <br/>
                    <a href="deconnexion.php"> Se déconnecter </a> <br/>
            <?php
                }
            ?>
        </div>
    </body>
</html>
<?php 
    }
?>
