<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=ensicafé;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
    include('header.php');
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['nom'])){
            $nom = htmlspecialchars($_POST['nom']);   
    
            if(!empty($_POST['description'])){
                $description = htmlspecialchars($_POST['description']);   
    
                if(isset($_POST['photo'])){
                    $photo = htmlspecialchars($_POST['photo']);   
    
                    if(!empty($_POST['membres'])){
                        $membres = htmlspecialchars($_POST['membres']);   
    
                        if(!empty($_POST['nompres'])){
                            $nompres = htmlspecialchars($_POST['nompres']);   
    
                            if(isset($_POST['realisations'])){
                                $realisations = htmlspecialchars($_POST['realisations']);   
    
                                if(isset($_POST['evenements'])){
                                    $evenements = htmlspecialchars($_POST['evenements']); 
                                    $sql=$bdd->query("INSERT INTO clubs(id,nom,description,photo,membres,president,realisations,evenements) VALUES (NULL,'$nom','$description','$photo','$membres','$nompres','$realisations','$evenements') ");
    }
    }
    }
    }
    }
    }
    }
    }
$clubs = $bdd->query('SELECT nom FROM clubs');
    echo '<p>'."Liste des clubs: ".'</p>';
    foreach ($clubs as $value){
        echo '<p> -'.$value['nom'].'</p>';    
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("form").hide();
        //$("button:first").hide();
    $(".btn2").click(function(){
        $("form").show();
        //$("button:first").show();
    });
    $(".btn1").click(function(){
        $("form").hide();
       //$("button:first").hide();
    });
});
</script>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nom">nom club</label>
    <input type=text name="nom" placeholder="nom club"/>
    <br/>

    <label for="description">description</label>
    <input type=text name="description" placeholder="description"/>
    <br/>

    <label for="photo">photo</label>
    <input type=text name="photo" placeholder="photo"/>
    <br/>
    <label for="membres">nombre de membres</label>
    <input type=integer name="membres" placeholder="nombre de membres"/>
    <br/>
    <label for="nompres">nom president</label>
    <input type=text name="nompres" placeholder="nom president"/>
    <br/>
    <textarea name="realisations" placeholder="realisations"></textarea>
    <br/>
    <textarea name="evenements" placeholder="evenements"></textarea>
    <br/>
    <input type="submit" value="enregistrer" />
</form>

<button class="btn2">creer un nouveau club</button>
<?php 
 include('footer.php'); 
?>