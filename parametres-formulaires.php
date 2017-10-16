<?php include_once "layout/head.php";?>


<?php include_once "data.php";?>
    <div class="body admin">
        <?php include_once "layout/admin-sidebar.php";?>
        <div class="main-body">
            <div class="container-fluid">
                <div class="admin-section">
                    <div class="section-header">
                        <h2>Formulaires Admin</h2>
                    </div>
                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse1">Activités <i class="fa fa-caret-down pull-right"></i></h4>
                            <div class="collapse" id="collapse1">
                                <label for="liste_deroulante-1">Entreprise *</label>
                                <select name="liste_deroulante-1" id="liste_deroulante-1" class="form_input">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>

                                <label for="champ_texte-1">Libellé *</label>
                                <input type="text" id="champ_texte-1" name="champ_texte-1" required class="form_input" placeholder="Libellé...">

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                    <button type="reset" class="btn">Annuler</button>
                                </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse2">Catégories  <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse2">
                                <label for="champ_texte-2">Libellé *</label>
                                <input type="text" id="champ_texte-2" required class="form_input" placeholder="Libellé...">

                                <label for="champ_texte-3">Slug *</label>
                                <input type="text" id="champ_texte-3" name="champ_texte-3" required class="form_input" placeholder="Slug...">

                                <label for="liste_deroulante-2">Catégorie mère</label>
                                <select name="liste_deroulante-2" id="liste_deroulante-2" class="form_input">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>


                                <label for="champ_texte-4">Icone *</label>
                                <input type="text" id="champ_texte-4" name="champ_texte-4" required class="form_input" placeholder="Icone...">


                                <label for="ajout_fichier-1">Image *</label>
                                <input type="file" name="ajout_fichier-1" id="ajout_fichier-1" class="form_input">

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                    <button type="reset" class="btn">Annuler</button>
                                </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse3">Modes de paiements <i class="fa fa-caret-down pull-right"></i></h4>
                            <div class="collapse" id="collapse3">
                                <label for="champ_texte-5">Libellé *</label>
                                <input type="text" id="champ_texte-5" name="champ_texte-5" required class="form_input"
                                       placeholder="Libellé...">

                                <label for="ajout_fichier-2">Image *</label>
                                <input type="file" name="ajout_fichier-2" id="ajout_fichier-2" class="form_input">

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                    <button type="reset" class="btn">Annuler</button>
                                </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse4">Options de fiche <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse4">
                                <label for="champ_texte-6">Libellé *</label>
                                <input type="text" id="champ_texte-6" name="champ_texte-6" required class="form_input"
                                       placeholder="Libellé...">


                                <h4>Obligatoire</h4>
                                <label class="checkbox inline-block">
                                    <input type="checkbox" class="hidden" name="checkbox[]">
                                    Obligatoire
                                </label>

                                <label for="liste_deroulante-3">Type *</label>
                                <select name="liste_deroulante-3" id="liste_deroulante-3" class="form_input">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>


                                <label for="zone_de_saisie-1">Commentaire</label>
                                <textarea id="zone_de_saisie-1" name="zone_de_saisie-1" class="form_input" placeholder="Commentaire..."></textarea>


                                <label for="champ_texte-7">Valeurs possibles</label>
                                <input type="text" id="champ_texte-7" name="champ_texte-7" class="form_input" placeholder="Valeurs possibles...">

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                    <button type="reset" class="btn">Annuler</button>
                                </div>
                            </div>

                        </div>
                        </form>

                    <form action="">
                    <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse5">Tags <i class="fa fa-caret-down pull-right"></i></h4>

                        <div class="collapse" id="collapse5">
                        <label for="champ_texte-8">Libellé *</label>
                            <input type="text" id="champ_texte-8" name="champ_texte-8" required class="form_input" placeholder="Libellé...">


                            <label for="champ_texte-9">Slug *</label>
                            <input type="text" id="champ_texte-9" name="champ_texte-9" required class="form_input" placeholder="Slug...">

                        <div class="form-footer">
                            <button type="submit" class="btn btn-success">Enregister les modifications</button>
                            <button type="reset" class="btn">Annuler</button>
                        </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse6">Ville <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse6">
                            <label for="champ_texte-10">Nom *</label>
                            <input type="text" id="champ_texte-10" required name="champ_texte-10" class="form_input" placeholder="Nom...">

                            <label for="champ_texte-11">Slug *</label>
                            <input type="text" id="champ_texte-11" required name="champ_texte-11" class="form_input" placeholder="Slug...">

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                    <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse7">Quartiers <i class="fa fa-caret-down pull-right"></i></h4>
                        <div class="collapse" id="collapse7">
                            <label for="liste_deroulante-4">Ville *</label>
                            <select name="liste_deroulante-4" id="liste_deroulante-4" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <label for="champ_texte-14">Nom *</label>
                            <input type="text" id="champ_texte-14" required name="champ_texte-14" class="form_input" placeholder="Nom...">

                            <label for="champ_texte-15">Slug *</label>
                            <input type="text" id="champ_texte-15" required name="champ_texte-15" class="form_input" placeholder="Slug...">

                        <div class="form-footer">
                            <button type="submit" class="btn btn-success">Enregister les modifications</button>
                            <button type="reset" class="btn">Annuler</button>
                        </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                    <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse8">Type de publicités <i class="fa fa-caret-down pull-right"></i></h4>

                        <div class="collapse" id="collapse8">
                        <label for="champ_texte-16">Type *</label>
                            <input type="text" id="champ_texte-16" required name="champ_texte-16" class="form_input" placeholder="Type...">

                            <label for="champ_texte-17">Tarif mensuel *</label>
                            <input type="text" id="champ_texte-17" required name="champ_texte-17" class="form_input" placeholder="Tarif mensuel...">

                            <label for="champ_texte-18">Tarif hebdomadaire *</label>
                            <input type="text" id="champ_texte-18" required name="champ_texte-18" class="form_input" placeholder="Tarif hebdomadaire...">

                            <label for="zone_de_saisie-2">Description</label>
                            <textarea id="zone_de_saisie-2" name="zone_de_saisie-2" class="form_input" placeholder="Description..."></textarea>

                            <h4>Actif</h4>
                            <label class="checkbox inline-block">
                                <input type="checkbox" class="hidden" name="checkbox[]">
                                Actif
                            </label>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-success">Enregister les modifications</button>
                            <button type="reset" class="btn">Annuler</button>
                        </div>
                            </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse9">Utilisateurs - Liste <i class="fa fa-caret-down pull-right"></i></h4>
                            <div class="collapse" id="collapse9">
                            <div class="custom-table">
                                <div class="row thead">
                                    <div class="th col-md-1">#</div>
                                    <div class="th col-md-3">Email</div>
                                    <div class="th col-md-3">Nom d'utilisateur</div>
                                    <div class="th col-md-2">Profil</div>
                                    <div class="th col-md-1">Actif</div>
                                    <div class="th col-md-2"></div>
                                </div>

                                <div id="tbody1" class="tbody">
                                    <?php for($i = 0; $i < 3; $i++):?>
                                        <div class="row tr">
                                            <div class="td col-md-1">
                                                <?php echo $i+1;?>
                                            </div>
                                            <div class="td col-md-3">utilisateur@gabways.com</div>
                                            <div class="td col-md-3">Utilisateur</div>
                                            <div class="td col-md-2">Profil</div>
                                            <div class="td col-md-1">Actif</div>
                                            <div class="td col-md-2 text-right">
                                                <a href="#" class="btn"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse10">Utilisateurs (Détails) <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse10">
                            <label for="champ_texte-19">Email *</label>
                            <input type="text" id="champ_texte-19" required name="champ_texte-19" class="form_input" placeholder="Email...">

                            <label for="champ_texte-20">Nom d'utilisateur *</label>
                            <input type="text" id="champ_texte-20" required name="champ_texte-20" class="form_input" placeholder="Nom d'utilisateur...">

                            <label for="champ_texte-21">Nom</label>
                            <input type="text" id="champ_texte-21"  name="champ_texte-21" class="form_input" placeholder="Nom...">

                            <label for="champ_texte-22">Prénom</label>
                            <input type="text" id="champ_texte-22"  name="champ_texte-22" class="form_input" placeholder="Prénom...">

                            <label for="champ_texte-22">Genre</label>
                            <label class="old_checkbox">
                                <input type="radio" name="genre">
                                Homme
                            </label>
                            <label class="old_checkbox">
                                <input type="radio" name="genre">
                                Femme
                            </label>

                            <label for="champ_texte-23">Date de naissance</label>
                            <input type="date" id="champ_texte-23" required name="champ_texte-23" class="form_input">


                            <label for="champ_texte-24">Téléphone</label>
                            <input type="text" id="champ_texte-24" name="champ_texte-24" class="form_input" placeholder="Telephone...">

                            <label for="liste_deroulante-5">Profil</label>
                            <select name="liste_deroulante-5" required id="liste_deroulante-5" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <h4>Actif</h4>
                                <label class="checkbox inline-block">
                                    <input type="checkbox" class="hidden" name="checkbox[]">
                                    Actif
                                </label>

                            <label for="password">Mot de passe *</label>
                            <input type="password" id="password" required name="password" class="form_input" placeholder="Mot de passe...">

                            <label for="password-confirm">Confirmation du mot de passe *</label>
                            <input type="password" id="password-confirm" required name="password-confirm" class="form_input" placeholder="Confirmation du mot de passe...">

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse11">Système <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse11">
                            <label for="champ_texte-25">Nom *</label>
                            <input type="text" id="champ_texte-25" required name="champ_texte-25" class="form_input" placeholder="Nom...">

                            <label for="champ_texte-26">Slogan</label>
                            <input type="text" id="champ_texte-26" name="champ_texte-26" class="form_input" placeholder="Slogan...">

                            <label for="zone_de_saisie_riche-1">Description 1</label>
                            <textarea id="zone_de_saisie_riche-1" required name="zone_de_saisie_riche-1" class="form_input rich-text" placeholder="Description 1..."></textarea>

                            <label for="zone_de_saisie_riche-2">Description 2</label>
                            <textarea id="zone_de_saisie_riche-2" required name="zone_de_saisie_riche-2" class="form_input rich-text" placeholder="Description 2..."></textarea>
                            <label for="zone_de_saisie_riche-3">Équipe</label>
                            <textarea id="zone_de_saisie_riche-3" required name="zone_de_saisie_riche-3" class="form_input rich-text" placeholder="Équipe..."></textarea>

                            <label for="champ_texte-27">Contact</label>
                            <input type="text" id="champ_texte-27" name="champ_texte-27" class="form_input" placeholder="Contact...">

                            <label for="champ_texte-28">Email</label>
                            <input type="text" id="champ_texte-28" name="champ_texte-28" class="form_input" placeholder="Email...">

                            <label for="champ_texte-29">Téléphone</label>
                            <input type="text" id="champ_texte-29" name="champ_texte-29" class="form_input" placeholder="Téléphone...">

                            <label for="champ_texte-30">Téléphone 2</label>
                            <input type="text" id="champ_texte-30" name="champ_texte-30" class="form_input" placeholder="Téléphone 2...">

                            <label for="champ_texte-31">Facebook</label>
                            <input type="text" id="champ_texte-31" name="champ_texte-31" class="form_input" placeholder="Facebook...">

                            <label for="champ_texte-32">Instagram</label>
                            <input type="text" id="champ_texte-32" name="champ_texte-32" class="form_input" placeholder="Instagram...">

                            <label for="champ_texte-33">LinkedIn</label>
                            <input type="text" id="champ_texte-33" name="champ_texte-33" class="form_input" placeholder="LinkedIn...">

                            <label for="champ_texte-34">Twitter</label>
                            <input type="text" id="champ_texte-34" name="champ_texte-34" class="form_input" placeholder="Twitter...">

                            <label for="champ_texte-35">Youtube</label>
                            <input type="text" id="champ_texte-35" name="champ_texte-35" class="form_input" placeholder="Youtube...">

                            <label for="champ_texte-36">Lien video Youtube</label>
                            <input type="text" id="champ_texte-36" name="champ_texte-36" class="form_input" placeholder="Lien video Youtube...">

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse12">Événements - Liste <i class="fa fa-caret-down pull-right"></i></h4>
                            <div class="collapse" id="collapse12">
                            <div class="custom-table">
                                <div class="row thead">
                                    <div class="th col-md-1">#</div>
                                    <div class="th col-md-3">Entreprise</div>
                                    <div class="th col-md-3">Titre</div>
                                    <div class="th col-md-1">Debut</div>
                                    <div class="th col-md-1">Fin</div>
                                    <div class="th col-md-1">Statut</div>
                                    <div class="th col-md-2"></div>
                                </div>

                                <div id="tbody1" class="tbody">
                                    <?php for($i = 0; $i < 3; $i++):?>
                                        <div class="row tr">
                                            <div class="td col-md-1">
                                                <?php echo $i+1;?>
                                            </div>
                                            <div class="td col-md-3">Nom Entreprise</div>
                                            <div class="td col-md-3">titre de l'événement</div>
                                            <div class="td col-md-1">21-10-2017</div>
                                            <div class="td col-md-1">22-10-2017</div>
                                            <div class="td col-md-1">Statut</div>
                                            <div class="td col-md-2 text-right">
                                                <a href="#" class="btn"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse13">Événements (Détails) <i class="fa fa-caret-down pull-right"></i></h4>
                            <div class="collapse" id="collapse13">
                            <label for="liste_deroulante-6">Entreprise *</label>
                            <select name="liste_deroulante-6" id="liste_deroulante-6" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <label for="champ_texte-37">Titre *</label>
                            <input type="text" id="champ_texte-37" required name="champ_texte-37" class="form_input" placeholder="Titre...">

                            <label for="champ_texte-38">Slug *</label>
                            <input type="text" id="champ_texte-38" required name="champ_texte-38" class="form_input" placeholder="Slug...">

                            <label for="zone_de_saisie-3">Description</label>
                            <textarea id="zone_de_saisie-3" name="zone_de_saisie-3" class="form_input" placeholder="Description..."></textarea>

                            <label for="ajout_fichier-3">Image</label>
                            <input type="file" name="ajout_fichier-3" id="ajout_fichier-3" class="form_input">

                            <label for="champ_texte-39">Date de debut</label>
                            <div class="row">
                                <div class="col-sm-6"><input type="date" id="champ_texte-39"  name="champ_texte-39" class="form_input"></div>
                                <div class="col-sm-6"><input type="text" id="champ_texte-40"  name="champ_texte-40" class="form_input datepicker"></div>
                            </div>

                            <label for="champ_texte-41">Date de fin</label>
                            <div class="row">
                                <div class="col-sm-6"><input type="date" id="champ_texte-41"  name="champ_texte-41" class="form_input"></div>
                                <div class="col-sm-6"><input type="text" id="champ_texte-42"  name="champ_texte-42" class="form_input datepicker"></div>
                            </div>


                            <label for="champ_texte-43">Date de publication</label>
                            <input type="date" id="champ_texte-43"  name="champ_texte-43" class="form_input">

                            <label for="liste_deroulante-7">Quartier</label>
                            <select name="liste_deroulante-7" id="liste_deroulante-7" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <label for="zone_de_saisie-4">Lieu</label>
                            <textarea id="zone_de_saisie-4" required name="zone_de_saisie-4" class="form_input" placeholder="Lieu..."></textarea>

                            <label for="champ_texte-44">Téléphone</label>
                            <input type="text" id="champ_texte-44" name="champ_texte-44" class="form_input" placeholder="Téléphone...">

                            <label for="champ_texte-45">Téléphone 2</label>
                            <input type="text" id="champ_texte-45" name="champ_texte-45" class="form_input" placeholder="Téléphone 2...">

                            <label for="champ_texte-46">Email</label>
                            <input type="text" id="champ_texte-46" name="champ_texte-46" class="form_input" placeholder="Email...">

                            <label for="champ_texte-47">Facebook</label>
                            <input type="text" id="champ_texte-47" name="champ_texte-47" class="form_input" placeholder="Facebook...">

                            <label for="champ_texte-48">Instagram</label>
                            <input type="text" id="champ_texte-48" name="champ_texte-48" class="form_input" placeholder="Instagram...">

                            <label for="champ_texte-49">Vidéo</label>
                            <input type="text" id="champ_texte-49" name="champ_texte-49" class="form_input" placeholder="Vidéo...">

                            <label for="champ_texte-50">LinkedIn</label>
                            <input type="text" id="champ_texte-50" name="champ_texte-50" class="form_input" placeholder="LinkedIn...">

                            <label for="liste_deroulante-8">Statut</label>
                            <select name="liste_deroulante-8" id="liste_deroulante-8" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse14">Publicités - Liste (Colonnes) <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse14">
                            <div class="custom-table">
                                <div class="row thead">
                                    <div class="th col-md-1">#</div>
                                    <div class="th col-md-2">Entreprise</div>
                                    <div class="th col-md-2">Libellé</div>
                                    <div class="th col-md-1">Début</div>
                                    <div class="th col-md-1">Fin</div>
                                    <div class="th col-md-2">Coût</div>
                                    <div class="th col-md-1">Statut</div>
                                    <div class="th col-md-2"></div>
                                </div>

                                <div id="tbody1" class="tbody">
                                    <?php for($i = 0; $i < 3; $i++):?>
                                        <div class="row tr">
                                            <div class="td col-md-1">
                                                <?php echo $i+1;?>
                                            </div>
                                            <div class="td col-md-2">Nom Entreprise</div>
                                            <div class="td col-md-2">Libellé de la pub</div>
                                            <div class="td col-md-1">21-10-2017</div>
                                            <div class="td col-md-1">22-10-2017</div>
                                            <div class="td col-md-2">25,000 FCFA</div>
                                            <div class="td col-md-1">Statut</div>
                                            <div class="td col-md-2 text-right">
                                                <a href="#" class="btn"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <form action="">
                        <div class="section-body">
                            <h4 class="section-title" data-toggle="collapse" data-target="#collapse15">Publicités (Détails) <i class="fa fa-caret-down pull-right"></i></h4>

                            <div class="collapse" id="collapse15">
                            <label for="champ_texte-51">Libellé *</label>
                            <input type="text" id="champ_texte-51" required name="champ_texte-51" class="form_input" placeholder="Libellé...">

                            <label for="liste_deroulante-9">Type de publicité</label>
                            <select name="liste_deroulante-9" id="liste_deroulante-9" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="champ_texte-52">Date de debut</label>
                                    <input type="date" id="champ_texte-52"  name="champ_texte-52" class="form_input" placeholder="Date de debut...">
                                </div>
                                <div class="col-sm-6">
                                    <label for="champ_texte-53">Date de fin</label>
                                    <input type="date" id="champ_texte-53"  name="champ_texte-53" class="form_input" placeholder="Date de fin...">
                                </div>
                            </div>




                            <label for="liste_deroulante-10">Priorité</label>
                            <select name="liste_deroulante-10" id="liste_deroulante-10" class="form_input">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select

                            <label for="champ_texte-54">Coût</label>
                            <input type="text" id="champ_texte-54" readonly class="form_input" placeholder="Coût..">

                            <h4>Cases à cocher</h4>
                            <label class="checkbox inline-block">
                                <input type="checkbox" class="hidden" name="checkbox[]">
                                Payé
                            </label>


                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Enregister les modifications</button>
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                                </div>
                        </div>
                        </form>

                    <!--<form action="">
                        <div class="section-body">
                            <h4 class="section-title">Champs génériques</h4>
                            <label for="champ_texte">Texte</label>
                            <input type="text" id="champ_texte" required name="champ_texte" class="form_input" placeholder="Champ de texte...">

                            <label for="champ_mail">Email</label>
                            <input type="email" id="champ_mail" required class="form_input" placeholder="Champ email...">

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
                            <textarea id="zone_de_saisie" required name="zone_de_saisie" class="form_input" placeholder="Zone de saisie simple..."></textarea>

                            <label for="zone_de_saisie_riche">Zone de saisie riche</label>
                            <textarea id="zone_de_saisie_riche" required name="zone_de_saisie_riche" class="form_input rich-text" placeholder="Zone de saisie riche..."></textarea>
                            <div style="margin-bottom: 15px;"></div>

                            <label for="ajout_fichier">Ajout de fichier classique</label>
                            <input type="file" name="ajout_fichier" required id="ajout_fichier" class="form_input">

                            <label for="ajout_fichier" class="file_input">
                                <i class="fa fa-folder"></i> Ajouter un fichier
                                <input type="file" required name="ajout_fichier" class="hidden">
                            </label>

                            <h4>Cases à cocher</h4>
                            <?php /*for ($i = 0; $i < 5; $i++): */?>
                                <label class="old_checkbox">
                                    <input type="checkbox" name="checkbox[]">
                                    Case à cocher classique <?php /*echo $i + 1; */?>
                                </label>
                            <?php /*endfor; */?>

                            <h4>Cases à cocher custom</h4>
                            <?php /*for ($i = 0; $i < 5; $i++): */?>
                                <label class="checkbox inline-block">
                                    <input type="checkbox" class="hidden" name="checkbox[]">
                                    Case à cocher custom <?php /*echo $i + 1; */?>
                                </label>
                            <?php /*endfor; */?>

                            <h4>Radio boutons classique</h4>
                            <?php /*for ($i = 0; $i < 5; $i++): */?>
                                <label class="old_checkbox">
                                    <input type="radio" name="radio1">
                                    Radio bouton <?php /*echo $i + 1; */?>
                                </label>
                            <?php /*endfor; */?>

                            <h4>Radio boutons custom</h4>
                            <?php /*for ($i = 0; $i < 5; $i++): */?>
                                <label class="checkbox inline-block">
                                    <input type="radio" name="radio2">
                                    Radio bouton <?php /*echo $i + 1; */?>
                                </label>
                            <?php /*endfor; */?>
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
<?php include_once "layout/admin-footer.php";?>