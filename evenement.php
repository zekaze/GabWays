<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<div class="page-banner" style="background-image: url('img/grey-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Titre de l'événement <span class="categorie">événement</h1>

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
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-share"></a></li>
                        </ul>
                    </div>
                    <!--end of social sharing-->

                    <div class="section">

                        <div class="section-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="frame logo_etablissement">
                                        <img src="holder.js/560x400" alt="Holder">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                            <h4 class="sub-section-title">Description</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor in odio vel gravida. Proin quis est est. Suspendisse vel semper ex. Curabitur imperdiet rhoncus dolor ac eleifend. Nunc pretium luctus nisl id volutpat. Ut nisl magna, hendrerit sit amet aliquam sed, efficitur ornare purus.</p>
                                            <h4 class="sub-section-title">Date</h4>
                                            <p>01 Août - 05 Août à 20h30</p>

                                            <h4 class="sub-section-title">Lieu</h4>
                                            <p>BP 2031, Libreville Gabon. Cras auctor in odio vel gravida. Proin</p>

                                            <h4 class="sub-section-title">Contact</h4>
                                            <ul class="contact">
                                                <li class="telephone">+241 02 44 11 33</li>
                                                <li class="telephone">+241 02 44 11 33</li>
                                                <li class="email">consectetur.adipiscing@yahoo.fr</li>
                                            </ul>
                            </div>
                        </div>
                            <div class="video-player">
                                <a href="https://www.youtube.com/watch?v=lSZqC-Nezlw"><img src="holder.js/600x300">
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
                                            <div class="article_title">Titre de l'événement <?php echo $j;?></div>
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!--end of section-->

                    <div class="autour_de_moi">
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
                <?php include_once "layout/sidebar.php";?>
            </div>
            <!--end of col-sm-3-->
        </div>
    </div>
</div>

<?php include_once "layout/footer.php";?>
