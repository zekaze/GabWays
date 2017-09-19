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
            "titre" => "Titre de l'événement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "annonceur" => "Nom de l'établissement",
            "photo_couverture" => $evenements[$i],
            "url" => "evenement.php"
        ),
        array(
            "titre" => "Titre de l'événement 2",
            "ville" => "Libreville",
            "quartier" => "Plaine Orety",
            "annonceur" => "Nom de l'établissement",
            "photo_couverture" => $evenements[$j],
            "url" => "evenement.php",
        ),
        array(
            "titre" => "Titre de l'événement 5",
            "date" => "2017-09-20",
            "ville" => "Libreville",
            "quartier" => "Charbonnages",
            "annonceur" => "Nom de l'établissement",
            "photo_couverture" => $evenements[$k],
            "url" => "evenement.php",
        )
    ),
    "2017-09-19" => array(
        array(
            "titre" => "Titre de l'événement 3",
            "ville" => "Libreville",
            "quartier" => "Mindoube",
            "annonceur" => "Nom de l'établissement",
            "photo_couverture" => $evenements[$l],
            "url" => "evenement.php",
        )
    ),
    "2017-09-28" => array(
        array(
            "titre" => "Titre de l'événement 4",
            "ville" => "Libreville",
            "quartier" => "Haut de Gue Gue",
            "annonceur" => "Nom de l'établissement",
            "photo_couverture" => $evenements[$m],
            "url" => "evenement.php",
        )
    )
);

$date_calendrier = array();
$count = 0;

foreach ($dates as $date => $events){
    $mois = array(null, "Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    $mois_short = array(null, "Jan","Fév","Mar","Avri","Mai","Juin","Juil","Août","Sept","Oct","Nov","Déc");

    $date_calendrier[$count]['date'] = $date;
    $date_array = preg_split("#-#",$date);
    $date_calendrier[$count]['badge'] = true;
    $date_calendrier[$count]['title'] = "Événements du ".$date_array[2]."&nbsp;".$mois[(int)($date_array[1])]."&nbsp;".$date_array[0]."";
    $date_calendrier[$count]['body'] = null;
    $date_calendrier[$count]['footer'] = "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>";
    foreach ($events as $event){
        $titre = $event['titre'];
        $ville = $event['ville'];
        $quartier = $event['quartier'];
        $annonceur = $event['annonceur'];
        $photo_couverture = $event['photo_couverture'];
        $url = $event['url'];


        $date_calendrier[$count]['body'] .= "<a href=\"$url\" data-animate=\"fadeInUp\">";
        $date_calendrier[$count]['body'] .= "<div class=\"article\">";
        $date_calendrier[$count]['body'] .= "<div class=\"article_picture_frame\">";
        $date_calendrier[$count]['body'] .= "<img src=\"$photo_couverture\" class=\"img-responsive\" alt=\"$titre\">";
        $date_calendrier[$count]['body'] .= "</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"event_date single\"><div class=\"date\"><span class=\"day\">".$date_array[2]."</span><span class=\"month\">".$mois_short[(int)($date_array[1])]."</span></div></div>";
        $date_calendrier[$count]['body'] .= "<div class=\"article_title\">$titre</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"article_location\">$quartier, $ville</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"annonceur\">$annonceur</div>";
        $date_calendrier[$count]['body'] .= "</div></a>";
        

    }
    //Incrémente le compteur
    $count++;

}
echo json_encode($date_calendrier);