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
                                <i class="fa fa-user"></i>
                                <div class="label">
                                    <div class="counter">237</div>
                                    utilisateurs
                                </div>
                            </a>

                            <a href="#" class="dashboard-item" style="background-color: #2d2d7b">
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
                                    <div class="counter">15</div>
                                    publicités
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>