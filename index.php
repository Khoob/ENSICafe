<?php
	include("header.php");
?>
<?php  if(!empty($_POST['auteur'])){
				$auteur = htmlspecialchars($_POST['auteur']);
				if(!empty($_POST['contenu'])){
					$contenu = htmlspecialchars($_POST['contenu']);
				    $insertion = $bdd->prepare('INSERT INTO actualites VALUES(NULL,"'.$auteur.'","'.$contenu.'",NOW())');
				    $insertion->execute();            
				}
        }
?>
    <form method="post" action="">
                <input type="text" name="auteur" placeholder="AUTEUR" value="<?php if(isset($auteur)) { echo $auteur; }?>"/></textarea><br />
                <textarea type="text" name="contenu" placeholder="MESSAGE" rows=3 cols=100></textarea><br />
                <input type="submit" value="Poster" />
    </form>
<?php
	include("footer.php");
?>