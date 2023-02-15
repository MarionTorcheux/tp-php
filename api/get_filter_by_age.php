<?php

include "connexion.php";

function get_filter_by_age(){
    global $connexion;

    $query = "SELECT * FROM restriction_age";

    $stmt = mysqli_prepare($connexion, $query);
    /* Exécution de la requête */
    mysqli_stmt_execute($stmt);
    $get_result = mysqli_stmt_get_result($stmt);
    while ($data = mysqli_fetch_assoc($get_result)) {
        echo "<li><a class='dropdown-item text-secondary' href='index.php?age=".$data['label']."'>PEGI ".$data['label']." <img class='img-pegi-nav' src='./images/pegi/".$data['image_path']."'></a></li>";
    }

    /* Fermeture du traitement */
    mysqli_stmt_close($stmt);

}