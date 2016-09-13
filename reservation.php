<?php
require_once('views/page_top.php');
require_once(dirname(__FILE__) . '/forfaits.php');
var_dump($_GET);
/*$forfait_list = get_forfaits();
if (array_key_exists('forfait', $_GET) && in_array($_GET['forfait'], get_forfaits())) {
    $categorie_page = $_GET['forfait'];
}*/
$forfaits_data =get_forfaits();
/*print_r($forfaits_data);*/
if (array_key_exists('forfait_id', $_GET)){
        $id = $_GET['forfait_id'];
    $forfait_id = $_GET['forfait_id'];
}
$forfait = $forfaits_data[$forfait_id];
var_dump($forfait);
?>

<form class="form-style-9">
    <div>
        <p>Forfait Choisi</p>
        <h3><?= $forfait['categorie'] ?></h3>
        <p><?= $forfait['nom'] ?></p>
        <img  class="img-rounded" src="<?=IMG_PATH. $forfait['photo1'] ?>" alt=""/>
        <p>Place Disponible :   <?= $forfait['places_dispo'] ?></p>
        <p>Nombre D'animaux :  <?=$forfait['nbr_max_animaux'] ?></p>
        <p>Prix pour les animaux:   <?=$forfait['prix_animal']?></p>



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
            <p>Animaux</p>
            <select name="nb_animaux" form="animaux_form">
                <option>1</option>
                <option>2</option>
                <option>3</option>

            </select>
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