<?php
    session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

    if(isset($_SESSION['id']))
    {
        $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
        $requser->execute(array($_SESSION['id']));
        $user = $requser->fetch();
        
        if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND isset($_POST['newprenom']) AND !empty($_POST['newprenom']))
        {
            $newnom = htmlspecialchars($_POST['newnom']);
            $newprenom = htmlspecialchars($_POST['newprenom']);
            $insertnomprenom = $bdd->prepare("UPDATE membres SET nom = ?, prenom = ? WHERE id = ?");
            $insertnomprenom->execute(array($newnom, $newprenom, $_SESSION['id']));
        }
        
        if(isset($_POST['newmail']) AND !empty($_POST['newmail']))
        {
            $newmail = htmlspecialchars($_POST['newmail']);
            $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
            $insertmail->execute(array($newmail, $_SESSION['id']));
        }
        
        if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
        {
            $mdp1 = sha1($_POST['newmdp1']);
            $mdp2 = sha1($_POST['newmdp2']);
            if($mdp1 == $mdp2)
            {
                $insertmdp = $bdd->prepare('UPDATE membres SET motdepasse = ? WHERE id = ?');
                $insertmdp->execute(array($mdp1, $_SESSION['id']));
            }
            else 
            {
                $msg = "Vos deux mots de passe ne correspondent pas.";   
            }
        }

        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
        {
            $taillemax = 2097152;
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
            if($_FILES['avatar']['size'] <= $taillemax)
            {
                $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                if(in_array($extensionUpload, $extensionsValides))
                {
                    $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
                    $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                    if($resultat)
                    {
                        $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id'); 
                        $updateavatar->execute(array(
                            'avatar' => $_SESSION['id'].".".$extensionUpload,
                            'id' => $_SESSION['id']
                        ));
                        header('Location: profil.php?id='.$_SESSION['id']);
                    }
                    else
                    {
                        $msg = "Erreur durant l'importation de votre photo de profil";   
                    }
                }
                else
                {
                    $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png.";  
                }
            }
            else
            {
                $msg = "Votre photo de profil ne doit pas dépasser 2 Mo.";
            }
        }
        
        
?>
<html>

    <head>
        <meta charset="utf-8">
        <title> ROAD TO CHAT </title>
    </head>
    <body>
        <div align="center">
            <h2> Edition du profil :</h2>
            <div align="left">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label>Nom : </label>
                    <input type="text" name="newnom" placeholder="Nom" value="<?= $user['nom']?>"/><br/><br/>
                    <label>Prénom : </label>
                    <input type="text" name="newprenom" placeholder="Prénom" value="<?= $user['prenom']?>"/><br/><br/>
                    <label>Mail : </label>
                    <input type="email" name="newmail" placeholder="Mail" value="<?= $user['mail']?>"/><br/><br/>
                    <label>Mot de passe : </label>
                    <input type="password" name="newmdp1" placeholder="Mot de passe"/><br/><br/>
                    <label>Confirmer le mot de passe : </label>
                    <input type="password" name="newmdp2" placeholder="Confirmer le mdp"/><br/><br/>
                    <label>Avatar :</label>
                    <input type="file" name="avatar"/><br/><br/>
                    <input type="submit" value="Mettre à jour mon profil" />
                </form>
                <?php if(isset($msg)) { echo $msg; } ?>
                <a href="profil.php?id=<?= $_SESSION['id'] ?>"> Retour au profil </a>
            </div>
        </div>
    </body>
</html>
<?php 
    } else {
        header("Location : index.php");
    }
?>