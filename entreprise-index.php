<?php include_once "layout/head.php";?>
<?php /*include_once "layout/admin-header.php";*/?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2>Tableau de bord</h2>
                    </div>

                        <div class="dashboard">
                            <div class="dashboard-row">
                                <a href="#" class="dashboard-item" style="background-color: #af1e27">
                                    <i class="fa fa-users"></i>
                                    <div class="label">
                                        <div class="counter">237</div>
                                        utilisateurs
                                    </div>
                                </a>

                                <a href="" class="dashboard-item" style="background-color: #2d2d7b">
                                    <i class="fa fa-building"></i>
                                    <div class="label">
                                        <div class="counter">312</div>
                                        entreprises
                                    </div>
                                </a>
                            </div>
                            <div class="dashboard-row">
                                <a href="#" class="dashboard-item" style="background-color: #df8e00">
                                    <i class="fa fa-calendar"></i>
                                    <div class="label">
                                        <div class="counter">22</div>
                                        événements
                                    </div>
                                </a>

                                <a href="#" class="dashboard-item" style="background-color: #079615">
                                    <i class="fa fa-bullhorn"></i>
                                    <div class="label">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="counter">15</div>
                                                publicités payées
                                            </div>
                                            <div class="col-xs-6">
                                                <strong>Total</strong> <br>
                                                275,000 XAF
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3">Top entreprises</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <thead>
                                            <th></th>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            </thead>

                                            <tbody>
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="100"><img src="<?php echo $etablissements[$i];?>" class="img-responsive" alt=""></td>
                                                    <td>Nom entreprise</td>
                                                    <td>Catégorie</td>
                                                </tr>
                                            <?php endfor;?>
                                            </tbody>
                                        </table>
                                        <a href="#" class="btn btn-block">Afficher toute la liste</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>