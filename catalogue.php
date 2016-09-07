<?php
require_once(dirname(__FILE__) . '/forfaits.php');
//Initialisation ici
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title></title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id ="row">
<?php
   foreach ($forfaits_data as $id => $forfait){
    ?>

   <div class="col-sm-3">
      <h2><?= $forfait['nom']?></h2>
       <p><?= $forfait['duree']?></p>
       <p><?= $forfait['photo']?></p>
</div>
    <?php
}?>
    </div>
    </body>
    </html>