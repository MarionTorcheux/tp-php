<?php
include "connexion.php";
global $connexion;


$query = "SELECT * FROM jeu";

if (isset($_GET['console'])){
    $query = "SELECT jeu.*, console.label
FROM jeu
INNER JOIN game_console
ON jeu.id = game_console.jeu_id
INNER JOIN console
ON console.id = game_console.console_id
WHERE console.label='".$_GET['console']."'";
}

if ($stmt = mysqli_prepare($connexion, $query)) {

    /* Exécution de la requête */
    mysqli_stmt_execute($stmt);

    $get_result = mysqli_stmt_get_result($stmt);

    while($data = mysqli_fetch_assoc($get_result)){

        echo " <div class='card' style='width: 18rem;'>";
        echo " <img src='images/games/" . $data['image_path'] . "' class='card-img-top img-game'>";
        echo " <div class='card-body'>
             <h5 class='card-title'> " . $data['titre'] . "</h5>
            <p class='card-text'>" . ($data['prix'] / 100) . "€</p>
            <a href='detail.php?id=" . $data['id'] . "' class='btn btn-primary'>Voir détail</a>
           </div>
        </div>";

    }



    /* Fermeture du traitement */
    mysqli_stmt_close($stmt);


} else {

    echo"ça marche pas";
}


