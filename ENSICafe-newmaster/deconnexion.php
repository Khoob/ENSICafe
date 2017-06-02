<header>
    <a href="index.php"><img src="img/logo.jpg" width="50px" height="50px" title="logo-ensiscafe" alt="ENSICafe" /></a>
    <a href="index.php">ENSICafé</a>
</header>
     
<p> 'Déconnexion réussie' </p>

<?php
    //echo $_SESSION;
    unset( $_SESSION );
    

	include("footer.php");
?>