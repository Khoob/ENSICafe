<?php
    include('header.php');
?>

<!-- Contenu principal -->

<div class="container">

	<div class="col-md-10 col-md-offset-1">
		<!-- Main panel -->
		<div class="profile-main">
			<div class="profile-background">
				<img class="card-bkimg" alt="" src="img/cafe2.jpg">
			</div>
			<div class="profile-avatar">
				<img class="img-circle" src="img/profile_test1.png">
			</div>
			<div class="profile-title">
				<span class="profile-name">Le chat</span><br>
				<span class="label label-info">Chat</span>
				<span class="label label-danger">Griffeur</span>
			</div>
		</div>

		<div class="panel-group panel-profile" id="accordion" role="tablist" aria-multiselectable="true">
			<!-- Bio -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle btn-block" data-toggle="collapse" href="#collapseOne"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Bio</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
					<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<!-- /#bio -->

			<!-- Parcours -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle btn-block" data-toggle="collapse" href="#collapseTwo"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>Parcours</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel">
					<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<!-- /#parcours -->

			<!-- Parcours -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle btn-block" data-toggle="collapse" href="#collapseThree"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>Un autre panel ?</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel">
					<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<!-- /#parcours -->

		</div>

	</div>

</div>

<!-- /#contenu principal -->

<?php
	include('chatbox.php');
    include('footer.php');
?>