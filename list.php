<?php


//var_dump($array_result);
foreach ($array_result as $j){

    echo $j['titre'];
    echo $j['console'];
    echo "<img src ='images/games/".$j['image_path']."'>";


}