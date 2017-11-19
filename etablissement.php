<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Nom de l'établissement <small>by groupe commercial</small> <span class="categorie"><i class="fa fa-cutlery"></i>  Restaurant</span></h1>

    </div>
</div>
<!--end of page-banner-->

<div class="body page-etablissement">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="main-body">
                    <label>Partager cette page</label>
                    <div class="social-sharing">
                        <ul>
                            <li><a href="#" class="fa fa-facebook" style='background: #385a99'></a></li>
                            <li><a href="#" class="fa fa-twitter" style="background: #40c8f4"></a></li>
                            <li><a href="#" class="fa fa-linkedin" style="background: #127ab7"></a></li>
                            <li><a href="#" class="fa fa-instagram" style="background: #385a99"></a></li>
                            <li><a href="#" class="fa fa-share" style="background: #f36f21"></a></li>
                        </ul>
                        <div>
                            <?php $y = rand(0,1);
                            $ouvert = array('ouvert','fermé');
                            ?>
                            <span class="indicateur_ouverture <?php echo $ouvert[0];?>"><?php echo $ouvert[0];?></span>
                            <span class="indicateur_distance">3 Km</span>
                        </div>
                    </div>
                    <!--end of social sharing-->

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-header">
                            <h3 class="section-title">Informations générales</h3>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="frame logo_etablissement">
                                        <?php $k = rand(0, 5);?>
                                        <img src="<?php echo $etablissements[$k];?>" class="img-responsive" alt="Holder">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="sub-section-title">Description</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor in odio vel gravida. Proin quis est est. Suspendisse vel semper ex. Curabitur imperdiet rhoncus dolor ac eleifend. Nunc pretium luctus nisl id volutpat. Ut nisl magna, hendrerit sit amet aliquam sed, efficitur ornare purus.</p>
                                            <div class="blank"></div>
                                            <h4 class="sub-section-title">Adresse</h4>
                                            <p>BP 2031, Libreville Gabon. Cras auctor in odio vel gravida. Proin</p>
                                            <div class="blank"></div>
                                        </div>

                                        <div class="col-sm-6">
                                            <h4 class="sub-section-title">Contact</h4>
                                            <ul class="contact">
                                                <li class="telephone">+241 02 44 11 33</li>
                                                <li class="telephone">+241 02 44 11 33</li>
                                                <li class="email">consectetur.adipiscing@yahoo.fr</li>
                                                <li class="website">www.nom-etablissement.com</li>
                                                <li class="facebook">facebook.com/nometablissement</li>
                                                <li class="linkedin">linkedin.com/nometablissement</li>
                                            </ul>
                                            <div class="blank"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section" data-animate="fadeInUp">
                        <div class="row">
                            <div class="col-sm-5">
                                <h4 class="sub-section-title">Tags</h4>
                                <ul class="tags">
                                    <li><a href="#">consectetur</a></li>
                                    <li><a href="#">magna</a></li>
                                    <li><a href="">marhoncusgna</a></li>
                                    <li><a href="#">imperdiet</a></li>
                                    <li><a href="#">imperdiet</a></li>
                                    <li><a href="#">semper</a></li>
                                    <li><a href="#">Suspendisse</a></li>
                                    <li><a href="#">aliquam</a></li>
                                    <li><a href="#">auctor</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                                <h4 class="sub-section-title">Horaires</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="horaires">
                                            <li><span class="jour">Lundi</span> <span class="horaire">Fermé</span></li>
                                            <li><span class="jour">Mardi</span> <span class="horaire">8h30 - 22h30</span></li>
                                            <li><span class="jour">Mercredi</span> <span class="horaire">8h30 - 22h30</span></li>
                                            <li><span class="jour">Jeudi</span> <span class="horaire">8h30 - 22h30</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="horaires">
                                            <li><span class="jour">Vendredi</span> <span class="horaire">8h30 - 22h30</span></li>
                                            <li><span class="jour">Samedi</span> <span class="horaire">8h30 - 22h30</span></li>
                                            <li><span class="jour">Dimanche</span> <span class="horaire">13h30 - 19h30</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section" data-animate="fadeInUp">
                        <h4 class="sub-section-title">Loisirs</h4>
                        <ul>
                            <li>Billard</li>
                            <li>Babufoot</li>
                            <li>Piscine</li>
                        </ul>
                    </div>
                    <!--end of section-->

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-header">
                            <h3 class="section-title">Paiements acceptés</h3>
                        </div>
                        <div class="section-body">
                            <ul class="paiements">
                                <li>
                                    <img src="holder.js/100x40" alt="Holder">
                                    <div>Cash</div>
                                </li>
                                <li>
                                    <img src="holder.js/100x40" alt="Holder">
                                    <div>Airtel Money</div>
                                </li>
                                <li>
                                    <img src="holder.js/100x40" alt="Holder">
                                    <div>Cartes bancaires</div>
                                </li>
                                <li>
                                    <img src="holder.js/100x40" alt="Holder">
                                    <div>PayPal</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section section-slider">
                        <div class="section-header">
                            <h3 class="section-title">Gallerie photos</h3>
                            <div class="slider-controls">
                                <span class="prev"></span>
                                <span class="next"></span>
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="event_list pictures-gallery">
                                <?php for ($i = 0; $i <= 5; $i++):?>
                                    <?php $k = rand(0, 7);?>
                                    <a href="<?php echo $evenements[$k];?>" data-animate="fadeInUp">
                                        <div class="article">
                                            <div class="article_picture_frame">
                                                <img src="<?php echo $evenements[$k];?>" class="img-responsive" alt="Holder">
                                            </div>
                                        </div>
                                    </a>
                                <?php endfor;?>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section section-slider">
                        <div class="section-header">
                            <h3 class="section-title">Événements</h3>
                            <div class="slider-controls">
                                <span class="prev"></span>
                                <span class="next"></span>
                            </div>
                        </div>

                        <div class="section-body">
                            <?php $dates = array(
                                '28',
                                array('01','05'),
                                array('15','16'),
                                '17',
                                '09',
                                '21',
                                array('10','11')
                            );
                            $j = 0;
                            ?>
                            <div class="event_list">
                                <?php foreach ($dates as $date):?>
                                    <?php $j++;?>
                                    <?php $k = rand(0, 7);?>
                                    <a href="evenement.php" data-animate="fadeInUp">
                                        <div class="article">
                                            <div class="article_picture_frame">
                                                <img src="<?php echo $evenements[$k];?>" class="img-responsive" alt="Holder">
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
                                            <div class="article_title">Titre de l'événement <?php echo $j;?></div>
                                            <div class="article_location">Ancienne sobraga, Libreville</div>
                                            <div class="annonceur">Nom etablissement</div>
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="autour_de_moi" data-animate="fadeInUp">
                        <h3 class="section-title">Localisation</h3>
                        <div id="google-map">
                            <div id="map"></div>
                        </div>
                    </div>
                    <!--end of section-->

                </div>
            </div>
            <!--end of col-sm-9-->
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="widget calendar">
                        <div id="calendar"></div>
                    </div>
                    <!--end of calendar-->
                    <div class="publicite">
                        <?php $k = rand(0, 7);?>
                        <img src="<?php echo $evenements[$k];?>" class="img-responsive" alt="publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget filter">
                        <h4 class="widget-title">Par quartiers</h4>
                        <form action="#">
                            <select name="filtre-quartier" id="filtre-quartier">
                                <?php for($i = 1; $i <= 10; $i++):?>
                                    <option value="QUartier <?php echo $i;?>">Quartier <?php echo $i;?></option>
                                <?php endfor; ?>
                            </select>
                        </form>
                    </div>
                    <!--end of filter-->
                    <div class="publicite">
                        <?php $k = rand(0, 7);?>
                        <img src="<?php echo $evenements[$k];?>" class="img-responsive" alt="publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget" data-animate="fadeInUp">
                        <h4 class="widget-title">Dans la même catégorie</h4>

                        <ul class="widget-link-list">
                            <?php for($i = 1; $i <= 5; $i++):?>
                                <?php $k = rand(0, 5);?>
                                <li class="list-item">
                                    <a href="#">
                                        <div class="photo_etablissement"><img src="<?php echo $etablissements[$k];?>" class="img-responsive"></div>
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
            <!--end of col-md-3-->
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
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false
        });

        var baseIcon = {
            url: 'img/map-markers/marker.png',
            labelOrigin: new google.maps.Point(14, 14)
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