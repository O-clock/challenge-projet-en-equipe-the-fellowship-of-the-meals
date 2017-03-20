<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <title>Bonne Santé</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
      <header class="container">

	<nav class="navbar navbar-default">
    <div id="menu">
      <img href="index.php" class="site-logo" src="images/logo-bs.png" alt="Logo Bonne Santé">
    <ul>
      <li><a class="home" href="index.php">Acceuil</a></li>
      <?php if(!isLoggedIn()) : ?>
      <li><a class="login" href="login.php">Connexion</a></li>
      <li><a class="login" href="#">M'inscrire</a></li>
      <?php endif; ?>
      <?php if(isLoggedIn()) : ?>
      <li><a class="profil" href="#">Profil</a></li>
      <li><a class="write" href="#">Ecrire un article</a></li>
      <li><a class="create" href="#">Créer un évènement</a></li>
      <?php if(isAdmin()) : ?>
      <li><a class="admin" href="#">Admin</a>
        <ul>
          <li><a href="#">Acceuil Admin</a></li>
          <li><a href="#">Créer une communauté</a></li>
          <li><a href="#">Gestion des utilisateurs</a></li>
          <li><a href="#">Valider des articles</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <li><a class="login" href="logout.php">Déconnexion</a></li>
      <?php endif; ?>
    </ul>
	<div id="search">

              <form action="" id="form-search" method="GET">
                <input class="champ"
                name="id"
                type="text"
                placeholder="Rechercher un évènement"
                value =""
                required />
                <button id="acces-send">Rechercher</button>
              </form>
            </div>

          </nav>
</header>
