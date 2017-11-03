<?php include_once "layout/head.php";?>
<?php /*include_once "layout/admin-header.php";*/?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2>Fiche entreprise</h2>
                    </div>
                    <form action="" enctype="multipart/form-data">
                        <div class="section-body">
                            <h4 class="section-title">Informations générales</h4>
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <label for="description">Logo</label>
                                    <div class="image-preview">
                                        <input type="file" name="logo-entreprise" accept="image/*" id="logo-entreprise" class="image-upload" />
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <label for="categorie">Statut</label>
                                    <select name="category" id="categorie" class="form_input">
                                        <option value="1">Statut 1</option>
                                        <option value="2">Statut 2</option>
                                        <option value="3">Statut 3</option>
                                    </select>

                                    <label for="entreprise">Nom de l'entreprise</label>
                                    <input type="text" id="entreprise" class="form_input">

                                    <label for="categorie">Catégorie de l'entreprise</label>
                                    <select name="category" id="categorie" class="form_input">
                                        <option value="1">Categorie 1</option>
                                        <option value="2">Categorie 2</option>
                                        <option value="3">Categorie 3</option>
                                    </select>

                                    <label for="url">Site internet</label>
                                    <input type="text" id="url" class="form_input">

                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form_input"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                            <h4 class="section-title">Contacts & Adresse</h4>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="telephone-1">Téléphone 1</label>
                                    <input type="tel" id="telephone-1" required class="form_input">
                                </div>
                                <div class="col-sm-6">
                                    <label for="telephone-2">Téléphone 2</label>
                                    <input type="tel" id="telephone-2" class="form_input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="ville">Ville</label>
                                    <select name="ville" id="ville" required class="form_input" >
                                        <option value="1">Ville 1</option>
                                        <option value="2">Ville 2</option>
                                        <option value="3">Ville 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="quartier">Quartier</label>
                                    <select name="quartier" id="quartier" required class="form_input" >
                                        <option value="1">Quartier 1</option>
                                        <option value="2">Quartier 2</option>
                                        <option value="3">Quartier 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="boite-postale">Boîte postale</label>
                                    <input type="text" id="boite-postal" class="form_input">
                                </div>
                            </div>

                            <label for="indications">Indication sur la localisation</label>
                            <textarea name="indications" id="indications" class="form_input"></textarea>
                        </div>

                        <div class="section-body">
                            <h4 class="section-title">Tags</h4>
                            <label for="indications">Tags associés</label>
                            <input name="" id="tags" required class="form_input tags_field">
                            <p class="italic">Le nombre de tags est limité à 5. Seuls les tags proposés sont disponibles</p>
                        </div>
                        <div class="section-body">
                            <h4 class="section-title">Localisation</h4>
                            <label for="latitude">Latitude</label>
                            <input type="text" id="latitude" class="form_input">

                            <label for="longitude">Longitude</label>
                            <input type="text" id="longitude" class="form_input">
                        </div>

                        <div class="section-body horaires">
                            <h4 class="section-title">Heures d'ouverture</h4>
                            <?php $dates = array(
                                'Lundi' => 'lun',
                                'Mardi' => 'mar',
                                'Mercredi' => 'mer',
                                'Jeudi' => 'jeu',
                                'Vendredi' => 'ven',
                                'Samedi' => 'sam',
                                'Dimanche' => 'dim',
                            );?>
                            <?php foreach ($dates as $date => $short): ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="<?php echo $short; ?>" class="checkbox"><?php echo $date; ?>
                                            <input type="checkbox" name="<?php echo $short; ?>"
                                                   id="<?php echo $short; ?>" class="visible-xs">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="horaire-<?php echo $short; ?>" class="hidden"></label>
                                                <input type="text" name="horaire-<?php echo $short; ?>" placeholder="Ouverture"
                                                       id="horaire-<?php echo $short; ?>" class="form_input datepicker">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="horaire-<?php echo $short; ?>" class="hidden"></label>
                                                <input type="text" name="horaire-<?php echo $short; ?>" placeholder="Fermeture"
                                                       id="horaire-<?php echo $short; ?>" class="form_input datepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>


                        <div class="section-body">
                            <h4 class="section-title">Gallerie</h4>
                            <div class="gallery-fields">
                                <?php for($i = 0; $i <= 10; $i++):?>

                                <div class="image-input<?php echo ($i == 0 ? null : ' hidden');?>">
                                    <div class="image-preview">
                                        <input type="file" name="image-<?php echo $i;?>" accept="image/*" id="image-<?php echo $i;?>" class="image-upload" />
                                    </div>
                                </div>
    <?php endfor;?>

                                <button class="plus" type="button">Ajouter un champ <i class="fa fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>

                        <div class="form-footer sticky">
                            <button type="submit" class="btn btn-success">Enregister les modifications</button>
                            <button type="reset" class="btn">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>