
<main id="acceuil" class="container">
    <img src="images/photo-acceuil-SYDJ.jpg" alt="regime">
    <p class="intro-acceuil">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
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

    <ul>
        <?php foreach ($diets as $index => $diet) { ?>
        <li>
            <h2><?php echo $diet["title"]?></h2>
            <p><?php echo $diet["short_desc"]?></p>
            <img src="<?php echo $diet["thumbnail"]?>" alt="<?php echo $diet["title"]?>">
            <div class="infos_diet">
                <p class="">Nombre de places totale : <?php echo $diet["places_nb"] ?></p>
            </div>
        </li>
        endforeach;
    <?php } ?>

    </ul>
    <ul>
        <?php foreach ($events as $index => $event) { ?>
        <li>
            <h2><?php echo $event["title"]?></h2>
            <p><?php echo $event["short_desc"]?></p>
            <img src="<?php echo $event["thumbnail"]?>" alt="<?php echo $event["title"]?>">
            <div class="infos_event">
                <p class="">Nombre de places totale : <?php echo $event["places_nb"] ?></p>
            </div>
        </li>
        endforeach;
        <?php } ?>
    </ul>
</main>
