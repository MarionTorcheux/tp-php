<?php
// appel des infos de connexion + global $connexion
include "connexion.php";
global $connexion;
// fonction qui affiche la liste des jeux en html
include "./functions/list.php";


// requête de base afficher tous les jeux /4
$query = "SELECT jeu.* FROM jeu LIMIT 0,4 ";

// si on reçoit un get_index on remplace le limit de la requête
if (isset($_GET['index']) && $_GET['index'] !== 0){
    $index = $_GET['index'];
    $query = "SELECT jeu.* FROM jeu LIMIT $index,4 ";
}

// si on reçoit un get_console on ajoute la restriction sur ce dernier
if (isset($_GET['console'])){
    $query ="SELECT jeu.* FROM jeu INNER JOIN game_console
ON jeu.id = game_console.jeu_id
INNER JOIN console
ON console.id = game_console.console_id
WHERE console.label='".$_GET['console']."'";
}

// si on reçoit un get_age (du menu tri déroulant) on ajoute la restriction dans le where
if (isset($_GET['age'])){
    $query = "SELECT jeu.* FROM jeu INNER JOIN restriction_age ON restriction_age.id = jeu.age_id
    WHERE restriction_age.label='".$_GET['age']."'";
}


// autres tris
if (isset($_GET['tri'])) {
    if ($_GET['tri'] == 'prixasc') {
        $query = "SELECT jeu.* FROM jeu ORDER BY jeu.prix";
    }if ($_GET['tri'] == 'prixdsc') {
        $query = "SELECT jeu.* FROM jeu ORDER BY jeu.prix DESC";
    }if ($_GET['tri'] == 'notePresseAsc') {
        $query ="SELECT jeu.* FROM jeu INNER JOIN note ON note.id = jeu.note_id ORDER BY note.note_media DESC";
    }if ($_GET['tri'] == 'noteUserAsc') {
        $query = "SELECT jeu.* FROM jeu INNER JOIN note ON note.id = jeu.note_id ORDER BY note.note_utilisateur DESC";
    }

}

// traitements requête
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


