<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Catégorie restaurants <span class="categorie"> 1237 Résultats trouvés</span></h1>
    </div>
</div>
<!--end of page-banner-->

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="page-etablissements" class="main-body page-etablissement">
                    <div>10 résultats sur 1237</div>
                    <div class="section liste-etablissements">
                        <?php $counter = 0;?>
                        <?php for($i = 0; $i < 10; $i++):?>
                            <?php $counter++;?>
                            <?php if(!($counter %3)):?>
                                <div class="publicite" data-animate="fadeInUp">
                                    <?php $m = rand(0,5); ?>
                                    <img src="<?php echo $banners[$m];?>" class="img-responsive" alt="Publicité">
                                </div>
                            <?php endif;?>
                            <div class="list-item row" data-animate="fadeInUp">
                                <div class="col-sm-4">
                                    <div class="list-item-image">
                                        <img src="<?php echo $etablissements[$i];?>" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="list-item-info">
                                        <a href="etablissement.php">
                                            <div class="header">
                                                <h4 class="item-title">Nom de l'établissement </h4>
                                                <?php $y = rand(0,1);
                                                $ouvert = array('ouvert','fermé');
                                                ?>

                                                <div style="margin-bottom: 10px">
                                                    <span class="indicateur_ouverture <?php echo $ouvert[$y];?>"><?php echo $ouvert[$y];?></span>
                                                    <span class="indicateur_distance">3 Km</span>
                                                </div>
                                            </div>

                                            <div class="item-location">Plaine Orety, Libreville</div>
                                            <div class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis, corporis, cupiditate, debitis dolore doloremque earum enim expedita magnam molestias nobis quas quis quod repellat repellendus sit tempora! Deserunt, odit.</div>
                                        </a>

                                        <ul class="tags">
                                            <li><a href="">consectetur</a href=""></li>
                                            <li><a href="">magna</a href=""></li>
                                            <li><a href="">marhoncusgna</a href=""></li>
                                            <li><a href="">imperdiet</a href=""></li>
                                            <li><a href="">imperdiet</a href=""></li>
                                            <li><a href="">semper</a href=""></li>
                                            <li><a href="">Suspendisse</a href=""></li>
                                            <li><a href="">aliquam</a href=""></li>
                                            <li><a href="">auctor</a href=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div>

                    <div class="pagination">
                        <ul class="page-list hidden-xs">
                            <li><a href="#" class="prev"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#" class="page-number">1</a></li>
                            <li><a href="#" class="page-number">2</a></li>
                            <li><a href="#" class="page-number">3</a></li>
                            <li><span href="#" class="dots">...</span></li>
                            <li><a href="#" class="page-number">11</a></li>
                            <li><a href="#" class="page-number">12</a></li>
                            <li><a href="#" class="page-number">13</a></li>
                            <li><a href="#" class="next"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                        <div class="visible-xs">
                            <select name="pages" id="page-select" class="page-select">
                                <?php for ($i = 1; $i <= 11; $i++):?>
                                    <option value="<?php echo $i;?>">Page <?php echo $i;?></option>
                                <?php endfor;?>
                            </select>
                        </div>

                    </div>

                    <div class="autour_de_moi">
                        <h3 class="section-title">Autour de moi</h3>
                        <div id="google-map">
                            <div id="map"></div>
                        </div>
                    </div>
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
                        <?php $l = rand(0,7); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
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
                        <?php $l = rand(0,7); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget">
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
