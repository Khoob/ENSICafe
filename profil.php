<?php
     try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=ensicafé;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
   
    include('header.php');
    //echo 'le mail :'.$_SESSION['mail'];
    $profil = $bdd->query('SELECT * FROM profil WHERE mail="'.$_SESSION['mail'].'"');
    $res=$profil->fetch();
    echo $res['photo']."\n";
    echo $res['nom']."\n";
    echo $res['prenom']."\n";
    echo '<p>'.$res['genre'].'</p>';
    echo '<p>'.$res['dateNaissance'].'</p>';
    $parcours = $res['parcours'];
    
    if(isset($_POST['parcours'])){
        $parcours = htmlspecialchars($_POST['parcours']);
        $sql=$bdd->query('UPDATE profil SET parcours="'.$parcours.'"WHERE mail="'.$_SESSION['mail'].'"');
    }
    echo "votre parcours : ";
    echo $parcours;
        
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="parcours" placeholder="Votre parcours"/>
    <input type="submit" value="Modifier votre parcours" />
</form>
    
<?php
    include('footer.php'); 
?>