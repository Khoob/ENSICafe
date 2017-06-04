<?php
    include('header-login.php');
?>

<br>
<div class="container">
    <div class="row">
        <h2 id="welcome-msg">Bienvenue à l'ensicafé !</h2>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <!-- Formulaire -->
            <div class="form-body">

                <!-- Tabs -->
                <ul class="nav nav-tabs final-login">
                    <li class="active"><a data-toggle="tab" href="#sectionA">Connexion</a></li>
                    <li><a data-toggle="tab" href="#sectionB">Inscription</a></li>
                </ul>

                <div class="tab-content">

                    <!-- Login -->
                    <div id="sectionA" class="tab-pane fade in active">
                        <div class="innter-form">
                            <form class="sa-innate-form" method="post" action="traitementLogin.php">

                                <label for="mail">Adresse mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="mail" placeholder="prenom.nom@uha.fr">
                                </div>
                                <br>

                                <label for="mdp">Mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" class="form-control" name="mdp" placeholder="mot de passe">
                                </div>
                                <br>

                                <button type="submit">Se connecter</button>
                                <p><a href="">Mot de passe oublié?</a></p>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /#login -->

                    <!-- Register -->
                    <div id="sectionB" class="tab-pane fade">
                        <div class="innter-form">
                            <form class="sa-innate-form" method="post" action="traitementInscription.php">

                                <label for="nom">Nom</label>
                                <input name="nom" required="required" type="text" placeholder="nom" />

                                <label for="prenom">Prénom</label>
                                <input name="prenom" required="required" type="text" placeholder="prénom" />

                                <label for="mail">Adresse mail</label>
                                <input name="mail" required="required" type="email" placeholder="prenom.nom@uha.fr"/>

                                <label for="mdp">Mot de passe</label>
                                <input type="password" name="mdp" placeholder="mot de passe"/>

                                <label for="date">Votre date de naissance</label>
                                <input type="date" name="date" placeholder="AAAAMMJJ"/>

                                <label for="genre" class="u_genre">Votre genre </label>
                                <select name="genre">
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>

                                <button type="submit">S'inscrire</button>
                                <p>Blablabla mentions légales, lorem ipsum blablablablabla</p>
                            </form>
                        </div>
                    </div>
                    <!-- /#register -->

                </div>
            </div>
            <!-- /#formulaire -->
        </div>
    </div>
</div>

<?php
    include('footer.php');
?>