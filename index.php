<?php include_once "layout/head.php";?>
<?php include_once "layout/header.php";?>


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
                                    <?php $dates = array(
                                        '28',
                                        array('01','05'),
                                        array('15','16'),
                                        '17'
                                    ); ?>
                                    <?php foreach ($dates as $date):?>
                                        <a href="#">
                                            <div class="article">
                                                <div class="article_picture_frame">
                                                    <img src="holder.js/560x400" alt="Holder">
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
                                                <div class="text-right">Nom etablissement</div>
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
                <?php include_once "layout/sidebar.php";?>
            </div>
        </div>
    </div>
</div>
<?php include_once "layout/footer.php";?>