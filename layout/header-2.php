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
                <li><a href="login.php" class="button">S'enregistrer</a></li>
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
                                    <div class="col-sm-5">
                                        <div class="form_input">
                                            <label for="champ_1" class="hidden"></label>
                                            <input type="text" name="champ_1" id="champ_1" autocomplete="off" placeholder="Quoi, Qui : Salon de coiffure, ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <label for="champ_2" class="hidden"></label>
                                        <div class="form_input">
                                            <input type="text" name="champ_2" id="champ_2" autocomplete="off" placeholder="Où : Libreville, ...">
                                            <label class="check-button">Rechercher à proximité &nbsp; <input type="checkbox"></label>
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