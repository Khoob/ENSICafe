<?php
    include('header.php');
?>

<!-- Contenu principal -->

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">

			<div class="panel-body">
			<legend>Paramètres</legend>
				
				<div class="media">
					<img class="media-object img-circle" src="img/profile_test1.png" height="200px" width="200px">
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="mdp">Nouveau mot de passe</label>
					<div class="col-md-4">
						<input type="password" name="mdp" placeholder="Nouveau mot de passe" class="form-control input-md">
					</div><br><br>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="mdp">Confirmer le nouveau mot de passe</label>
					<div class="col-md-4">
						<input type="password" name="mdp" placeholder="Confirmer le mot de passe" class="form-control input-md">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contenu principal -->

<?php
	include('chatbox.php');
    include('footer.php');
?>