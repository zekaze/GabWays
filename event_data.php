<?php

include_once "data.php";

$i = rand(0, 19);
$j = rand(0, 19);
$k = rand(0, 19);
$l = rand(0, 19);
$m = rand(0, 19);

$dates = array(
    "2017-09-20" => array(
        array(
            "titre" => "Titre de l'evenement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "annonceur" => "Nom de l'etablissement",
            "photo_couverture" => $evenements[$i],
            "url" => "evenement.php"
        ),
        array(
            "titre" => "Titre de l'evenement 2",
            "ville" => "Libreville",
            "quartier" => "Plaine Orety",
            "annonceur" => "Nom de l'etablissement",
            "photo_couverture" => $evenements[$j],
            "url" => "evenement.php",
        ),
        array(
            "titre" => "Titre de l'evenement 5",
            "date" => "2017-09-20",
            "ville" => "Libreville",
            "quartier" => "Charbonnages",
            "annonceur" => "Nom de l'etablissement",
            "photo_couverture" => $evenements[$k],
            "url" => "evenement.php",
        )
    ),
    "2017-09-19" => array(
        array(
            "titre" => "Titre de l'evenement 3",
            "ville" => "Libreville",
            "quartier" => "Mindoube",
            "annonceur" => "Nom de l'etablissement",
            "photo_couverture" => $evenements[$l],
            "url" => "evenement.php",
        )
    ),
    "2017-09-28" => array(
        array(
            "titre" => "Titre de l'evenement 4",
            "ville" => "Libreville",
            "quartier" => "Haut de Gue Gue",
            "annonceur" => "Nom de l'tablissement",
            "photo_couverture" => $evenements[$m],
            "url" => "evenement.php",
        )
    )
);

$date_calendrier = array();
$count = 0;

foreach ($dates as $date => $events){
    
    $date_calendrier[$count]['date'] = $date;
    $date_calendrier[$count]['badge'] = true;
    $date_calendrier[$count]['title'] = "evenements du $date";
    $date_calendrier[$count]['body'] = null;

    foreach ($events as $event){
        $titre = $event['titre'];
        $ville = $event['ville'];
        $quartier = $event['quartier'];
        $annonceur = $event['annonceur'];
        $photo_couverture = $event['photo_couverture'];
        $url = $event['url'];


        $date_calendrier[$count]['body'] .= "<a href='$url' data-animate='fadeInUp'>";
        $date_calendrier[$count]['body'] .= "<div class='article'>";
        $date_calendrier[$count]['body'] .= "<div class='article_picture_frame'>";
        $date_calendrier[$count]['body'] .= "<img src='$photo_couverture' class='img-responsive' alt='$titre'>";
        $date_calendrier[$count]['body'] .= "</div>";
        $date_calendrier[$count]['body'] .= "<div class='article_title'>$titre</div>";
        $date_calendrier[$count]['body'] .= "<div class='article_location'>$quartier, $ville</div>";
        $date_calendrier[$count]['body'] .= "<div class='annonceur'>$annonceur</div>";
        $date_calendrier[$count]['body'] .= "</div></a>";
        

    }
    //Incrémente le compteur
    $count++;
}
echo json_encode($date_calendrier);