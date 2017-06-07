<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=testImage;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}
	$dossier = 'img/';
if(is_dir($dossier)){
} else{
   mkdir($dossier);
}
?>
<form enctype="multipart/form-data" method="POST">
	<label>Mettez l'url de l'image ou choississez votre fichier</label>
	<input type="file" name="avatar" />
	<input type="text" name="image" placeholder="l'url de l'image" />
	<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
	<input type="submit" name="upload" value="Envoyer" />
</form>
<?php
if(isset($_POST['upload'])){
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 100000000;
	$taille = filesize($_FILES['avatar']['tmp_name']);
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['avatar']['name'], '.'); 
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions) && empty($_POST['image'])) //Si l'extension n'est pas dans le tableau
	{
		 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
	}
	if($taille>$taille_maxi && empty($_POST['image']))
	{
		 $erreur = 'Le fichier est trop gros...';
	}
	if(!isset($erreur) && empty($_POST['image'])) //S'il n'y a pas d'erreur, on upload
	{
		 //On formate le nom du fichier ici...
		 $fichier = strtr($fichier, 
			  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
		 if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		 {
			  echo 'Upload effectué avec succès !';
		 }
		 else //Sinon (la fonction renvoie FALSE).
		 {
			  echo 'Echec de l\'upload !';
		 }
	}
	if(!empty($erreur))
	{
		 echo $erreur;
	}
	if(!empty($fichier)){
		$image = htmlspecialchars($fichier);
		$stockage="disque";
		echo " test ";
		$insertion = $bdd->prepare('INSERT INTO image(url,stockage) VALUES(?,?)');
		$insertion->execute(array($fichier,$stockage));
		if(!empty($insertion)){
			print_r($bdd->errorInfo());
		}
	}
	if(!empty($_POST['image'])){
		$image2 = htmlspecialchars($_POST['image']);
		$stockage="url";
		echo " test 2 ";
		$insertion2 = $bdd->prepare('INSERT INTO image(url,stockage) VALUES(?,?)');
		$insertion2->execute(array($image2,$stockage));
		if(!empty($insertion2)){
			print_r($bdd->errorInfo());
		}
	}
}
?>
<div>
	<?php
		$image=$bdd->query("SELECT url,stockage from image");
		foreach($image as $im){
			if($im['stockage']=="url"){
				echo '<img src="'.$im['url'].'" alt="une image" width="400" height="400"/>';
			}
			else{
				echo '<a href="'.$dossier.$im['url'].'"" ><img src="'.$dossier.$im['url'].'" alt="une image" width="400" height="400"/></a>';
			}
		}
	?>
</div>