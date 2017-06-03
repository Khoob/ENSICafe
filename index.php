<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <title>ENSICafé</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><h1>ensicafé <small>le réseau social dopé à la caféine</small></h1></a>
                    </div>
                </div>
            </div>
        </nav>

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

                                        <button type="submit">Se connecter</button>
                                        <a href=""> Mot de passe oublié ?</a>
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

        <!-- /#login form -->

        <!-- Footer -->
        <footer class="footer">
            <p>Ensicafé 2017</p>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>