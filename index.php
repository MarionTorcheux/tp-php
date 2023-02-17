<?php
    // appel header + barre de filtres
    include ("include/header.php");
    include("include/filter_nav.php");
?>
<main>
<!--    div qui contient toutes les cartes-->
    <div class='d-flex flex-wrap contain-cards justify-content-center '>
<!--        appel de la fonction qui met en forme les cartes-->
        <?php include('api/get_all_games.php');?>
    </div>

<!--  nav pagination-->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="index.php?index=0">1</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=4">2</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=8">3</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=12">4</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=16">5</a></li>
        </ul>
    </nav>

</main>

<?php  include ("include/footer.php");