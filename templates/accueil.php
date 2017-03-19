<main id="acceuil" class="container">
    <img src="images/photo-acceuil-SYDJ.jpg" alt="regime">
    <div class="intro-acceuil">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <button type="button" name="connexion-facebook">Connectez vous avec <i class="fa fa-facebook-square" aria-hidden="true"></i></button>
    </div>


    <!-- Bouton Connection à Facebook
    <!--<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>-->

    <!--<ul class="diets">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <ul class="events">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>-->
</main>






<main id="diets" class="container">
    <?php
    foreach ($diets as $index => $diet) {
        $link = "diets.php?index";
        # code...
    }
    ?>


</main>

<main id="events" class="container">
    <?php
    foreach ($diets as $index => $diet) {
        $link = "diets.php?index";
        # code...
    }?>



</main>
