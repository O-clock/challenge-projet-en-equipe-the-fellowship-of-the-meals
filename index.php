<?php

require('inc/setup.php');


//Récupération des données pour remplire le modèle
// récupérer liste des régimes
$diets=getAllDiets(); //On va utiliser la variable $diets dans le modèle (templates/acceuil.php)

// récupérer liste des évènements
$events = getAllEvents();


include("templates/header.php");
include("templates/accueil.php");
include("templates/footer.php");
session_destroy();
?>
