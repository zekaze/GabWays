<?php include_once "layout/head.php";?>
<?php include_once "layout/header.php";?>

<div class="body bg-cover" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <div class="content login-page">
            <div class="row">
                <div class="col-md-3 bg-cover">
                    <div class="logo"><img src="img/logo.png" height="60"></div>
                    <h1 class="page-title">Bienvenue sur GabWays</h1>
                    <h4>Créer un compte gratuitement</h4>
                    <div class="welcome-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequatur culpa cum eligendi, enim error, esse ex magni maiores mollitia nesciunt nisi, odio odit officiis optio sint tenetur veniam voluptatem.</div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-6 registration-form">
                            <form action="">
                                <h3 class="form-title">Créer un compte gratuitement</h3>
                                <label for="nom">Nom</label>
                                <input type="text" class="form_input" required id="nom" name="nom" placeholder="Nom">

                                <label for="reg_email">Adresse mail</label>
                                <input type="email" class="form_input" required id="reg_email" name="reg_email" placeholder="Adresse mail">

                                <label for="reg_password">Mot de passe</label>
                                <input type="password" class="form_input" required id="reg_password" name="reg_password" placeholder="Mot de passe">

                                <label for="repassword">Répéter le mot de passe</label>
                                <input type="password" class="form_input" required id="repassword" name="repassword" placeholder="Répéter le mot de passe">

                                <button type="submit" class="submit_button">S'enregistrer</button>
                            </form>
                        </div>

                        <div class="col-sm-6 login-form">
                            <form action="">
                                <h3 class="form-title">Identifiez vous</h3>
                                <label for="log_email">Adresse mail</label>
                                <input type="email" class="form_input" required id="log_mail" name="log_mail" placeholder="Adresse mail">

                                <label for="log_password">Mot de passe</label>
                                <input type="password" class="form_input" required id="log_password" name="log_password" placeholder="Mot de passe">

                                    <button type="submit" class="submit_button">S'identifier</button>
                                    <a href="mot-de-passe.php">Mot de passe oublié?</a>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "layout/footer.php";?>