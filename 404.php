<?php include_once "layout/head.php";?>
<?php include_once "layout/header.php";?>

    <style>
        body{
            background: url("img/compass.jpg") no-repeat right center;
        }
        @media (max-width: 480px) {
            body{
                background-position: center center;
            }
        }
    </style>

<div class="body bg-cover page-404">
    <div class="container">
        <div class="content">
            <div class="h1">Oops!</div>
            <div class="h3">Il semblerait que nous n'arrivions pas à localiser la page que vous recherchez. Pendant que nos agents sont sur le terrain à la chercher nous vous invitons à</div>
            <a href="index.php" class="button-large">Retourner vers la page d'accueil</a>
        </div>
    </div>
</div>

<?php include_once "layout/footer.php";?>