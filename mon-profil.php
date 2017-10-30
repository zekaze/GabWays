<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>

<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Mon profil</h1>
    </div>
</div>

<div class="body">
    <div class="container">
        <div class="main-body">
                <form action="" class="admin-form">
                    <h3 class="h3">Informations du profil</h3>
                    <div class="section-body">
                        <label for="champ_texte-19">Email *</label>
                        <input type="text" id="champ_texte-19" required name="champ_texte-19" class="form_input"
                               placeholder="Email...">

                        <label for="champ_texte-20">Nom d'utilisateur *</label>
                        <input type="text" id="champ_texte-20" required name="champ_texte-20" class="form_input"
                               placeholder="Nom d'utilisateur...">

                        <label for="champ_texte-21">Nom</label>
                        <input type="text" id="champ_texte-21" name="champ_texte-21" class="form_input"
                               placeholder="Nom...">

                        <label for="champ_texte-22">Prénom</label>
                        <input type="text" id="champ_texte-22" name="champ_texte-22" class="form_input"
                               placeholder="Prénom...">

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
                        <input type="text" id="champ_texte-24" name="champ_texte-24" class="form_input"
                               placeholder="Telephone...">

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
                        <input type="password" id="password" required name="password" class="form_input"
                               placeholder="Mot de passe...">

                        <label for="password-confirm">Confirmation du mot de passe *</label>
                        <input type="password" id="password-confirm" required name="password-confirm" class="form_input"
                               placeholder="Confirmation du mot de passe...">

                        <div class="form-footer">
                            <button type="submit" class="btn btn-success">Enregister les modifications</button>
                            <button type="reset" class="btn">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "layout/footer.php";?>
