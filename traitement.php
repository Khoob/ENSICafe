<?php include ("header.php");
        if(!empty($_POST['pseudo'])){
				$pseudo = $_POST['pseudo'];
				if(!empty($_POST['message'])){
					$message = $_POST['message'];
				    $insertion = $bdd->prepare('INSERT INTO chat VALUES(NULL,"'.$pseudo.'","'.$message.'")');
				    $insertion->execute();
                    echo ' <p> Votre message est : '.$message.' et votre pseudo : '.$pseudo.' </p> ';             
				}
        }
            
	include('footer.php');
?>