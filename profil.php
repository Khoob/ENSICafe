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
    echo $res['genre']."\n";
    echo $res['dateNaissance']."\n";
    echo $res['parcours']."\n";
    
        
?>
    
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                    $("p").hide();
                    $("button").click(function(){
                        $("p:first").show();
                    });
                });
        </script>
   
    <!--<p> <textarea name="parcours" rows="5" cols="50"></textarea> </p>-->
    <!--<p> <input type="submit" name="enregistrer" value="Enregistrer"/> </p>-->
    <button>Modifier parcours</button>
    <input type="text" name="parcours"/>
    
    
<?php
    $parcours = htmlspecialchars($_POST['parcours']);
    include('footer.php'); 
?>