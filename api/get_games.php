<?php
include "connexion.php";
global $connexion;


$query = "SELECT jeu.id, jeu.titre, jeu.description, jeu.prix, jeu.date_sortie, jeu.image_path, jeu.note_id, jeu.age_id, console.label
FROM jeu
INNER JOIN game_console
ON jeu.id = game_console.jeu_id
INNER JOIN console
ON console.id = game_console.console_id";


if (isset($_GET['console'])){
    $query = $query." WHERE console.label='".$_GET['console']."'";
}


//$query2 = "SELECT console.label
//FROM console
//INNER JOIN game_console
//ON jeu.id = game_console.jeu_id
//INNER JOIN console
//ON console.id = game_console.console_id";


if(isset($_GET['id'])){
    $query = $query. " WHERE jeu.id = '".$_GET['id']."'";
}

if ($stmt = mysqli_prepare($connexion, $query)) {

    /* Exécution de la requête */
    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt,$id,$titre, $description, $prix, $date_sortie, $image_path, $note_id, $age_id, $console);
$array_result = [];
    while(mysqli_stmt_fetch($stmt)){

//        echo $titre .' '. $prix .  '<br>';
        $array_result[] =
        [   'id' => $id,
            'titre' => $titre,
            'description' => $description,
            'prix' => $prix,
            'date_sortie' => $date_sortie,
            'image_path' => $image_path,
            'note_id' => $note_id,
            'age_id' => $age_id,
            'console' => $console,
        ];
    }



    /* Fermeture du traitement */
    mysqli_stmt_close($stmt);


} else {

    echo"ça marche pas";
}


