<?php

require_once(dirname(__FILE__) . '/forfaits.php');
/*var_dump($_GET);*/
/*$forfait_list = get_forfaits();
if (array_key_exists('forfait', $_GET) && in_array($_GET['forfait'], get_forfaits())) {
    $categorie_page = $_GET['forfait'];
}*/
$forfaits_data =get_forfaits();
/*print_r($forfaits_data);*/
if (array_key_exists('forfait_id', $_GET)){
        $id = $_GET['forfait_id'];
    $forfait_id = $_GET['forfait_id'];
}else header('Location: catalog.php');
$forfait = $forfaits_data[$forfait_id];
/*var_dump($forfait);*/
?>
<?php
require_once('views/page_top.php');
?>

<form class="form-style-9">
    <div>
        <p class="for">Forfait Choisi</p>
        <h3 class="jumbotron text-center"><?= $forfait['categorie'] ?></h3>
        <p><?= $forfait['nom'] ?></p>
        <img   class="img-thumbnail" src="<?=IMG_PATH. $forfait['photo1'] ?>" alt=""/>
        <p class="for">Place Disponible :   <?= $forfait['places_dispo'] ?></p>
        <p class="for">Nombre D'animaux :  <?=$forfait['nbr_max_animaux'] ?></p>
        <p class="for">Prix pour les animaux:   <?=$forfait['prix_animal']?></p>



    </div>
    <ul>
        <li>
            <input type="text" name="field1" class="field-style field-split align-left" placeholder="Name" />
            <input type="email" name="field2" class="field-style field-split align-right" placeholder="Email" />

        </li>
        <li>
            <input type="text" name="field3" class="field-style field-split align-left" placeholder="Phone" />
            <input type="url" name="field4" class="field-style field-split align-right" placeholder="Website" />
        </li>
        <li>
            <textarea name="field5" class="field-style" placeholder="Message"></textarea>
        </li>
    </ul>
    <div class="input-group date">
        <p>Date: <input type="text" id="datepicker"></p>
    </div>
    <ul>
        <li>
            <button>Réserver</button>
        </li>
    </ul>

</form>
<script src="script/main.js"></script>