<?php

include ("include/header.php");
include('api/get_games.php');



foreach ($array_result as $j) {

    $date = strtotime($j['date_sortie']);
    $date2 = date('d/m/Y', $date);




    echo "<div class='card mb-3' style='max-width: 850px'>
  <div class='row g-0'>
    <div class='col-md-4'>";
    echo " <img src='images/games/" . $j['image_path'] . "' class='img-fluid rounded-start'>";
    echo " </div>
    <div class='col-md-8'>
      <div class='card-body'>";
    echo " <h5 class='card-title text-primary'>" . $j['titre'] . "</h5>";
    echo "  <p class='card-text'><span class='font-weight-bold'>Synopsis : </span><small class='text-muted'>".$j['description']."</small></p>
        <p class='card-text'><small class='text-muted'>Date de sortie : <span class='text-primary'>".$date2." </span> </small></p>
      </div>
    </div>
  </div>
</div>";
}

include ("include/footer.php");
