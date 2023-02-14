<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>tp-php-video-games</title>
</head>
<body>
<div class="main-content container">


<header>
    <div class="logo"></div>


    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item" >
                        <a class=" btn btn-primary"  href="./index.php">Tous les jeux</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle btn btn-primary"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Par console
                        </a>


                        <ul class="dropdown-menu bg-primary">

                            <?php require "./api/get_nav.php";
                            get_nav();
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>







