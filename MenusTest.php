<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="assets/css/MenusTest.css">

    <!-- Police des contenus texte (hors titres) : Maven Pro -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
     -->

     
    <title>Menus du Restaurant le Baratié</title>
</head>
<body>
    <header>
        <?php
            include "_navbar.php";
        ?>
    </header>

    <!-- Les titres/liens permettant de scroller dans la page  -->
<ul class="navigationTitle">   
    <li class="liTitle"><a class="navTitle" href="#Starters">Entrees</a></li>
    <li class="liTitle"><a class="navTitle" href="#Dishes">Plats</a></li>
    <li class="liTitle"><a class="navTitle" href="#Desserts">Desserts</a></li>  
</ul> <br>

<!-- Citation/en-tête by Sanji -->
<q class="sanjisQuote">La cuisine est un don de Dieu, les épices un don du diable... Je crois que c'était un peu trop épicé pour toi.</q>



<div class="allMeals">
<div>
    <h2 class="Starters" id="Starters">Entrees</h2><br>
</div>

<?php
    require_once 'dataMenus.php';
    $tableau = $menu['entrees'];
    foreach($tableau as $index) {
?>

<section class="starters1">
<div class="menuPictures">
    <img src="assets\Images\<?= $index['photo'] ?>" alt="Image d'une soupe Miso tirée d'un mangas" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2><?= $index['nom']?></h2>
    <p><?= 
    $index['description']?><br> <?= $index['ingrédients']?></p>
</div>
</section>
<?php } ?>



<div class="allMeals">
<div>
    <h2 class="Starters" id="Dishes">Plats</h2><br>
</div>

<?php
    require_once 'dataMenus.php';
    $tableau = $menu['plats'];
    foreach($tableau as $index) {
?>

<section class="starters1">
<div class="menuPictures">
    <img src="assets\Images\<?= $index['photo'] ?>" alt="Image d'une soupe Miso tirée d'un mangas" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2><?= $index['nom']?></h2>
    <p><?= 
    $index['description']?><br> <?= $index['ingrédients']?></p>
</div>
</section>
<?php } ?>



<div class="allMeals">
<div>
    <h2 class="Starters" id="Desserts">Desserts</h2><br>
</div>

<?php
    require_once 'dataMenus.php';
    $tableau = $menu['desserts'];
    foreach($tableau as $index) {
?>


<section class="starters1">
<div class="menuPictures">
    <img src="assets\Images\<?= $index['photo'] ?>" alt="Image d'une soupe Miso tirée d'un mangas" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2><?= $index['nom']?></h2>
    <p><?= 
    $index['description']?><br> <?= $index['ingrédients']?></p>
</div>
</section>
<?php } ?>



</div>


<h3><a href="LA_CARTE.pdf" target="_blank" class="menudubas">Voir le Menu</a></h3>


<?php

include 'footer.php'

?>


</body>
</html>