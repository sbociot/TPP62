<?php
require_once(dirname(__FILE__) . '/./defines.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <img src="image/logoSafsaf.jpg" alt="logo">
</header>
<ul class="pull-right">
    <?php foreach ($top_menu as $label => $filename) { ?>
        <li>
            <a href="<?= $filename ?>"><?= $label ?></a>
        </li>
    <?php } ?>
</ul>
<?php
require_once('views/page_top.php');// Inclusion des defines
?>
<main>
    <h1>Accueil</h1>
</main>


</div>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>
</body>
