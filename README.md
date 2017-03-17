##Connection à la base de donnée
1. Créer un fichier .gitignore à la racine du projet
    Avec comme texte :
    inc/config.php

2. Dans le dossier INC : Créer le fichier config.php
    Avec comme texte :
    <?php

    $host = "localhost";
    $user = "nomDeLUtilisateurDeLaBaseDeDonnée";
    $pass = "MotDePasseDeLaBaseDeDonnée";
    $dbname = "NomDeLaBaseDeDonnée";
