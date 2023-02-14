<?php
require "api/get_all_games.php";
function affiche_list()
{

    echo " <div class='card' style='width: 18rem;'>";
    echo " <img src='images/games/" . $data['image_path'] . "' class='card-img-top img-game'>";
    echo " <div class='card-body'>
             <h5 class='card-title'> " . $data['titre'] . "</h5>
            <p class='card-text'>" . ($data['prix'] / 100) . "€</p>
            <a href='detail.php?id=" . $data['id'] . "' class='btn btn-primary'>Voir détail</a>
           </div>
        </div>";



}