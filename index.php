<?php

require("inc/functions.php");

// récupérer liste des régimes

$diets = getAllDiets();

// récupérer liste des évènements

$events = getAllEvents();


include("templates/header.php");
include("templates/accueil.php");
include("templates/footer.php");

?>
