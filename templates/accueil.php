
    <img src="" alt="">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>





    <main id="diets" class="container">
        <?php
    <ul>
 <?php foreach ($diets as $index => $diet) { ?>
  <li><a href=regimes.php?"<?php $diet['id'] ?>"><?php echo $diet['nomduregime'] ?></a><li>
<?php endforeach; ?>
</ul>
    }
