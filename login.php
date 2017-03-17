<?php

require('inc/setup.php');


//Récupération des données pour remplire le modèle

//On vérifie que l'utilisateur à envoyer le formulaire

if(isset($_POST["email"])) {
    echo $_POST["email"];
    $userInfos = getUserFromEmail($_POST["email"]);
    //Si userInfos n'est pas nul == on a récupérer des données == l'utilisateur existe
    if($userInfos){
        echo "utilisateur dans la bdd";
        //Vérification du mot de passe avec la fonction php : password_verify (renvoi un booleen)
        //On compare le mot de passe recus avec le mot de passe stocké en bdd pour l'utilisateur
        $passwordIsValid = password_verify( $_POST["password"], $user["password"]);
    }
}


include("templates/header.php");
include("templates/login-form.php");
include("templates/footer.php");

?>
