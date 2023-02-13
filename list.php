<?php

foreach ($array_result as $j){
echo " <div class='card' style='width: 18rem;'>";
   echo " <img src='images/games/".$j['image_path']."' class='card-img-top img-game'>" ;
   echo " <div class='card-body'>
             <h5 class='card-title'> ".$j['titre']."</h5>
            <p class='card-text'>".($j['prix']/100)."€</p>
            <a href='detail.php?id=".$j['id']."' class='btn btn-primary'>Voir détail</a>
           </div>
        </div>";



}