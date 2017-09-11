<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<div class="page-banner" style="background-image: url('img/grey-bg.jpg')">
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

                    <div class="pagination">
                        <div class="">10 résultats sur 1237</div>
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

                    <div class="section liste-etablissements">
                        <?php $counter = 0;?>
                        <?php for($i = 0; $i < 10; $i++):?>
                            <?php $counter++;?>
                            <?php if(!($counter %4)):?>
                                <div class="publicite" data-animate="fadeInUp">
                                    <div class="placeholder">
                                        Publicité
                                    </div>
                                </div>
                            <?php endif;?>
                            <a href="etablissement.php" class="list-item row" data-animate="fadeInUp">
                                <div class="col-sm-4">
                                    <div class="list-item-image">
                                        <img src="holder.js/320x250">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="list-item-info">
                                        <h4 class="item-title">Nom de l'établissement <span>Ouvert</span></h4>
                                        <div class="item-location">Plaine Orety, Libreville</div>
                                        <div class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis, corporis, cupiditate, debitis dolore doloremque earum enim expedita magnam molestias nobis quas quis quod repellat repellendus sit tempora! Deserunt, odit.</div>
                                        <ul class="tags">
                                            <li>consectetur</li>
                                            <li>magna</li>
                                            <li>marhoncusgna</li>
                                            <li>imperdiet</li>
                                            <li>imperdiet</li>
                                            <li>semper</li>
                                            <li>Suspendisse</li>
                                            <li>aliquam</li>
                                            <li>auctor</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        <?php endfor;?>
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
                        <div class="placeholder">
                            Publicité
                        </div>
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
                        <div class="placeholder">
                            Publicité
                        </div>
                    </div>
                    <!--end of publicité-->
                    <div class="widget">
                        <h4 class="widget-title">Choix de la semaine</h4>

                        <ul class="widget-link-list">
                            <?php for($i = 1; $i <= 5; $i++):?>
                                <li class="list-item">
                                    <a href="#">
                                        <div class="photo_etablissement"><img src="holder.js/80x80"></div>
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