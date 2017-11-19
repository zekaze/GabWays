<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Qui sommes nous?</h1>

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
                    </div>
                    <!--end of social sharing-->

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <h3 class="h3">GabWays en bref</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur,
                                <strong>delectus dignissimos, dolorum earum explicabo facere harum</strong>, illum in
                                quaerat veritatis vero. Consequatur dolore iste laborum nam quia reiciendis, tempore.
                            </p>
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab amet</blockquote>
                        </div>
                    </div>

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <h3 class="h3">L'équipe GabWays</h3>
                            <p>Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus, non mattis felis magna ut dui.<br> Curabitur a leo in elit finibus tempor convallis id massa. Donec metus orci, sollicitudin in sem sit amet,
                                <i>mattis ullamcorper arcu. Duis vel erat sed nunc porta scelerisque</i>. Sed sodales justo in faucibus vulputate. Integer convallis sed orci non convallis. Proin nec ligula non nibh ullamcorper semper non ac enim. Ut non placerat nisl.</p>
                        </div>
                    </div>

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <h3 class="h3">Comment nous joindre?</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="contact-list-icons">
                                        <li><i class="fa fa-facebook"></i> <a class="info" href="facebook.com/gabways" target="_blank">facebook.com/gabways</a></li>
                                        <li><i class="fa fa-twitter"></i> <a class="info" href="twitter.com/gabways" target="_blank">twitter.com/gabways</a></li>
                                        <li><i class="fa fa-youtube"></i> <a class="info" href="youtube.com/gabways" target="_blank">youtube.com/gabways</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="contact-list-icons">
                                        <li><i class="fa fa-phone"></i> <span class="info">+241 02 11 22 33 / +241 07 77 55 22</span></li>
                                        <li><i class="fa fa-at"></i> <span class="info">info@gabways.com</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="contact-list-icons">
                                        <li><i class="fa fa-home"></i> <span class="info">BP 2031, Libreville, Gabon</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section section-slider" data-animate="fadeInUp">
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

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <div class="video-player">
                                <a href="https://www.youtube.com/watch?v=lSZqC-Nezlw"><img src="holder.js/600x300">
                                    <span class="play-button"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <h3 class="h3">Mattis ullamcorper arcu</h3>
                            <p>Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus, non mattis felis magna ut dui. Curabitur a leo in elit finibus tempor convallis id massa. Donec metus orci, sollicitudin in sem sit amet.<br><br>
                                <strong>Mattis ullamcorper arcu. Duis vel erat sed nunc porta scelerisque</strong>. Sed sodales justo in faucibus vulputate. Integer convallis sed orci non convallis. Proin nec ligula non nibh ullamcorper semper non ac enim. Ut non placerat nisl.</p>
                        </div>
                    </div>

                    <!--end of section-->

                    <div class="autour_de_moi" data-animate="fadeInUp">
                        <h3 class="section-title">Où nous trouver?</h3>
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
                    
                    <div class="publicite">
                        <?php $k = rand(0, 7);?>
                        <img src="<?php echo $evenements[$k];?>" class="img-responsive" alt="publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget" data-animate="fadeInUp">
                        <h4 class="widget-title">Choix de la semaine</h4>

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
                    <div class="widget" data-animate="fadeInUp">
                        <h4 class="widget-title">Top catégories</h4>

                        <ul class="widget-simple-list">
                            <?php for($i = 1; $i <= 10; $i++):?>
                                <li class="list-item">
                                    <a href="#">Catégorie <?php echo $i;?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of col-sm-3-->
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