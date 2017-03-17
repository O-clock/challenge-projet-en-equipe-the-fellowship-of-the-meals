<?php

require('inc/setup.php');


//Récupération des données pour remplire le modèle
getAllDiets();


include("templates/header.php");
include("templates/login-form.php");
include("templates/footer.php");

?>
