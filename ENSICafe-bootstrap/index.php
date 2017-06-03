<?php
	include("header.php");
?>

        <!-- Login Form -->
        <div class="container">
            <div class="row">
                <h2 id="welcome-msg">Bienvenue à l'ensicafé !</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <!-- Formulaire -->
                    <div class="form-body">
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
                                        <input type="text" name="mail" placeholder="prenom.nom@uha.fr">
                                        <label for="mdp">Mot de passe</label>
                                        <input type="password" name="mdp" placeholder="mot de passe">
                                        <button type="submit" name="connexion">Se connecter</button>
                                        <!--<a href="">Forgot Password?</a>-->
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
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
                                        
                                        <button type="submit" name="inscription">S'inscrire</button>
                                        <p>Blablabla mentions légales, lorem ipsum blablablablabla</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /#formulaire -->
                </div>
            </div>
        </div>

        <!-- /#login form -->
<?php
	include("footer.php");
?>