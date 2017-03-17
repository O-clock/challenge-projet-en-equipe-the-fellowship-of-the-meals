<?php

// activer les sessions
session_start();

function rememberUserData($user){
    $_SESSION["user"] = [
        "id" => $user["id"],
        "first_name" => $user["first_name"],
        "last_name" => $user["last_name"],
    ];
}
