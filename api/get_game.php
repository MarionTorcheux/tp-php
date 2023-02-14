<?php
include "connexion.php";
global $connexion;

$query = "SELECT jeu.*, note.*, restriction_age.label, restriction_age.image_path AS img
FROM jeu
INNER JOIN note ON jeu.note_id = note.id
INNER JOIN restriction_age ON jeu.age_id = restriction_age.id
WHERE jeu.id = '".$_GET['id']."'";

$query_consoles = " SELECT console.label FROM jeu
 INNER JOIN game_console
ON jeu.id = game_console.jeu_id
INNER JOIN console
ON console.id = game_console.console_id
WHERE jeu.id = '".$_GET['id']."'";

$stmt_consoles = mysqli_prepare($connexion, $query_consoles);
mysqli_stmt_execute($stmt_consoles);
$get_result_consoles = mysqli_stmt_get_result($stmt_consoles);

$stmt = mysqli_prepare($connexion, $query);
/* Exécution de la requête */
mysqli_stmt_execute($stmt);
$get_result = mysqli_stmt_get_result($stmt);
while($data = mysqli_fetch_assoc($get_result)){



    $date = strtotime($data['date_sortie']);
    $date2 = date('d/m/Y', $date);

    echo "<div class='card mb-3' style='max-width: 850px'>
  <div class='row g-0'>
    <div class='col-md-4'>";
    echo " <img src='images/games/" . $data['image_path'] . "' class='img-fluid rounded-start'>";
    echo " </div>
    <div class='col-md-8'>
      <div class='card-body'>";
    echo " <h5 class='card-title text-primary'>" . $data['titre'] . "</h5>";
    while($data_consoles = mysqli_fetch_assoc($get_result_consoles)){
        echo "<p class='badge text-bg-primary'> ".$data_consoles['label']."</p>";
    }

    echo "  <p class='card-text'><span class='font-weight-bold'>Synopsis : </span><small class='text-muted'>".$data['description']."</small></p>
        <p class='card-text'><small class='text-muted'>Date de sortie : <span class='text-primary'>".$date2." </span> </small></p>
        <p class='card-text'> <small class='text-muted'><img class='img-pegi' src='images/pegi/" .$data['img'] ."'> age : ".$data['label']." + </small></p>
        <p class='card-text'> <small class='text-muted'> <i class='bi bi-star-fill' style='color:orange'></i> Avis presse <span class='text-primary'> ".$data['note_media']."</span>/20
        <i class='bi bi-star-fill' style='color:orange' ></i> Avis utilisateur  <span class='text-primary'>  ".$data['note_utilisateur']."</span>/20 </small>  </p>
      </div>
    </div>
  </div>
</div>";
}
