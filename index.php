<?php
	include("header.php");
try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=testprojet;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
if(!empty($_POST['prenom'])){
				$prenom = htmlspecialchars($_POST['prenom']);
               			$type = $_POST['type'];
 
    			        $id=$bdd->query('SELECT id FROM profil WHERE profil.prenom="'.$prenom.'"');
                		$res=$id->fetch();
  
				if(!empty($_POST['contenu'])){
					$contenu = htmlspecialchars($_POST['contenu']);
                    			$insertion = $bdd->prepare('INSERT INTO actu VALUES(NULL,"'.$res['id'].'","'.$type.'",NOW(),"'.$contenu.'",NULL,NULL)'); 
                    			$insertion->execute();           
				}
        }
?>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<p> Ce texte est totalement random <br/> mais on s'en fout lol lol lol mdr</p>

<p> Passez vous une bonne journée ?</p>
<!-- Postez une actualité -->
<h3>Actualités</h3>
<p>Poster une actualité</p>
<form method="post" action="">
    <p>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="Votre prénom" />  
    </p>
    <p>
        <label for="type">Quel type d'actualité voulez-vous postez ?</label>
        <select name="type">
            <option value="annonce">Annonce</option>
            <option value="actu">Actualité</option>
        </select>
    </p>
    <p>
        <textarea name="contenu" rows="5" cols="50"></textarea>
    </p>
    <p>
        <input type="submit" value="Poster" name="poster" />
        <input type="reset" value="Annuler" />
    </p>
</form>
<!-- Fil d'actualité -->
<script src="js/news.js" type="text/javascript"></script>
<ul id="actus">
    <?php
        include ('news.php');
    ?>
</ul>

<?php
	include("footer.php");
?>
