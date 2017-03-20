<?php

require('inc/setup.php');


//Récupération des données pour remplire le modèle

// récupérer dans form création évènements
$events = addEvents(); //On va utiliser la variable $diets dans le modèle (templates/acceuil.php)



include("templates/header.php");
include("templates/accueil.php");
include("templates/footer.php");
?>
