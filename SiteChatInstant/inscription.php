<?php
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

    if(isset($_POST['forminscription']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date = htmlspecialchars($_POST['date']);
        $genre = htmlspecialchars($_POST['genre']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
        
        if(!empty($_POST['date']) AND !empty($_POST['genre']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
        {
            $nomlength = strlen($nom);
            if($nomlength <= 255)
            {
                if($mail == $mail2)
                {
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                    {
                        $reqmail = $bdd->prepare('SELECT * FROM membres WHERE mail= ?');
                        $reqmail->execute(array($mail));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0)
                        {
                            if($mdp == $mdp2)
                            {
                                $insertmbr = $bdd->prepare('INSERT INTO membres( mail, motdepasse, nom, prenom, date, genre, avatar) VALUES (?,?,?,?,?,?,?)');
                                $insertmbr->execute(array($mail, $mdp, $nom, $prenom, $date, $genre, "membres/avatars/default.jpg"));
                                $erreur = "Votre compte a bien été créé. <a href=\"index.php\"> Me connecter</a>" ;
                                //mettre $_SESSION au dessus
                                //header('Location : index.php')
                            }
                            else 
                            {
                                $erreur = "Vos mots de passe ne correspondent pas !";
                            }
                        }
                        else
                        {
                            $erreur = "Adresse mail est déjà utilisée.";
                        }
                    }
                    else
                    {
                        $erreur = "Votre adresse mail n'est pas valide !";
                    }
                }
                else
                {
                    $erreur = "Vos adresses mails ne correspondent pas !";
                }
            }
            else
            {
                    $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
            }
        }
        else
        {
            $erreur = "Tous les champs doivent être complétés.";
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
            <h2> Inscription </h2>
            <br /><br />
            <form method="POST" action"">
                <table>
                    <tr>
                        <td align="right">
                            <label for="Nom"> Nom :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="Prenom"> Prénom :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre prénom" id="prenom" name="prenom"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="date"> Date de naissance :</label>
                        </td>
                        <td>
                            <input type="date" placeholder="Votre date de naissance" id="date" name="date" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="genre"> Genre :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre genre" id="genre" name="genre"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mail"> Mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mail2"> Confirmation du mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Confirmer votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mdp"> Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mdp2"> Confirmation du mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Confirmer votre mdp" id="mdp2" name="mdp2" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <input type="submit" name="forminscription" value="Je m'inscris"/>
                        </td>
                    </tr>
                </table>
            </form>
            <?php 
                if(isset($erreur))
                {
                    echo '<font color="red">'.$erreur.'</font>';
                }
            ?>
        </div>
    </body>
</html>