<?php

include ("include/header.php");
include("include/filter_nav.php");

?> <div class='d-flex flex-wrap contain-cards justify-content-center '>
<?php
include('api/get_all_games.php'); ?>

</div>


    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="index.php?index=">Previous</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=0">1</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=4">2</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=8">3</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=12">3</a></li>
            <li class="page-item"><a class="page-link" href="index.php?index=''">Next</a></li>
        </ul>
    </nav>

<?php
include ("include/footer.php");