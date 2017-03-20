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



    function saveInfoMember($infoMember) {
    global $db_connect;

    // On regarde si c'est un admin ou un client
    // if (!isAdmin()) {
    //     $clientGroupId = getGroupId("client");
    // }else {
    //     $clientGroupId = getGroupId("admin");
    // }

// Requête OK sur phpMyAdmin INSERT INTO users (first_name, last_name, email, password, birth_date, address, zipcode, city)
            // VALUES ('Séverine', 'Coyer', 'secoy@live.com' , '$2y$10$yIGksk3hzz7xGHw2lId6Ze2WBtO36B3aw80t.mVoa4Cvx//JXerNG', '1980-06-10',''  , '' , '' )


    // on enregistre les données en BD table user
    $sql = 'INSERT INTO users (first_name, last_name, email, password, birth_date, address, zipcode, city, phone)
            VALUES (:first_name, :last_name, :email, :password, :birth_date, :address, :zipcode, :city, :phone)';

    $query = $db_connect->prepare($sql);
    $query->bindValue(':first_name', $infoMember["firstName"]);
    $query->bindValue(':last_name', $infoMember["lastName"]);
    $query->bindValue(':email', $infoMember["email"]);
    $query->bindValue(':password', $infoMember["hash"]);
    $query->bindValue(':birth_date', $infoMember["birth_date"]);
    $query->bindValue(':address', $infoMember["address"]);
    $query->bindValue(':zipcode', $infoMember["zipcode"]);
    $query->bindValue(':city', $infoMember["city"]);
    $query->bindValue(':phone', $infoMember["phone"]);
    $query->execute();

    $last_id = $db_connect->lastInsertId();
    // echo "New record created successfully. Last inserted ID is: " . $last_id;
        //On récupère l'id qui vient d'être enregistré et on enregistre le rôle
    $sqlRole = 'INSERT INTO role_user (id_role, id_user) VALUES (3,:last_id)';
    $query2 = $db_connect->prepare($sqlRole);
    $query2->bindValue(':last_id', $last_id);
    //  et l'id dans table role_user id_role par défaut id 3 (member)
    $result = $query2->execute();
    echo $result;
    return $result;

};

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

function getRoleUser($userId){
    global $db_connect;

    $sql = 'SELECT name FROM roles inner join role_user WHERE id_user = :id_user';
    $query = $db_connect->prepare($sql);
    $query->bindValue(':id_user', $userId);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result["name"];
}
