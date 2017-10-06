<?php include_once "layout/head.php";?>
<?php /*include_once "layout/admin-header.php";*/?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2>Paramètres Référentiels</h2>
                    </div>
                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title">Liste des paramètres</h4>
                            <div class="custom-table">
                                <div class="row thead">
                                    <div class="th col-xs-2 col-md-1 text-center">Id</div>
                                    <div class="th col-xs-10 col-md-11 col-lg-11">Libellé</div>
                                </div>

                                <div class="tbody">
                                    <?php for($i = 0; $i < 20; $i++):?>
                                        <div class="row tr">
                                            <div class="td col-xs-2 col-md-1 text-center"><?php echo $i+1;?></div>
                                            <div class="td col-xs-10 col-md-8 col-lg-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                            <div class="td col-md-3 col-lg-2 text-right">
                                                <a href="#" class="btn"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>