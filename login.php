<?php

require('inc/setup.php');
if(isLoggedIn()){
    header("Location: index.php");
}

//Récupération des données pour remplire le modèle

//On vérifie que l'utilisateur à envoyer le formulaire
$error=[];

if(isset($_POST["email"])) {
    if(empty($_POST["email"])){
        $error['noEmail'] = "Vous avez oubliez d'indiquer votre email";
    }
    if(empty($_POST["password"])){
        $error['noPassword'] = "Vous avez oubliez d'indiquer votre mot de passe";
    }
    if(empty($error['noEmail'])){
        $user = getUserFromEmail($_POST["email"]);
        //Si userInfos n'est pas nul == on a récupérer des données == l'utilisateur existe
        if($user){
            if(!isset($error['noPassword'])){
                //Vérification du mot de passe avec la fonction php : password_verify (renvoi un booleen)
                //On compare le mot de passe recus avec le mot de passe stocké en bdd pour l'utilisateur
                $passwordIsValid = password_verify( $_POST["password"], $user["password"]);
                //Si le password est correct
                if($passwordIsValid) {
                        // 3. je stocke les infos de mon utilisateur en session
                        rememberUserData($user);
                        // => mon utilisateur est correctement authentifié
                        // <=> "connecté"
                        header("Location: index.php");
                    }else{
                    $error['password'] = "Mot de passe incorrect";
                }
            }
        }else{
            $error['email'] = "Aucun utilisateur avec cet email";
        }
    }
}


include("templates/header.php");
include("templates/login-form.php");
include("templates/footer.php");

?>
