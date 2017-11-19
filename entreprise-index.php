<?php include_once "layout/head.php";?>
<?php /*include_once "layout/admin-header.php";*/?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2><i class="fa fa-dashboard"></i> Tableau de bord</h2>
                    </div>

                        <div class="panel">
                            <div class="panel-body">
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
                            </div>
                        </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3"><i class="fa fa-building"></i> Top entreprises</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="70"><img src="<?php echo $etablissements[$i];?>" class="img-responsive" alt=""></td>
                                                    <td width="40"><?php echo $i+1;?></td>
                                                    <td class="details_etablissement">
                                                        <div class="nom_etablissement">Nom entreprise</div>
                                                        <div class="quartier_etablissement">Catégorie</div>
                                                    </td>
                                                </tr>
                                            <?php endfor;?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3"><i class="fa fa-tag"></i> Top catégories</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="40"><?php echo $i+1;?></td>
                                                    <td class="details_etablissement">
                                                        <div class="nom_etablissement">Catégorie <?php echo $i+1;?></div>
                                                    </td>
                                                </tr>
                                            <?php endfor;?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3"><i class="fa fa-building"></i> Entreprises non validéees</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="70">
                                                        <a href="#">
                                                            <img src="<?php echo $etablissements[$i];?>" class="img-responsive" alt="">
                                                        </a>
                                                        </td>
                                                    <td width="40"><?php echo $i+1;?></td>
                                                    <td class="details_etablissement">
                                                        <a href="#">
                                                            <div class="nom_etablissement">Nom entreprise</div>
                                                            <div class="quartier_etablissement">Catégorie</div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endfor;?>
                                        </table>
                                        <a href="#" class="btn btn-block">Voir toutes les entreprises</a>
                                    </div>
                                </div>
                            </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3"><i class="fa fa-bullhorn"></i> Publicités non validées</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <thead>
                                            <th></th>
                                            <th colspan="2">Libellé</th>
                                            <th>Début</th>
                                            <th>Fin</th>
                                            </thead>
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="40"><?php echo $i+1;?></td>
                                                    <td width="70"><img src="<?php echo $evenements[$i];?>" class="img-responsive" alt=""></td>
                                                    <td class="details_etablissement">
                                                        <a href="#">
                                                            <div class="nom_etablissement">Libellé</div>
                                                            <div class="quartier_etablissement">Nom de l'entreprise</div>

                                                        </a>
                                                    </td>
                                                    <td class="details_etablissement">
                                                        19/11/2017
                                                    </td>
                                                    <td class="details_etablissement">
                                                        30/11/2017
                                                    </td>
                                                </tr>
                                            <?php endfor;?>
                                        </table>
                                        <a href="#" class="btn btn-block">Voir toutes les publicités</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="table-responsive">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="h3"><i class="fa fa-calendar"></i> Événements non validées</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <thead>
                                            <th></th>
                                            <th colspan="2">Libellé</th>
                                            <th>Début</th>
                                            <th>Fin</th>
                                            </thead>
                                            <?php for($i = 0; $i <5; $i++):?>
                                                <tr>
                                                    <td width="40"><?php echo $i+1;?></td>
                                                    <td width="70"><img src="<?php echo $evenements[$i];?>" class="img-responsive" alt=""></td>
                                                    <td class="details_etablissement">
                                                        <a href="#">
                                                            <div class="nom_etablissement">Titre de l'événement</div>
                                                            <div class="quartier_etablissement">Nom de l'entreprise</div>

                                                        </a>
                                                    </td>
                                                    <td class="details_etablissement">
                                                        19/11/2017
                                                    </td>
                                                    <td class="details_etablissement">
                                                        30/11/2017
                                                    </td>
                                                </tr>
                                            <?php endfor;?>
                                        </table>
                                        <a href="#" class="btn btn-block">Voir toutes les événements</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>