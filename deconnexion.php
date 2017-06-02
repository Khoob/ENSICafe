<?php
	include("header1.php");
?>
     
<p> 'Déconnexion réussie' </p>

<?php
    //echo $_SESSION;
    unset( $_SESSION );
    

	include("footer.php");
?>