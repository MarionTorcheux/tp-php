<?php

include ("include/header.php");

?> <div class='d-flex flex-wrap contain-cards justify-content-center '>
<?php
include('api/get_games.php');
include('list.php'); ?>

</div>

<?php
include ("include/footer.php");