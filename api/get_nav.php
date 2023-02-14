<?php

include "connexion.php";

function get_nav(){
    global $connexion;

    $query = "SELECT COUNT(*) AS nbGame, console.label FROM game_console 
            INNER JOIN console ON game_console.console_id = console.id 
            GROUP BY console_id";

        $stmt = mysqli_prepare($connexion, $query);
        /* Exécution de la requête */
        mysqli_stmt_execute($stmt);
        $get_result = mysqli_stmt_get_result($stmt);
        while ($data = mysqli_fetch_assoc($get_result)) {

        echo"<li><a class='dropdown-item text-white' href='index.php?console=".$data['label']."'>".$data['label']." (".$data['nbGame'].")</a></li>";

        }

        /* Fermeture du traitement */
        mysqli_stmt_close($stmt);

}