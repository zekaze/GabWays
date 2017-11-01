<header>
    <div id="top-nav-menu" class="fixed">
        <div class="container">
            <ul class="nav-contact hidden-xs">
                <li><strong>Contact:</strong> +241 00 11 22 33</li>
                <li><strong>Email:</strong> info@gabways.com</li>
            </ul>
            <ul class="nav-social-media">
                <li><a href="https://facebook.com"class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com" class="social-icon" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://youtube.com" class="social-icon" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                <?php if (isset($_GET['s']) && ($_GET['s'] == 'v')):; ?>
                    <li><a href="login.php" class="button"><i class="fa fa-user"></i><span class="hidden-xs"> &nbsp; Mon profil</span></a></li>
                    <li><a href="login.php" class="button"><i class="fa fa-power-off"></i><span
                                class="hidden-xs"> &nbsp; Se deconnecter</span></a></li>
                <?php else: ?>
                    <li><a href="login.php" class="button">S'enregistrer</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <!--end of top nav menu-->
    <nav class="navbar fixed navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="index.php" class="logo"><img src="img/logo.png" height="50" style="margin-top: 5px"></a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <button type="button" class="navbar-toggle searchbar-toggle collapsed" data-toggle="collapse"
                        data-target="#searchbar-collapse" aria-expanded="false">
                    <span class="fa fa-search"></span>
                </button>
            </div>
            
            <div class="navs">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li><a href="categories.php">Catégories</a></li>
                        <li><a href="evenements.php">Événements</a></li>
                        <li><a href="about-us.php">Qui sommes nous?</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="collapse navbar-collapse" id="searchbar-collapse">
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-5 typeahead__container">
                                        <div class="form_input typeahead__field">
                                            <label for="champ_1" class="hidden"></label>
                                            <input type="text" name="champ_1" id="champ_1" class="js-typeahead" autocomplete="off" placeholder="Quoi, Qui : Salon de coiffure, ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-7 typeahead__container">
                                        <label for="champ_2" class="hidden"></label>
                                        <div class="form_input typeahead__field">
                                            <input type="text" name="champ_2" id="champ_2" data-provide="typeahead" class="js-typeahead  " autocomplete="off" placeholder="Où : Libreville, ...">
                                            <label class="check-button" data-toggle="tooltip" title="Rechercher à proximité">
                                                <i class="fa fa-street-view fa-lg hidden-xs"></i> &nbsp;&nbsp;
                                                <span class="visible-xs">Rechercher à proximité &nbsp;</span> <i class="fa fa-lg fa-check-circle"></i>
                                                <input type="checkbox" name="proximite" class="hidden">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-block submit_button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div>

            
        </div><!-- /.container-fluid -->
    </nav>
</header>