<?php include_once "layout/head.php";?>
<?php /*include_once "layout/admin-header.php";*/?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2>Administration</h2>
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa necessitatibus soluta tempore voluptatem! Ab atque dolor et facere quasi, suscipit voluptates. Dolor magnam natus nobis praesentium reprehenderit similique tempora.</div>
                    </div>
                    <div class="section-body">
                        <h4 class="section-title">Mon profil</h4>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="entreprise">Nom de l'entreprise</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" id="entreprise" class="form_input" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="categorie">Catégorie de l'entreprise</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="category" id="categorie" class="form_input" disabled>
                                            <option value="1">Categorie 1</option>
                                            <option value="2">Categorie 2</option>
                                            <option value="3">Categorie 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 hidden-xs hidden-sm">
                                        <label for="latitude">Localisation</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="latitude">Latitude</label>
                                                <input type="text" id="latitude" class="form_input" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="longitude">Longitude</label>
                                                <input type="text" id="longitude" class="form_input" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="nom-responsable">Nom du responsable</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" id="nom-responsable" class="form_input" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="email-responsable">Adresse mail du responsable</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="email" id="email-responsable" class="form_input" readonly>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>