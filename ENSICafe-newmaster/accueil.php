<?php
	include("header.php");
?>
   
<p> Ce texte est totalement random <br/> mais on s'en fout lol lol lol mdr</p>

<p> Passez vous une bonne journée ?</p>

<!-- Fil d'actualité -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/news.js" type="text/javascript"></script>
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
    <form method="post" action="">
                <input type="text" name="auteur" placeholder="Pseudo" value="<?php if(isset($auteur)) { echo $_SESSION['auteur']; }?>"/></textarea><br />
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
