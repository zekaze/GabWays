<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bienvenue sur GabWays</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
     <!-- Slick Carousel -->
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
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
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="logo"><img src="holder.js/180x50"></a>
                </div>
                <div class="col-sm-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Catégories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Événements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Qui sommes nous?</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="google-map">
    <div class="etablissements">
        <?php for($i =0; $i <= 4; $i++):?>
        <div class="etablissement">
            <div class="photo_etablissement"><img src="holder.js/180x100"></div>
            <div class="details_etablissement">
                <div class="nom_etablissement">Lorem ipsum dolor sit amet, consectetur</div>
                <div class="quartier_etablissement">Angondjé 1ère cité, Akanda</div>
                <div class="desc_etablissement">Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus</div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <div id="map"></div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/holder.js/holder.min.js"></script>
<script src="js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApxXN5unjrDLDHHrq2gcVlKt_zncDvpWA&callback=initMap" async defer></script>
</body>
</html>