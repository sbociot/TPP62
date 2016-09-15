<?php

require_once(dirname(__FILE__) . '/forfaits.php');
/*var_dump($_GET);*/
/*$forfait_list = get_forfaits();
if (array_key_exists('forfait', $_GET) && in_array($_GET['forfait'], get_forfaits())) {
    $categorie_page = $_GET['forfait'];
}*/
$forfaits_data = get_forfaits();
/*print_r($forfaits_data);*/
if (array_key_exists('forfait_id', $_GET)) {
    $id = $_GET['forfait_id'];
    $forfait_id = $_GET['forfait_id'];
} else header('Location: catalog.php');
$forfait = $forfaits_data[$forfait_id];
/*var_dump($forfait);*/
$nom_val = null;
$nom_est_valide = false;
$courriel_val = null;
$courriel_est_valide = false;
$message_val = null;
$message_est_valide = false;
$raison_val = null;
$raison_est_valide = false;
$validation_message = '';
if (array_key_exists('nom', $_POST) /*&& array_key_exists('courriel',$_POST)*/) {
    $nom_val = $_POST['nom'];
    $nom_val = filter_var($nom_val, FILTER_SANITIZE_STRING);
    if (1 === preg_match('/^[a-z0-9]{4,}$/', $nom_val)) {
        $nom_est_valide = true;
    } else {
        $validation_message = 'Le nom est pas valide';
    }
    if (array_key_exists('courreil', $_POST)) {
        $courriel_val = ($_POST['courriel']);
        $courriel_val = !filter_var($courriel_val, FILTER_VALIDATE_EMAIL);
        $courriel_est_valide = true;
    } else {
        $validation_message = 'Invalide Courriel';
    }
    if (array_key_exists('message', $_POST)) {
        $message_val = $_POST['message'];
        $message_val = filter_var($message_val, FILTER_SANITIZE_STRING);
        if (1 === preg_match('/^[a-z0-9]{4,}$/', $nom_val)) {
            $message_est_valide = true;
        } else {
            $validation_message = 'Vous ne devez pas depasser dix caractère';
        }
    } else {
        header('location,index.php');
    }


}

?>
<?php
require_once('views/page_top.php');
?>

<form class="form-style-9" novalidate="novalidate">
    <div>
        <p class="for">Forfait Choisi</p>
        <h3 class="jumbotron text-center"><?= $forfait['categorie'] ?></h3>
        <p><?= $forfait['nom'] ?></p>
        <img class="img-thumbnail" src="<?= IMG_PATH . $forfait['photo1'] ?>" alt=""/>
        <p class="for">Place Disponible : <?= $forfait['places_dispo'] ?></p>
        <p class="for">Nombre D'animaux : <?= $forfait['nbr_max_animaux'] ?></p>
        <p class="for">Prix pour les animaux: <?= $forfait['prix_animal'] ?></p>


    </div>
    <!--<ul>
        <li>
            <input type="text" name="field1" class="field-style field-split align-left" placeholder="Name"/>
            <input type="email" name="field2" class="field-style field-split align-right" placeholder="Email"/>

        </li>
        <li>
            <input type="text" name="field3" class="field-style field-split align-left" placeholder="Phone"/>
            <input type="url" name="field4" class="field-style field-split align-right" placeholder="Website"/>
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

</form>-->
    <main>
        <p><?= $validation_message ?></p>
        <form name="contact_form" method="post">
            <div class="form-line">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value=""/>
            </div>

            <div class="form-line">
                <label for="courriel">Courriel :</label>
                <input type="text" name="courriel" id="courriel" value=""/>
            </div>

            <div class="form-line">
                <label for="message">Message :</label>
                <input type="text" name="message" id="message" value=""/>
            </div>

<!--            <div class="form-line">
                <label>Raison :</label>
                <input type="radio" name="raison" value="r_renc"/>&nbsp;Nous rencontrer
                <input type="radio" name="raison" value="r_conn"/>&nbsp;Connaître notre action
                <input type="radio" name="raison" value="r_trav"/>&nbsp;Travailler avec nous
                <input type="radio" name="raison" value="r_sout"/>&nbsp;Nous Soutenir
            </div>-->

            <div class="form-line">
                <input type="submit" value="Soumettre" name="soumettre">
            </div>
        </form>
    </main>
<?php
require_once(ROOT_DIR . 'viewblock/footer.php');
?>

<script src="script/main.js"></script>