<?php
    include('header.php');
try{
	$bdd=new PDO('mysql:host=localhost;dbname=ENSICafé;charset=utf8','root','');
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}
?>
<!-- Contenu principal -->

<div class="container">

    <!-- à enlever -->
    <div class="jumbotron" style="background-color: white;">
        <p>Contenu à remplacer ici ! (garder les div "page-content-wrapper" et "container")</p>
    </div>
    <!-- /#à enlever -->

</div>

<!-- Contenu principal -->

<?php
    include('footer.php');
?>
