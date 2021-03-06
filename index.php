<?php include_once "layout/head.php";?>
<?php include_once "layout/header.php";?>


<?php include_once "data.php";?>


<div id="google-map">
    <div class="etablissements">
        <div class="list">
            <?php for($i =1; $i <= 10; $i++):?>
                <a href="etablissement.php" class="etablissement">
                    <div class="photo_etablissement"><img src="<?php echo $etablissements[$i];?>" class="img-responsive"></div>
                    <div class="details_etablissement">
                            <div class="nom_etablissement"><?php echo $i;?>. Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="quartier_etablissement">Angondjé 1ère cité, Akanda</div>
                        <div class="desc_etablissement">Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus</div>
                    </div>
                </a>
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
                            <div class="col-sm-6 typeahead__container">
                                <div class="form_input typeahead__field">
                                    <input class="js-typeahead" id="champ_1" name="q" type="search" autocomplete="off" placeholder="Quoi, Qui : Salon de coiffure, ...">
                                </div>
                            </div>
                            <div class="col-sm-6 typeahead__container">
                                <label for="champ_2" class="hidden"></label>
                                <div class="form_input typeahead__field">
                                    <input type="search" name="champ_2" id="champ_2" data-provide="typeahead" class="js-typeahead  " autocomplete="off" placeholder="Où : Libreville, ...">
                                    <label class="check-button" data-toggle="tooltip" title="Rechercher à proximité">
                                        <i class="fa fa-street-view fa-lg hidden-xs hidden-lg"></i> &nbsp;&nbsp;
                                        <span class="visible-xs visible-lg">Rechercher à proximité</span> <i class="fa fa-lg fa-check-circle"></i>
                                        <input type="checkbox" name="proximite" class="hidden">
                                    </label>
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
            <div class="col-md-9">
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
                                    <?php $dates = array(
                                        '28',
                                        array('01','05'),
                                        array('15','16'),
                                        '17'
                                    ); ?>
                                    <?php foreach ($dates as $date):?>
                                        <a href="evenement.php" data-animate="fadeInUp">
                                            <div class="article">
                                                <div class="article_picture_frame">
                                                    <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Holder">
                                                </div>
                                                <?php if(is_array($date)):?>
                                                    <div class="event_date double">
                                                        <div class="date">
                                                            <span class="day"><?php echo $date[0];?></span>
                                                            <span class="month">Aoû</span>
                                                        </div>
                                                        <div class="date">
                                                            <span class="day"><?php echo $date[1];?></span>
                                                            <span class="month">Aoû</span>
                                                        </div>
                                                    </div>
                                                <?php else:?>
                                                    <div class="event_date single">
                                                        <div class="date">
                                                            <span class="day"><?php echo $date;?></span>
                                                            <span class="month">Aoû</span>
                                                        </div>
                                                    </div>
                                                <?php endif;?>
                                                <div class="article_title">Titre de l'événement <?php echo $i;?></div>
                                                <div class="article_location">Ancienne sobraga, Libreville</div>
                                                <div class="annonceur">Nom etablissement</div>
                                            </div>
                                        </a>
                                        <?php $i++;?>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <?php endfor;?>
                        </div>
                    </div>
<!--end of top evenements-->
                    <div class="publicite" data-animate="fadeInUp">
                        <?php $m = rand(0,5); ?>
                        <img src="<?php echo $banners[$m];?>" class="img-responsive" alt="Publicité">
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


                    <div class="publicite" data-animate="fadeInUp">
                        <?php $m = rand(0,5); ?>
                        <img src="<?php echo $banners[$m];?>" class="img-responsive" alt="Publicité">
                    </div>
                    <!--end of publicite-->
                </div>
<!--end of main body-->
            </div>
<!--end of clo-sm-9-->
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="widget calendar">
                        <div id="calendar"></div>
                    </div>
                    <!--end of calendar-->
                    <div class="publicite">
                        <?php $l = rand(0,7); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget filter">
                        <h4 class="widget-title">Par quartiers</h4>
                        <form action="#">
                            <select name="filtre-quartier" id="filtre-quartier">
                                <?php for($i = 1; $i <= 10; $i++):?>
                                    <option value="https://google.com">Quartier <?php echo $i;?></option>
                                <?php endfor; ?>
                            </select>
                        </form>
                    </div>
                    <!--end of filter-->
                    <div class="publicite">
                        <?php $l = rand(0,7); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget" data-animate="fadeInUp">
                        <h4 class="widget-title">Établissements à la une</h4>

                        <ul class="widget-link-list">
                            <?php for($i = 1; $i <= 5; $i++):?>
                                <li class="list-item">
                                    <a href="#">
                                        <div class="photo_etablissement"><img src="<?php echo $etablissements[$i];?>" class="img-responsive"></div>
                                        <div class="details_etablissement">
                                            <div class="nom_etablissement"><?php echo $i;?>. Lorem ipsum dolor sit amet, consectetur</div>
                                            <div class="quartier_etablissement">Angondjé 1ère cité, Akanda</div>
                                        </div>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "layout/footer.php";?>

<script type="text/javascript">
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 0.504099, lng: 9.404849},
            zoom: 16,
            gestureHandling: 'cooperative',
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_CENTER
            },
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false
        });

        var baseIcon = {
            url: 'img/map-markers/map-marker.png',
            labelOrigin: new google.maps.Point(16, 13)
        };

        var locations = [{
            lat: 0.504099,
            lng: 9.404849,
            index: '1'
        },
            {
                lat: 0.502093,
                lng: 9.406029,
                index: '2'
            },
            {
                lat: 0.499776,
                lng: 9.403272,
                index: '3'
            },
            {
                lat: 0.504743,
                lng: 9.407263,
                index: '4'
            },
            {
                lat: 0.506664,
                lng: 9.404570,
                index: '5'
            }
        ];


        locations.forEach(function (location) {

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(location.lat, location.lng),
                icon: baseIcon,
                map: map,
                label:{
                    text: location.index,
                    fontSize: '14px',
                    color: '#af1e27',
                    fontWeight: '800'
                }
            });
        });
    }
</script>
