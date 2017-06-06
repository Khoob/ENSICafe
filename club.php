<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=ensicafé;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
    include('header.php');
    $clubs = $bdd->query('SELECT nom FROM clubs');
    echo '<p>'."Liste des clubs: ".'</p>';
    foreach ($clubs as $value){
        echo '<p> -'.$value['nom'].'</p>';    
    }
    if(isset($_POST['nom'])){
        $nom = htmlspecialchars($_POST['nom']);   
    
    if(isset($_POST['description'])){
        $description = htmlspecialchars($_POST['description']);   
    
    if(isset($_POST['photo'])){
        $photo = htmlspecialchars($_POST['photo']);   
    
    if(isset($_POST['membres'])){
        $membres = htmlspecialchars($_POST['membres']);   
    
    if(isset($_POST['nompres'])){
        $nompres = htmlspecialchars($_POST['nompres']);   
    
    if(isset($_POST['realisations'])){
        $realisations = htmlspecialchars($_POST['realisations']);   
    
    if(isset($_POST['evenements'])){
        $evenements = htmlspecialchars($_POST['evenements']); 
        //$sql=$bdd->query('INSERT INTO "'.$clubs.'" VALUES ('.$nom.','.$description.','.$photo.','.$membres.','.$nompres.','.$realisations.','.$evenements.') ');
    }
    }
    }
    }
    }
    }
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


    <label for="description">description</label>
    <input type=text name="description" placeholder="description"/>


    <label for="photo">photo</label>
    <input type=text name="photo" placeholder="description"/>

    <label for="membres">nombre de membres</label>
    <input type=integer name="membres" placeholder="nombre de membres"/>

    <label for="nompres">nom president</label>
    <input type=text name="nompres" placeholder="nom president"/>

    <textarea name="realisations" placeholder="realisations"></textarea>

    <textarea name="evenements" placeholder="evenements"></textarea>
    <input type="submit" value="enregistrer" />
</form>

<button class="btn2">creer un nouveau club</button>
<?php 
 include('footer.php'); 
?>