<?php
require_once('views/page_top.php');

/*define('IMG_PATH', 'images/images-modal/');*/
require_once(dirname(__FILE__) . '/forfaits.php');
$forfaits_data = get_forfaits();
/*var_dump($forfaits_data);*/
?>
<div id="slider">

    <!-- Sildes -->
    <img id="one" src="images/canada.jpg" alt="ca">
    <img id="two" src="images/Rome-wallpaper-241.jpg" alt="rome">
    <img id="three" src="images/new_york.jpg" alt="new">


    <!-- Links for the slides! -->
    <ul>
        <li>
            <a href="#one"></a>
        </li>
        <li>
            <a href="#two"></a>
        </li>
        <li>
            <a href="#three"></a>
        </li>

    </ul>
</div>


<div class="categorie">
    <div class="promo">
        <h6 class="jumbotron text-center">En Promotion</h6>
        <h4 class="jumbotron text-center">Catégorie</h4>
        <p class="cat"><?= $forfaits_data['05']['nom'] ?></p>
        <p class="cat"><?= $forfaits_data['05']['categorie'] ?></p>
        <img class="img-rounded" src="<?= IMG_PATH . $forfaits_data['05']['photo1'] ?>" alt="croisière"/>
        <p class="debt"><?= $forfaits_data['05']['debut_saison'] ?></p>
        <p class="fin"><?= $forfaits_data['05']['fin_saison'] ?></p>
        <p class="cat"><?= $forfaits_data['05']['prix'] ?></p>
    </div>

    <div class="promo">
        <p class="cat"><?= $forfaits_data['18']['nom'] ?></p>
        <p class="cat"><?= $forfaits_data['18']['categorie'] ?></p>
        <img class="img-rounded" src="<?= IMG_PATH . $forfaits_data['18']['photo1'] ?>" alt="croisière"/>
        <p class="debt"><?= $forfaits_data['18']['debut_saison'] ?></p>
        <p class="fin"><?= $forfaits_data['18']['fin_saison'] ?></p>
        <p class="cat"><?= $forfaits_data['18']['prix'] ?></p>
    </div>

    <div class="promo">
        <p class="cat"><?= $forfaits_data['23']['categorie'] ?></p>
        <img class="img-rounded" src="<?= IMG_PATH . $forfaits_data['23']['photo2'] ?>" alt="croisière"/>
        <p class="debt"><?= $forfaits_data['23']['debut_saison'] ?></p>
        <p class="fin"><?= $forfaits_data['23']['fin_saison'] ?></p>
        <p class="cat"><?= $forfaits_data['23']['prix'] ?></p>
    </div>
</div>

