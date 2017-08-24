<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<div class="page-banner" style="background-image: url('img/grey-bg.jpg')">
    <div class="container">

    </div>
</div>
<!--end of page-banner-->

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div id="page-evenements" class="main-body">
                    <h1 class="page-title">Événements</h1>
                    <ul class="months-list">
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

                    $counter = 0;
                    foreach ($months as $month):
                        $counter++;
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
                                    <a href="#">
                                        <div class="article">
                                            <div class="article_picture_frame">
                                                <img src="holder.js/260x225" alt="Holder">
                                            </div>
                                            <?php if(is_array($date)):?>
                                                <div class="event_date double">
                                                    <div class="date">
                                                        <span class="day"><?php echo $date[0];?></span>
                                                        <span class="month"><?php echo $month;?></span>
                                                    </div>
                                                    <div class="date">
                                                        <span class="day"><?php echo $date[1];?></span>
                                                        <span class="month"><?php echo $month;?></span>
                                                    </div>
                                                </div>
                                            <?php else:?>
                                                <div class="event_date single">
                                                    <div class="date">
                                                        <span class="day"><?php echo $date;?></span>
                                                        <span class="month"><?php echo $month;?></span>
                                                    </div>
                                                </div>
                                            <?php endif;?>
                                            <div class="article_title">Titre de l'événement <?php echo $counter;?></div>
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <?php
                    if(!($counter % 2)): ?>
                        <div class="publicite">
                            <div class="placeholder">
                                Publicité
                            </div>
                        </div>
                        <!--end of publicite-->

                   <?php endif;
                    endforeach;?>
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