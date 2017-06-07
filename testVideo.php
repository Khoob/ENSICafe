<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=testImage;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}
	$dossier = 'video/';
if(is_dir($dossier)){
} else{
   mkdir($dossier);
}/* pour modifier les limites du POST?
if(is_dir(".user.ini")){
} else{
   mkdir(".user.ini");
}
$fich=fopen(".user.ini","r+");
fputs($fich,'post_max_size=1G');
fputs($fich,'upload_max_filesize=5G');
fclose($fich);*/
?>
<form enctype="multipart/form-data" method="POST">
	<label>Mettez l'url de la video ou choississez votre fichier</label>
	<input type="file" name="avatar" />
	<input type="text" name="video" placeholder="l'url de la video" />
	<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
	<input type="submit" name="upload" value="Envoyer" />
</form>
<?php
if(isset($_POST['upload'])){
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 100000000;
	$taille = filesize($_FILES['avatar']['tmp_name']);
	$extensions = array('.mp4', '.ogv', '.webm');
	$extension = strrchr($_FILES['avatar']['name'], '.'); 
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions) && empty($_POST['video'])) //Si l'extension n'est pas dans le tableau
	{
		 $erreur = 'Vous devez uploader un fichier de type mp4,ogv, webm.';
	}
	if($taille>$taille_maxi && empty($_POST['video']))
	{
		 $erreur = 'Le fichier est trop gros...';
	}
	if(!isset($erreur) && empty($_POST['video'])) //S'il n'y a pas d'erreur, on upload
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
		$video = htmlspecialchars($fichier);
		$stockage="disque";
		$insertion = $bdd->prepare('INSERT INTO video(url,stockage) VALUES(?,?)');
		$insertion->execute(array($fichier,$stockage));
		/* pour tester la requete sql
		if(!empty($insertion)){
			print_r($bdd->errorInfo());
		}*/
	}
	if(!empty($_POST['video'])){
		$video2 = htmlspecialchars($_POST['video']);
		$stockage="url";
		$insertion2 = $bdd->prepare('INSERT INTO video(url,stockage) VALUES(?,?)');
		$insertion2->execute(array($video2,$stockage));
		/* pour tester la requete sql
		if(!empty($insertion2)){
			print_r($bdd->errorInfo());
		}*/
	}
}
?>
<div>
<?php
	$video=$bdd->query("SELECT url,stockage from video");
	
	foreach($video as $vid){
		if($vid['stockage']=="url"){
			$save=$vid['url'];
			$url=substr($vid['url'],0,23);
			$url=$url."/embed/".substr($save,32);
			echo '<iframe width="400" height="400" src="'.$url.'" frameborder="0" allowfullscreen></iframe>';
		}
		else{
			echo '<video controls="controls" src="'.$dossier.$vid['url'].'" width="400" height="400"/>une video</video>';
		}
	}
?>
</div>