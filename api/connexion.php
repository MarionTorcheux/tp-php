<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$bdd ='video-games';

//On établit la connexion
$connexion = mysqli_connect($servername, $username, $password, $bdd);

//On vérifie la connexion
if(!$connexion){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion to bdd ok !';