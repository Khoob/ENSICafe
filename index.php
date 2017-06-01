<?php
	include("header.php");
?>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<p> Ce texte est totalement random <br/> mais on s'en fout lol lol lol mdr</p>

<p> Passez vous une bonne journée ?</p>

<!-- Fil d'actualité -->
<script src="js/news.js" type="text/javascript"></script>
<ul id="actus">
    <?php
        include ('news.php');
    ?>
</ul>

<?php
	include("footer.php");
?>
