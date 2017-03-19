<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonne Santé</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
      <header>
        <h1>Bonne Santé</h1>
                <nav>
			        <a class="home" href="#">Acceuil</a>
                    <?php

                    //  if(isAdmin()) :

                        ?>
			        <a class="admin" href="#">Admin</a>
                    <?php

                  //  endif;
                   ?>
			        <a class="login" href="signup.php">M'inscrire</a>
			        <a class="profil" href="#">Profil</a>
                    <a class="redact" href="#">Écrire un article</a>
                    <a class="create" href="#">Créer un évènement</a>
		        </nav>
               <!-- Saisie barre de recherche -->
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
                      <?
                      print_r($_SESSION);
                      ?>
               </div>
      </header>
      <?
    //   $message = $_SESSION["messages"];
    //   print_r($_SESSION);
// (!empty($message))? "$message":""
?>
      <div class="signup alert alert-success">
          <?= (!empty($_SESSION['messages'])) ? $_SESSION["messages"] : ""; ?>
      </div>
