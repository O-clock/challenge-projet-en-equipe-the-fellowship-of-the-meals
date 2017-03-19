<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonne Santé</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
      <header class="container">
        <h1>Bonne Santé</h1>
<<<<<<< HEAD
                <nav class="navbar navbar-default">
			        <a class="home" href="#">Acceuil</a>


			        <a class="admin" href="#">Admin</a>

			        <a class="login" href="#">M'inscrire</a>
			        <a class="profil" href="#">Profil</a>

                    <a class="admin" href="#">Admin</a>
                    <a class="admin" href="login.php">Connexion</a>
                    <a class="login" href="#">M'inscrire</a>

			              <a class="profil" href="#">Profil</a>


			        <a class="profil" href="#">Profil</a>

                    <a class="redact" href="#">Écrire un article</a>
                    <a class="create" href="#">Créer un évènement</a>
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
               <!-- Saisie barre de recherche -->
=======
          <nav class="navbar navbar-default">
            <a class="home" href="index.php">Acceuil</a>
            <?php if(!isLoggedIn()) : ?>
            <a class="admin" href="login.php">Connexion</a>
            <a class="login" href="#">M'inscrire</a>
            <?php endif; ?>
            <?php if(isLoggedIn()) : ?>
            <a class="profil" href="#">Profil</a>
            <a class="redact" href="#">Écrire un article</a>
            <a class="create" href="#">Créer un évènement</a>
            <?php if(isAdmin()) : ?>
            <a class="admin" href="#">Admin</a>
            <?php endif; ?>
            <a class="create" href="logOut.php">Déconnexion</a>
            <?php endif; ?>
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
<!-- Saisie barre de recherche -->
>>>>>>> e7dc7fb56a4a4f8ca4ae0bb35e90179c8574d1bc

</header>
