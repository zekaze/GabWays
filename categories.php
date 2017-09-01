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
            <div class="col-sm-9">
                <div id="page-category" class="main-body">
                    <?php for($i = 1; $i < 17; $i++):?>
                        <a href="etablissement.php" class="category" style="background-image: url('img/grey-bg.jpg')">
                            <div class="content">
                                <h4 class="category_name">Nom de la catégorie <?php echo $i;?></h4>
                                <p class="counter">(<?php echo number_format(1227,0,',',',');?> etablissements)</p>
                            </div>
                        </a>
                        <?php if(!($i%8)):?>
                            <div class="publicite">
                                <div class="placeholder">
                                    Publicité
                                </div>
                            </div>
                            <!--end of publicite-->
                        <?php endif;?>
                    <?php endfor;?>

                </div>
                <div class="main-body">
                    <div class="autour_de_moi">
                        <h3 class="section-title">Autour de moi</h3>
                        <div id="google-map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end of col-sm-9-->
            <div class="col-sm-3">
                <?php include_once "layout/sidebar.php";?>
            </div>
            <!--end of col-sm-3-->
        </div>
    </div>
</div>
<?php include_once "layout/footer.php";?>