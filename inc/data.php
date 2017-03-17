<?php

$host = "localhost";
$user = "meal";
$pass = "meal";
$dbname = "meal";

try {
	$db_connect = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8",$user,$pass);
}
catch(PDOException $e) {
	die('Erreur : '.$e->getMessage());
}

/* fonction pour afficher les différents régimes */

function getAllDiets() {
    global $db_connect;

    $sql = "SELECT * FROM diets";
    $query = $db_connect->query($sql);

    $diets = $query->fetchAll(PDO::FETCH_ASSOC);
    return $diets;
}

/*fonction pour afficher les différents évènements */

function getAllEvents() {
    global $db_connect;

    $sql ="SELECT * FROM events";
    $query = $db_connect->query($sql);
    $events = $query->fetchAll(PDO::FETCH_ASSOC);
    return $events;
}
