<?php
require('inc/setup.php');
//Si le formulaire est validé avec signup
// On traite les données soumises dans le form
$errors = [];
$message = "";
// => si le form a été soumis
if(isset($_POST["signup"])) {
    // valider les données (contraintes)
    // champs doivent pas être vides
    if($_POST["firstName"] == "") {
        $errors[] = "Saisissez un prénom";
    }
    if($_POST["lastName"] == "") {
        $errors[] = "Saisissez un nom de famille";
    }
    if($_POST["birth_date"] == "") {
        $errors[] = "Saisissez une date valide";
    }
    // l'email doit être valide
    if(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Saisissez un email valide";
    }
    // password: 8 caractères minimum
    if(strlen($_POST["password"]) < 8) {
        $errors[] = "MDP sécurisé = 8 caractères minimum!";
    }
    // password == confirm
    if($_POST["password"] != $_POST["confirmPassword"]) {
        $errors[] = "MDP incohérents vérifiez votre saisie.";
    }

    // si la saisie est valide
    if(empty($errors)) {
        // on hache le mdp
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $infoMember = [
            "firstName" => trim($_POST["firstName"]),
            "lastName" => trim($_POST["lastName"]),
            "email" => trim($_POST["email"]),
            "birth_date" =>date($_POST["birth_date"]),
            "address" => trim($_POST["address"]),
            "zipcode" => trim($_POST["zipcode"]),
            "city" => trim($_POST["city"]),
            "phone"=>trim($_POST["phone"]),
            "hash" => $hash
        ];

        // Traitement des inputs vides en remplaçant par NULL (Pas réussi avec une fonction)
        // isNull($infoMember["zipcode"]);

        if ($infoMember["address"] == "") {
          $infoMember["address"] = "NULL";
        }
        if ($infoMember["zipcode"] == "") {
          $infoMember["zipcode"] = "NULL";
        }
        if ($infoMember["city"] == "") {
          $infoMember["city"] = "NULL";
        }
        if ($infoMember["phone"] == "") {
          $infoMember["phone"] = "NULL";
        }
// $infoMember["address"];

        // print_r($infoMember);
        // $result="OK";
        $result = saveInfoMember($infoMember);

        if($result) {

            // echo "New record created successfully. Last inserted ID is: " . $last_id;
            // $_SESSION["messages"] = "Vous êtes à présent inscrit !";
            // print_r($_SESSION);
            // redirection
            header('Location: index.php');
        }
        else {
            echo "Erreur lors de l'inscription";
        }
    }
}


include("templates/header.php");
include("templates/signup-form.php");
include("templates/footer.php");
