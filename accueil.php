<?php
	include("header.php");
?>
   
<p> Ce texte est totalement random <br/> mais on s'en fout lol lol lol mdr</p>

<p> Passez vous une bonne journée ?</p>

<!-- Fil d'actualité -->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="news.js" type="text/javascript"></script>
<ul>
    <?php
        include ('news.php');
    ?>
</ul>

<?php
	include("footer.php");
?>
