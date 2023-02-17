<!--Nav des filtres-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav menu-filtre">
                    <li class="nav-item" >
                        <a class="btn btn-outline-secondary btn-sm"  href="./index.php?tri=prixasc">prix asc</a>
                    </li>

                    <li class="nav-item" >
                        <a class="btn btn-outline-secondary btn-sm "  href="./index.php?tri=prixdsc">prix dsc</a>
                    </li>

                    <li class="nav-item" >
                        <a class="btn btn-outline-secondary btn-sm"  href="./index.php?tri=notePresseAsc">note presse asc</a>
                    </li>

                    <li class="nav-item" >
                        <a class="btn btn-outline-secondary btn-sm"  href="./index.php?tri=noteUserAsc">note user asc</a>
                    </li>

                    <li class="nav-item dropdown">
<!--                        bouton déroulant pour filtre par age-->
                        <a class="dropdown-toggle btn btn-outline-secondary btn-sm"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Par age </a>

                        <ul class="dropdown-menu bg-outline-secondary">
                            <?php require "api/get_filter_by_age.php";
                            get_filter_by_age();?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>