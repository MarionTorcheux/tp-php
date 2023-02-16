<?php
include "connexion.php";
global $connexion;
include "./functions/list.php";



$query = "SELECT jeu.* FROM jeu";

if (isset($_GET['console'])){
    $query = $query." INNER JOIN game_console
ON jeu.id = game_console.jeu_id
INNER JOIN console
ON console.id = game_console.console_id
WHERE console.label='".$_GET['console']."'";
}

if (isset($_GET['age'])){
    $query = $query." INNER JOIN restriction_age ON restriction_age.id = jeu.age_id
    WHERE restriction_age.label='".$_GET['age']."'";
}



if (isset($_GET['tri'])) {
    if ($_GET['tri'] == 'prixasc') {
        $query = $query . " ORDER BY jeu.prix";
    }if ($_GET['tri'] == 'prixdsc') {
        $query = $query . " ORDER BY jeu.prix DESC";
    }if ($_GET['tri'] == 'notePresseAsc') {
        $query = $query . " INNER JOIN note ON note.id = jeu.note_id ORDER BY note.note_media DESC";
    }if ($_GET['tri'] == 'noteUserAsc') {
        $query = $query . " INNER JOIN note ON note.id = jeu.note_id ORDER BY note.note_utilisateur DESC";
    }

}



if ($stmt = mysqli_prepare($connexion, $query)) {

    /* Exécution de la requête */
    mysqli_stmt_execute($stmt);

    $get_result = mysqli_stmt_get_result($stmt);

    while($data = mysqli_fetch_assoc($get_result)){

        affiche_list($data);

    }



    /* Fermeture du traitement */
    mysqli_stmt_close($stmt);


} else {

    echo"ça marche pas";
}


