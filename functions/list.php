<?php

// pour mettre en forme le résultat de la requête
function affiche_list($data)
{
    echo "<div class='card' style='width: 18rem;'>
            <img src='images/games/" . $data['image_path'] . "' class='card-img-top img-game'>
                <div class='card-body'>
                    <h5 class='card-title'> " . $data['titre'] . "</h5>
                    <p class='card-text'>". ($data['prix'] == 0 ? "GRATUIT" : ($data['prix'] / 100)."€")." </p>
                    <a href='/detail.php?id=" . $data['id'] . "' class='btn btn-primary'>Voir détail</a>
                </div>
            </div>";

}