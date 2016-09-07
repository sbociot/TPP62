<?php
require_once(dirname(__FILE__) . '/defines.php');
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
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<header>
    <div class="jumbotron text-center">
        <img id="logo" src="image/logo_VOYAGE_2012.png" alt="voyage">
    </div>
    <nav>
        <ul class="menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Compagnie</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">À propos</a></li>
            <li class="icon">
                <a href="javascript:void(0);">&#9776;</a>
            </li>
        </ul>
    </nav>
</header>
<div class="row">
    <div class="col-sm-4">
        <img id="plage" class="img-rounded" src="image/069cb4966674a49a40087ac66b9c1936_large.jpg" alt="ooo">

        <div class="box_info" >
            <p>
            <h1>Caraïbe</h1>
            Forfait Caraïbe(US)
            de Montreal(CA)
            </p>
            <a href="#"><span>Réservez     <i class="fa fa-angle-right" style="font-size:15px;color:royalblue"></i></span></a>
        </div>
    </div>
    <div class="col-sm-4">
        <img id="new_york" class="img-rounded" src="image/394821.jpg" alt="new_york">
        <div class="box_info" >
            <p>
            <h1>New York</h1>
            Forfait New York(US)
            de Montreal(CA)
            </p>
            <a href="#"><span>Réservez     <i class="fa fa-angle-right" style="font-size:15px;color:royalblue"></i></span></a>
        </div>
    </div>
    <div class="col-sm-4">
        <img id="rome" class="img-rounded" src="image/Rome-wallpaper-241.jpg" alt="rome">
        <div class="box_info" >
            <p>
            <h1>Rome</h1>
            Forfait Rome(US)
            de Montreal(CA)
            </p>
            <a href="#"><span>Réservez     <i class="fa fa-angle-right" style="font-size:15px;color:royalblue"></i></span></a>
        </div>
    </div>
</div>
<div id="offre">

    <div class="col-sm-3">
        <img src="image/londre.jpg" alt="londre">
        <h2>Europe</h2>
        <p id="londre">
            Consultez nos aubaines pour trouver un départ vers nos destinations les plus populaires au moment qui vous convient.</br>
            <a href="#">Voir toutes les offres Europe</a>
        </p>

    </div>

    <div class="col-sm-3">
        <img src="image/sud.jpg" alt="sud">
        <h2>Sud</h2>
        <p id="sud">Nous offrons jusqu'à 34 destinations vers le Sud, y compris les Caraïbes, l'Amérique centrale et l'Amérique du Sud.</br>
            <a href="#">Voir toutes les offres Sud</a>
        </p>

    </div>
    <div class="col-sm-3">
        <img src="image/floride.jpg" alt="floride">
        <h2>Floride</h2>
        <p id="flo">Atterrissez à Orlando ou à Fort Lauderdale et profitez de tout ce qui est offert dans l’État du soleil, le Sunshine State.</br>
            <a href="#">Voir toutes les offres Floride</a>
        </p>

    </div>
    <div class="col-sm-3">
        <img src="image/canada.jpg" alt="ca">
        <h2>Canada</h2>
        <p id="canada">Vous souhaitez visiter le Canada lors de vos prochaines vacances? Profitez de nos vols intérieurs!</br>
            <a id="ca" href="#">Voir toutes les offres Canada</a>
        </p>
    </div>
</div>
<div class="en-ligne">
<div class="row">
    <div class="col-sm-3">
        <img id="save" src="icon/Enregistrement-en-ligne-80x80.svg" alt="save">
        <div>
            <span>Enregistrement en ligne</span><br/>
            <a href="#">Enregistrez-vous</a>
        </div>
    </div>
    <div class="col-sm-3">
        <span>Option plus</span>

    </div>
<div class="enregistrement">
    <div class="col-sm-3">
        <img id="seat" src="icon/seat_selection.png" alt="siege">
       <div>
           <span>Selection de siège</span>
       </div>
        <a href="#">Choisissez vos places</a>
    </div>

    <div class="col-sm-3">

    </div>
</div>
</div>
<script src="script/main.js"></script>



</div>

</body>
