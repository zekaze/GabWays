<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bienvenue sur GabWays</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
    <!--Full Calendar-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet">
     <!-- Slick Carousel -->
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
    <!--Zabuto calendar-->
    <link href="plugins/zabuto-calendar/zabuto_calendar.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div id="top-nav-menu">
        <div class="container">
            <ul class="nav-contact">
                <li><strong>Contact:</strong> +241 00 11 22 33</li>
                <li><strong>Email:</strong> info@gabways.com</li>
            </ul>
            <ul class="nav-social-media">
                <li><a href="https://facebook.com"class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com" class="social-icon" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://youtube.com" class="social-icon" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                <li><a href="#" class="button">S'enregistrer</a></li>
            </ul>
        </div>
    </div>
    <!--end of top nav menu-->
    <div id="nav-menu">
        <div class="container">
            <a href="#" class="logo"><img src="holder.js/180x50"></a>
            <nav class="navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Accueil</a></li>
                            <li><a href="#">Catégories</a></li>
                            <li><a href="#">Événements</a></li>
                            <li><a href="#">Qui sommes nous?</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>

<div id="google-map">
    <div class="etablissements">
        <div class="list">
            <?php for($i =1; $i <= 10; $i++):?>
                <div class="etablissement">
                    <div class="photo_etablissement"><img src="holder.js/180x100"></div>
                    <div class="details_etablissement">
                            <div class="nom_etablissement"><?php echo $i;?>. Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="quartier_etablissement">Angondjé 1ère cité, Akanda</div>
                        <div class="desc_etablissement">Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus</div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="controls">
            <span class="prev"></span>
            <span class="next"></span>
        </div>
    </div>
    <div id="map"></div>
</div>
<!--end of google maps-->

<div class="search_bar scrollable">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form_input">
                                <label for="champ_1" class="hidden"></label>
                                <input type="text" name="champ_1" id="champ_1" autocomplete="off" placeholder="Quoi, Qui : Salon de coiffure, ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="champ_2" class="hidden"></label>
                            <div class="form_input">
                                <input type="text" name="champ_2" id="champ_2" autocomplete="off" placeholder="Où : Libreville, ...">
                                <label class="check-button">Rechercher à proximité &nbsp; <input type="checkbox"></label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-block submit_button"><i class="fa fa-search"></i>&nbsp; Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--end of search  bar-->

<div class="container">
    <div class="categories_carousel">
        <ul class="carousel">
            <?php for($i = 1; $i <= 15; $i++):?>
                <li class="category">
                    <i class="fa fa-hotel"></i>
                    <span class="category_name">Catégorie <?php echo $i;?></span>
                </li>
            <?php endfor;?>
        </ul>
    </div>
</div>
<!--end of categories carousel-->

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-body">
                    <div class="section top-evenements section-slider">
                        <div class="section-header">
                            <h3 class="section-title">Événements du mois</h3>
                            <div class="slider-controls">
                                <span class="prev"></span>
                                <span class="next"></span>
                            </div>
                        </div>

                        <div class="section-body">
                            <?php $i = 1;?>
                            <?php for ($j = 1; $j <= 2; $j++):?>
                            <div class="slide">
                                <div class="articles">
                                    <?php for ($k = 1; $k <= 4; $k++):?>
                                        <a href="#">
                                            <div class="article">
                                                <div class="article_picture_frame">
                                                    <img src="holder.js/560x400" alt="Holder">
                                                </div>
                                                <div class="article_title">Titre de l'article <?php echo $i;?></div>
                                                <div class="article_abstract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam consequatur cumque esse ipsum iusto libero magni nemo, omnis quisquam recusandae sunt voluptas voluptatibus. A dolore sed suscipit voluptatem voluptatibus!</div>
                                            </div>
                                        </a>
                                        <?php $i++;?>
                                    <?php endfor;?>
                                </div>
                            </div>
                            <?php endfor;?>
                        </div>
                    </div>
<!--end of top evenements-->
                    <div class="publicite">
                        <div class="placeholder">
                            Publicité
                        </div>
                    </div>
<!--end of publicite-->

                    <div class="section top-categories section-slider">
                        <div class="section-header">
                            <h3 class="section-title">Top catégories</h3>
                            <div class="slider-controls">
                                <span class="prev"></span>
                                <span class="next"></span>
                            </div>
                        </div>


                        <ul class="section-body">
                            <?php for ($i = 1; $i <= 10; $i++):?>
                                <li class="top-category">
                                    <a href="#">
                                        <div class="top_category_picture_frame">
                                            <img src="holder.js/320x180" class="img-responsive" alt="Holder">
                                        </div>
                                        <div class="top_category_name">Catégorie <?php echo $i; ?></div>
                                    </a>
                                </li>
                            <?php endfor;?>
                        </ul>
                    </div>
<!--end of top categories-->

                    <div class="section popular-tags">
                        <div class="section-header">
                            <h3 class="section-title">Tags populaires</h3>
                        </div>


                        <ul class="section-body">
                            <?php for ($i = 1; $i <= 15; $i++):?>
                                <li class="popular-tag"><a href="#">Tag <?php echo $i;?></a></li>
                            <?php endfor;?>
                        </ul>
                    </div>
                    <!--end of popular-tags-->


                    <div class="publicite">
                        <div class="placeholder">
                            Publicité
                        </div>
                    </div>
                    <!--end of publicite-->
                </div>
<!--end of main body-->
            </div>
<!--end of clo-sm-9-->
            <div class="col-sm-3">
                <?php include_once "sidebar-1.php";?>
            </div>
        </div>
    </div>
</div>

<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--Bootstrap-->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--Slick Carousel-->
<script src="plugins/slick/slick.min.js"></script>
<!--Holder.js-->
<script src="plugins/holder.js/holder.min.js"></script>
<!--Zabuto calendar-->
<script src="plugins/zabuto-calendar/zabuto_calendar.js"></script>
<!--Custom script-->
<script src="js/script.js"></script>
<!--Google Maps-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApxXN5unjrDLDHHrq2gcVlKt_zncDvpWA&callback=initMap" async defer></script>
</body>
</html>