
<?php
include ("include/header.php");
?>

<h1>Ajouter un jeu</h1>

<form action="api/add_game.php" method="post" class="mb-5">

    <?php if(isset($_GET['error'])){ ?>
        <p class="error"> <?php echo $_GET['error'] ?> </p>
    <?php }?>
    <div class="mb-3">
        <label for="titreDuJeu" class="form-label">Titre</label>
        <input type="text" class="form-control" name="titre" aria-describedby="emailHelp">
    </div>

    <div class="d-flex flex-column mb-3">
        <label for="descriptionDuJeu" class="form-label">Description</label>
        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
    </div>


    <div class="mb-3">
        <label for="prixDuJeu" class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix">
    </div>

    <div class="mb-3">
        <label for="dateJeu" class="form-label">Date de sortie du jeu</label>
        <input type="date" class="form-control" name="date">
    </div>

    <div class="mb-3">
        <label for="imgJeu" class="form-label">Image du jeu</label>
        <input type="text" class="form-control" name="img">
    </div>

    <div class="mb-3">
        <label for="note" class="form-label">note</label>
        <input type="text" class="form-control" name="note">
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Pegi</label>
        <input type="text" class="form-control" name="age">
    </div>

    <button type="submit" class="btn btn-dark">Submit</button>
</form>

<?php
include ("include/footer.php");