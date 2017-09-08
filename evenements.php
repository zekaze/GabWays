<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<div class="page-banner" style="background-image: url('img/grey-bg.jpg')">
    <div class="container-fluid">
        <div class="section-slider">
            <?php $dates = array(
                '28',
                array('01','05'),
                array('15','16'),
                '17',
                '09',
                '21',
                array('10','11')
            );?>
            <div class="event_list">
                <?php foreach ($dates as $date):?>
                    <a href="evenement.php">
                        <div class="article">
                            <div class="article_picture_frame">
                                <img src="holder.js/560x400" alt="Holder">
                                
                                <div class="event-data">
                                    <div class="article_title">Titre de l'événement</div>
                                    <div class="article_location">Quartier Louis, Libreville</div>
                                    <div class="article_owner">Nom de l'établissement</div>
                                </div>
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
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>

</div>
<!--end of page-banner-->

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="page-evenements" class="main-body">
                    <h1 class="page-title">Événements</h1>
                    <ul class="months-list hidden-xs">
                        <li><a href="#">Janv</a></li>
                        <li><a href="#">Fév</a></li>
                        <li><a href="#">Mar</a></li>
                        <li><a href="#">Avr</a></li>
                        <li><a href="#">Mai</a></li>
                        <li><a href="#">Juin</a></li>
                        <li><a href="#">Juil</a></li>
                        <li><a href="#">Aout</a></li>
                        <li><a href="#">Sep</a></li>
                        <li><a href="#">Oct</a></li>
                        <li><a href="#">Nov</a></li>
                        <li><a href="#">Déc</a></li>
                    </ul>

                    <select name="months" id="choix_du_mois" class="months-select visible-xs">
                        <option>Janv</option>
                        <option>Fév</option>
                        <option>Mar</option>
                        <option>Avr</option>
                        <option>Mai</option>
                        <option>Juin</option>
                        <option>Juil</option>
                        <option>Aout</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Déc</option>
                    </select>
                    <?php $months = array('Août', 'Septembre', 'Octobre', 'Novembre');?>
                    <?php $dates = array(
                        '28',
                        array('01','05'),
                        array('15','16'),
                        '17',
                        '09',
                        '21',
                        array('10','11')
                    );

                    $i = 0;
                    $j = 0;
                    foreach ($months as $month):
                        $i++;
                    ?>
                    
                    <div class="section section-slider">
                        <div class="section-header">
                            <h3 class="section-title"><?php echo $month;?><small class="small-title">2017</small></h3>

                            <div class="slider-controls">
                                <span class="prev"></span>
                                <span class="next"></span>
                            </div>
                        </div>
                        <div class="section-body">
                            <div class="event_list">
                                <?php foreach ($dates as $date):?>
                                    <?php $j++;?>
                                    <a href="evenement.php">
                                        <div class="article">
                                            <div class="article_picture_frame">
                                                <img src="holder.js/560x400" alt="Holder">
                                            </div>
                                            <?php if(is_array($date)):?>
                                                    <div class="event_date double">
                                                    <div class="date">
                                                        <span class="day"><?php echo $date[0];?></span>
                                                        <span class="month"><?php echo substr($month,0,4);?></span>
                                                    </div>
                                                    <div class="date">
                                                        <span class="day"><?php echo $date[1];?></span>
                                                        <span class="month"><?php echo substr($month,0,4);?></span>
                                                    </div>
                                                </div>
                                            <?php else:?>
                                                <div class="event_date single">
                                                    <div class="date">
                                                        <span class="day"><?php echo $date;?></span>
                                                        <span class="month"><?php echo substr($month,0,4);?></span>
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
                    <?php
                    if(!($i % 2)): ?>
                        <div class="publicite">
                            <div class="placeholder">
                                Publicité
                            </div>
                        </div>
                        <!--end of publicite-->

                   <?php endif;
                    endforeach;?>
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
                <?php include_once "layout/sidebar.php";?>
            </div>
            <!--end of col-sm-3-->
        </div>
    </div>
</div>
<?php include_once "layout/footer.php";?>