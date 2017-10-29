<?php include_once "layout/head.php";?>
<?php include_once "layout/header-2.php";?>
<?php include_once "data.php";?>

<style>
    .reset-form .form_input{
        display: block;
        width: 100%;
        padding: 10px 15px;
        margin: 20px 0;
    }
    .reset-form .btn{
        border-radius: 0;
        margin-bottom: 5px;
        border: none;
        padding: 10px;
    }
    .reset-form .submit-btn{
        color: #fff;
        background-color: #af1e27;
    }
    .reset-form .btn-default{
        background-color: #eee;
    }
</style>
<div class="page-banner" style="background-image: url('https://www.wired.com/wp-content/uploads/2016/11/GoogleMap-1.jpg')">
    <div class="container">
        <h1 class="page-title">Mot de passe oublié</h1>

    </div>
</div>
<!--end of page-banner-->

<div class="body">
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-sm-9">
                        <div class="section-body">
                            <h3 class="h3">Réinitialiser votre mot de passe</h3>
                            Veuillez entrer votre adresse mail.Vous recevrez un email contenant les instructions pour changer votre mot de passe.
                            <form action="" class="reset-form">
                                <label for="email" class="hidden">Adresse mail</label>
                                <input type="text" class="form_input" placeholder="Votre adresse mail">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <button class="btn btn-block submit-btn" type="submit">Réinitialiser le mot de passe &nbsp; <i class="fa fa-lock"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="login.php" class="btn btn-block btn-default">Retour</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
                <div class="col-sm-3 text-center">
                    <i class="fa fa-question" style="font-size: 120px; color: #af1e27"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include_once "layout/footer.php";?>
