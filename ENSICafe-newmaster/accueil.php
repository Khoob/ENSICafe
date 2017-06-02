<?php
	include("header.php");
?>
   
<p> Ce texte est totalement random <br/> mais on s'en fout lol lol lol mdr</p>

<p> Passez vous une bonne journée ?</p>

<!-- Fil d'actualité -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/news.js" type="text/javascript"></script>
<form id="posterActu" method="post" action="addNews.php" >
    <p>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="Votre prénom" id="prenom"/>  
    </p>
    <p>
        <label for="type">Quel type d'actualité voulez-vous postez ?</label>
        <select name="type" id = "type">
            <option value="annonce">Annonce</option>
            <option value="actu">Actualité</option>
        </select>
    </p>
    <p>
        <textarea name="contenu" rows="5" cols="50" id ="contenu"></textarea>
    </p>
    <p>
        <input type="submit" value="Poster" />
        <input type="reset" value="Annuler" />
    </p>
</form>
<ul id="actus">
    <?php
        include ('news.php');
    ?>
</ul>
<?php  
$auteur=$bdd->query('SELECT nom,prenom FROM profil WHERE "'.$_SESSION['id'].'"=id');
foreach($auteur as $a){
	$_SESSION['auteur']=$a['prenom']." ".$a['nom'];
}
		if(!empty($_POST['auteur'])){
				
				$date=getdate();
				if(!empty($_POST['contenu'])){
					$contenu = htmlspecialchars($_POST['contenu']);
				    $insertion = $bdd->prepare('INSERT INTO message VALUES(NULL,NOW(),"'.$contenu.'")');
				    $insertion->execute();            
				}
        }
?>
<?php
	echo "<p>".$_SESSION['auteur']."</p>"
?>
    <form method="post" action="">
                <textarea type="text" name="contenu" placeholder="Contenu"></textarea><br />
                <input type="submit" value="Envoyer" onclick="envReq()"/>
    </form>
<div id="messages">
    <?php
    $allmsg = $bdd->query('SELECT * FROM message ORDER BY id DESC LIMIT 0,8');
    while($msg = $allmsg->fetch())
    {
?>
(<?php echo $msg['dateEnvoi']; ?>) <b><?php echo $_SESSION['auteur']; ?> : </b><?php echo $msg['contenu']; ?><br/>
    <?php 
    }
    ?>
</div>


<script>
    setInterval('load_message()', 1500);
    function load_messages() {
        $('#messages').load('load_message.php');
    }
</script>
<?php
	include("footer.php");
?>
