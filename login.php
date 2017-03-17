<?php

require('inc/setup.php');
echo password_hash("meal", PASSWORD_DEFAULT);

//Récupération des données pour remplire le modèle

//On vérifie que l'utilisateur à envoyer le formulaire

if(isset($_POST["email"])) {
    echo $_POST["email"];
    $user = getUserFromEmail($_POST["email"]);
    //Si userInfos n'est pas nul == on a récupérer des données == l'utilisateur existe
    if($user){
        echo "utilisateur dans la bdd";
        //Vérification du mot de passe avec la fonction php : password_verify (renvoi un booleen)
        //On compare le mot de passe recus avec le mot de passe stocké en bdd pour l'utilisateur
        if($_POST["password"]){
            $passwordIsValid = password_verify( $_POST["password"], $user["password"]);
            echo "info recup";
            //Si le password est correct
            if($passwordIsValid) {
    	       // 3. je stocke les infos de mon utilisateur en session
               rememberUserData($user);
               // => mon utilisateur est correctement authentifié
               // <=> "connecté"
               header("Location: index.php");
            }
        }else{
            //echo "pas de mdp";
        }
    }
}


include("templates/header.php");
include("templates/login-form.php");
include("templates/footer.php");

?>
