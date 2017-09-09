<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<div class="page-banner" style="background-image: url('img/grey-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Catégories</h1>
    </div>
</div>
<!--end of page-banner-->

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="page-category" class="main-body">
                    <?php for($i = 1; $i < 17; $i++):?>
                        <a href="etablissement.php" class="category" style="background-image: url('img/grey-bg.jpg')" data-animate="fadeInUp">
                            <div class="content">
                                <h4 class="category_name">Nom de la catégorie <?php echo $i;?></h4>
                                <p class="counter">(<?php echo number_format(1227,0,',',',');?> etablissements)</p>
                            </div>
                        </a>
                        <?php if(!($i%8)):?>
                            <div class="publicite" data-animate="fadeInUp">
                                <div class="placeholder">
                                    Publicité
                                </div>
                            </div>
                            <!--end of publicite-->
                        <?php endif;?>
                    <?php endfor;?>

                </div>
                <div class="main-body">
                    <div class="autour_de_moi" data-animate="fadeInUp">
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
                    <div class="widget filter" data-animate="fadeInUp">
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
                    <div class="widget" data-animate="fadeInUp">
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