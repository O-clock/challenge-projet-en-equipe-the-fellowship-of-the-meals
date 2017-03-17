<?php

require('inc/setup.php');


//Récupération des données pour remplire le modèle

//On vérifie que l'utilisateur à envoyer le formulaire
if(isset($_POST["login"])) {
echo $_POST["login"];
}


include("templates/header.php");
include("templates/login-form.php");
include("templates/footer.php");

?>
