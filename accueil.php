<?php
    include('header.php');
?>

<div class="container">

    <!-- ********** CAROUSEL NEWS : annonces/news en haut de la page d'accueil ********** -->

    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" id="carousel-news">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-news" data-slide-to="1"></li>
                    <li data-target="#carousel-news" data-slide-to="2"></li>
                </ol>

                <!-- Carousel Slides / News -->
                <div class="carousel-inner">

                    <!-- News 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <!-- Auteur (nom + tag) -->
                                <div class="col-md-3 author-outer">
                                    <div class="author-inner">
                                        <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif">
                                        <p>Université de Haute-Alsace
                                        <span class="label label-danger">Université</span></p>
                                    </div>
                                </div>
                                <!-- Contenu (titre, message, redirection) -->
                                <div class="col-md-9">
                                    <h4>Accord de Paris : l’UE s’inquiète de la décision américaine</h4>
                                    <span>Dans l’attente de l’annonce d’une sortie éventuelle des Etats-Unis, l’Union européenne, la Chine et la Russie défendent le traité visant à limiter le réchauffement climatique.</span>
                                    <a href="#"><span class="news-more"> Lire la suite...</span></a>
                                    <br><small>14 juin 2028</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- News 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-md-3 author-outer">
                                    <div class="author-inner">
                                        <img class="img-circle" src="img/profile_test1.png">
                                        <p>Le chat présent partout
                                        <span class="label label-info">Chat</span>
                                        <span class="label label-warning">Testeur</span></p>
                                    </div>
                                </div>
                                    <div class="col-md-9">
                                        <h4>Trois fabricants de croquettes animales condamnés à 35 millions d'euros d'amende pour entente</h4>
                                        <span>Les groupes sanctionnés sont le suisse Nestlé (Purina), et les américains Mars (Royal Canin) et Colgate-Palmolive (Hill's Pet Nutrition).</span>
                                        <a href="#"><span class="news-more"> Lire la suite...</span></a>
                                        <br><small>14 juin 2028</small>
                                    </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- News 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-md-3 author-outer">
                                    <div class="author-inner">
                                        <img class="img-circle" src="img/profile_test2.jpg">
                                        <p>Kermit la grenouille
                                        <span class="label label-success">Grenouille</span></p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>L’Inde assure la France de son soutien à l’accord de Paris sur le climat</h4>
                                    <span>Après le retrait américain de l’accord de Paris, le climat était au cœur de la rencontre entre Narendra Modi et Emmanuel Macron, samedi à Paris.</span>
                                    <a href="#"><span class="news-more"> Lire la suite...</span></a>
                                    <br><small>14 juin 2028</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                </div>

                <!-- Carousel Prev/Next Buttons -->
                <a data-slide="prev" href="#carousel-news" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a data-slide="next" href="#carousel-news" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
        </div>
    </div>
    <!-- #carousel-news -->


    <!-- ********** POST : publications sur la page d'accueil ********** -->

    <div class="row">
        <div class="col-md-10 col-lg-offset-1">

            <!-- Post 1 -->
            <div class="[panel panel-default] panel-custom">

                <!-- Auteur : image, nom, tags -->
                <div class="panel-heading">
                    <button type="btn" class="close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <img class="[ img-circle pull-left ]" src="img/profile_test1.png" alt="profile.jpg"/>
                    <h3>Le chat blasé du designer</h3>
                    <span class="label label-info">Chat</span>
                    <span class="label label-warning">Mangeur de croquettes</span>
                    <h5><span>Il y a 5 minutes</span></h5>
                </div>

                <!-- Corps du message -->
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <!-- Input -->
                    <div class="pull-left">
                        <div class="input-placeholder">Commenter...</div>
                    </div>

                    <!-- Réactions : dislike / like / love -->
                    <div class="pull-right">
                        <button type="button" class="btn btn-basic btn-circle"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                        <button type="button" class="btn btn-primary btn-circle"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <button type="button" class="btn btn-danger btn-circle"><span class="glyphicon glyphicon-heart"></span></button>
                    </div>
                </div>

                <!-- Panel caché pour commenter -->
                <div class="panel-comment">
                        <img class="img-circle" src="img/profile_test1.png">
                        <div class="panel-custom-textarea">
                            <textarea rows="2"></textarea>
                            <button type="submit" class="[ btn btn-success disabled ]">Envoyer</button>
                            <button type="reset" class="[ btn btn-default ]">Annuler</button>
                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
            <!-- /#post1 -->

            <!-- Post 2 -->
            <div class="[panel panel-default] panel-custom">
                <div class="panel-heading">
                    <button type="btn" class="close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <img class="[ img-circle pull-left ]" src="img/profile_test2.jpg" alt="profile.jpg"/>
                    <h3>Kermit</h3>
                    <span class="label label-success">Grenouille</span>
                    <h5><span>Il y a 8 minutes et 14 nanosecondes</span></h5>
                </div>

                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="pull-left">
                        <div class="input-placeholder">Commenter...</div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-basic btn-circle"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                        <button type="button" class="btn btn-primary btn-circle"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <button type="button" class="btn btn-danger btn-circle"><span class="glyphicon glyphicon-heart"></span></button>
                    </div>
                </div>

                    <div class="panel-comment">
                        <img class="img-circle" src="img/profile_test1.png">
                        <div class="panel-custom-textarea">
                            <textarea rows="2"></textarea>
                            <button type="submit" class="[ btn btn-success disabled ]">Envoyer</button>
                            <button type="reset" class="[ btn btn-default ]">Annuler</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
            <!-- /#post2 -->

            <!-- Post 3 -->
            <div class="[panel panel-default] panel-custom">
                <div class="panel-heading">
                    <button type="btn" class="close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <img class="[ img-circle pull-left ]" src="img/profile_test1.png" alt="profile.jpg"/>
                    <h3>Le chat blasé du designer</h3>
                    <span class="label label-info">Chat</span>
                    <span class="label label-warning">Mangeur de croquettes</span>
                    <h5><span>Il y a 30 minutes</span></h5>
                </div>

                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="pull-left">
                        <div class="input-placeholder">Commenter...</div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-basic btn-circle"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                        <button type="button" class="btn btn-primary btn-circle"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <button type="button" class="btn btn-danger btn-circle"><span class="glyphicon glyphicon-heart"></span></button>
                    </div>
                </div>

                <div class="panel-comment">
                    <img class="img-circle" src="img/profile_test1.png">
                    <div class="panel-custom-textarea">
                        <textarea rows="2"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Envoyer</button>
                        <button type="reset" class="[ btn btn-default ]">Annuler</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /#post3 -->
        </div>
    </div>
    <!-- /#post -->
</div>
<!-- /#container -->

<?php
    include('chatbox.php');
    include('footer.php');
?>