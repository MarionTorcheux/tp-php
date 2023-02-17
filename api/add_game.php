<?php
include('connexion.php');
global $connexion;


// on vérifie qu'on a toutes les données

if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['date']) && isset($_POST['img'])){

    // création de la requete préparée
    $query = "INSERT INTO jeu (`titre`,`description`,`prix`, `date_sortie`, `image_path`, `note_id`, `age_id` ) VALUES (?,?,?,?,?,?,?)";

    // variables
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $note = $_POST['note'];
    $age = $_POST['age'];

    // gérer les erreurs
    if(empty($titre)){
        header("Location: ../form_add_game.php?error=Veuillez saisir le titre");
        exit();
    } else if (empty($description)){
        header("Location: ../form_add_game.php?error=Veuillez saisir la description");
        exit();
    } else{

        // on prépare la requête
        if($stmt = mysqli_prepare($connexion,$query)){
            mysqli_stmt_bind_param(
                $stmt,
                'ssissii',
                $titre,
                $description,
                $prix,
                $date,
                $img,
                $note,
                $age
            );

            // retour d'erreur si le bind ne fonctionne pas
            if(!mysqli_stmt_execute($stmt)){
                header("Location: ../form_add_game.php?error=ça marche pas");
                var_dump($stmt);
                exit();
            }

            header("Location: ../index.php");
            exit();

        } else {
            header("Location: ../form_add_game?error=Erreur technique");
            exit();
        }
    }

}
mysqli_close($connexion);