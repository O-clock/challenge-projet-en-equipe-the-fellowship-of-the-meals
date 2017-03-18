<?php

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

/*** Uitlisateurs ***/

//Récupération des informations d'un utilisateur à partir de son email (test en même temps si un utilisateur avec cet email existe)
function getUserFromEmail($email) {
	global $db_connect;

    $sql = 'SELECT * FROM users WHERE email = :email';
	$query = $db_connect->prepare($sql);
	$query->bindValue(':email', $email);
	$query->execute();

	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;
}
