

let addButton = document.getElementById("add-button")

addButton.addEventListener("click",function(e){

    let mdp = prompt("Mot de passe pour ajouter un jeu : ")
    if (mdp == "admin"){
        e.preventDefault();
        document.location.href="./form_add_game.php";

    } else {
        e.preventDefault();
        document.location.href="index.php";

    }
})