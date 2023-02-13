<?php

$servername = 'database'; // mettre localhost pour travailler de la maison
$username = 'admin';
$password = 'admin';
$bdd ='video-games';

//On établit la connexion
$connexion = mysqli_connect($servername, $username, $password, $bdd);

//On vérifie la connexion
if(!$connexion){
    die('Erreur : ' .mysqli_connect_error());
}
