<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>

<?php include_once "data.php";?>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Titre de l'événement <span class="categorie">événement</span></h1>

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
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="frame logo_etablissement">
                                        <?php $i = rand(0, 7);?>
                                        <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Evenement">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor in odio vel
                                        gravida. Proin quis est est. Suspendisse vel semper ex. Curabitur imperdiet
                                        rhoncus dolor ac eleifend. Nunc pretium luctus nisl id volutpat. Ut nisl magna,
                                        hendrerit sit amet aliquam sed, efficitur ornare purus.</p>
                                    <h4 class="sub-section-title">Organisateur</h4>
                                    <a href="etablissement.php" target="_blank">Nom de l'établissement</a>
                                    <div class="blank"></div>

                                    <h4 class="sub-section-title">Date</h4>
                                    <p>01 Août - 05 Août à 20h30</p>
                                    <div class="blank"></div>

                                    <h4 class="sub-section-title">Lieu</h4>
                                    <p>BP 2031, Libreville Gabon. Cras auctor in odio vel gravida. Proin</p>
                                    <div class="blank"></div>

                                    <h4 class="sub-section-title">Contact</h4>
                                    <ul class="contact">
                                        <li class="telephone">+241 02 44 11 33</li>
                                        <li class="telephone">+241 02 44 11 33</li>
                                        <li class="email">consectetur.adipiscing@yahoo.fr</li>
                                    </ul>
                                    <div class="blank"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="section" data-animate="fadeInUp">
                        <div class="section-body">
                            <div class="video-player">
                                <a href="https://www.youtube.com/watch?v=SBjQ9tuuTJQ"><img src="http://img.youtube.com/vi/SBjQ9tuuTJQ/maxresdefault.jpg" height="300">
                                    <span class="play-button"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="section section-slider">
                        <div class="section-header">
                            <h3 class="section-title">Événements dans le mois</h3>
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
                                    <a href="#" data-animate="fadeInUp">
                                        <div class="article">
                                            <div class="article_picture_frame">
                                                <?php $i = rand(0, 7);?>
                                                <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Evenement">
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
                        <?php $i = rand(0, 7);?>
                        <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Evenement">
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
                        <?php $i = rand(0, 7);?>
                        <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Evenement">
                    </div>
                    <!--end of publicité-->
                    <div class="widget" data-animate="fadeInUp">
                        <h4 class="widget-title">Choix de la semaine</h4>

                        <ul class="widget-link-list">
                            <?php for($i = 1; $i <= 5; $i++):?>
                                <li class="list-item">
                                    <a href="#">
                                        <div class="photo_etablissement">
                                            <?php $i = rand(0, 19);?>
                                            <img src="<?php echo $evenements[$i];?>" class="img-responsive" alt="Evenement">
                                        </div>
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
