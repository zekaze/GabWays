<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
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
                    <?php for($i = 1; $i <= 10; $i++):?>
                        <?php $z = rand(0,8);?>
                        <a href="etablissements.php" class="category" style="background-image: url('<?php echo $evenements[$z];?>')" data-animate="fadeInUp">
                            <div class="content">
                                <h4 class="category_name">Nom de la catégorie <?php echo $i;?></h4>
                                <p class="counter">(<?php echo number_format(1227,0,',',',');?> etablissements)</p>
                            </div>
                        </a>
                        <?php if(!($i%4)):?>
                            <div class="publicite" data-animate="fadeInUp">
                                <?php $m = rand(0,5); ?>
                                <img src="<?php echo $banners[$m];?>" class="img-responsive" alt="Publicité">
                            </div>
                            <!--end of publicite-->
                        <?php endif;?>
                    <?php endfor;?>

                </div>
                <div class="main-body">
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
                        <?php $l = rand(0,8); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
                    </div>
                    <!--end of publicité-->
                    <div class="widget filter" data-animate="fadeInUp">
                        <h4 class="widget-title">Par quartiers</h4>
                        <form action="#">
                            <select name="filtre-quartier" id="filtre-quartier">
                                <?php for($i = 1; $i <= 10; $i++):?>
                                    <option value="https://facebook.com">Quartier <?php echo $i;?></option>
                                <?php endfor; ?>
                            </select>
                        </form>
                    </div>
                    <!--end of filter-->
                    <div class="publicite">
                        <?php $l = rand(0,19); ?>
                        <img src="<?php echo $evenements[$l];?>" class="img-responsive" alt="Publicité">
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
                </div>
            </div>
            <!--end of col-sm-3-->
        </div>
    </div>
</div>
<?php include_once "layout/footer.php";?>