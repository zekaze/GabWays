<?php include_once "layout/head.php";?>


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
                                    <div class="th col-xs-3 col-sm-2 col-lg-1">
                                        #
                                    </div>
                                    <div class="th col-xs-9 col-sm-10 col-lg-11">Libellé</div>
                                </div>

                                <div id="tbody1" class="tbody">
                                    <?php for($i = 0; $i < 3; $i++):?>
                                        <div class="row tr">
                                            <div class="td col-xs-3 col-sm-2 col-lg-1">
                                                <?php echo $i+1;?>
                                            </div>
                                            <div class="td col-xs-9 col-sm-7 col-lg-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                            <div class="td col-sm-3 col-lg-2 text-right">
                                                <a href="#" class="btn"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                            <h4 class="section-title">Champs génériques</h4>
                            <label for="champ_texte">Texte</label>
                            <input type="text" id="champ_texte" class="form_input" placeholder="Champ de texte...">

                            <label for="champ_mail">Email</label>
                            <input type="email" id="champ_mail" class="form_input" placeholder="Champ email...">

                            <label for="liste_deroulante">Liste déroulante normale</label>
                            <select name="liste_deroulante" id="liste_deroulante" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <label for="liste_deroulante">Liste multichoix</label>
                            <select name="liste_deroulante" id="liste_deroulante" class="form_input" multiple>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>

                            <label for="zone_de_saisie">Zone de saisie simple</label>
                            <textarea id="zone_de_saisie" class="form_input" placeholder="Zone de saisie simple..."></textarea>

                            <label for="zone_de_saisie_riche">Zone de saisie riche</label>
                            <textarea id="zone_de_saisie_riche" class="form_input rich-text" placeholder="Zone de saisie riche..."></textarea>
                            <div style="margin-bottom: 15px;"></div>

                            <label for="ajout_fichier">Ajout de fichier classique</label>
                            <input type="file" name="fichier" id="ajout_fichier" class="form_input">

                            <label for="ajout_fichier" class="file_input">
                                <i class="fa fa-folder"></i> Ajouter un fichier
                                <input type="file" name="fichier" class="hidden">
                            </label>

                            <h4>Cases à cocher</h4>
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <label class="old_checkbox">
                                    <input type="checkbox" name="checkbox[]">
                                    Case à cocher classique <?php echo $i + 1; ?>
                                </label>
                            <?php endfor; ?>

                            <h4>Cases à cocher custom</h4>
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <label class="checkbox inline-block">
                                    <input type="checkbox" class="hidden" name="checkbox[]">
                                    Case à cocher custom <?php echo $i + 1; ?>
                                </label>
                            <?php endfor; ?>

                            <h4>Radio boutons classique</h4>
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <label class="old_checkbox">
                                    <input type="radio" name="radio1">
                                    Radio bouton <?php echo $i + 1; ?>
                                </label>
                            <?php endfor; ?>

                            <h4>Radio boutons custom</h4>
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <label class="checkbox inline-block">
                                    <input type="radio" name="radio2">
                                    Radio bouton <?php echo $i + 1; ?>
                                </label>
                            <?php endfor; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>