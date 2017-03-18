<?php
require('sessions.php');
require('data.php');

function isAdmin(){
    $role = getRoleUser($_SESSION["user"]["id"]);
    if($role == "admin"){
        return $role;
    }
}
