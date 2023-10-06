<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="assets/css/MenusTest.css">

    <!-- Police des contenus texte (hors titres) : Maven Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    
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


<!-- Première catégorie du Menu : les Entrées -->
<div class="allMeals">
<div>
    <h2 id="Starters">Entrees</h2><br>
</div>

<!-- Entrée 1 : Soupe Miso -->
<section class="starters1">
<div class="menuPictures">
    <img src="assets\Images\misoSoup.jpg" alt="Image d'une soupe Miso tirée d'un mangas" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Soupe miso</h2>
    <p>Recette traditionnelle japonaise.<br> Ingrédients : riz, pomme de terre, chou cabus, oeuf cuit en rondelle, pleurote, coriandre, celeri, carotte. </p>
</div>
</section>

<!-- Entrée 2 : Takoyaki -->
<section class="starters2">
<div class="menuPictures">
    <img src="assets\Images\Takoyaki.jpg" alt="Image d'un plat de Takoyaki tirée d'un mangas :  sous forme de boulettes de pâte, semblable à la pâte à crêpe, contenant des morceaux de poulpe, cuites en moule, comme les gaufres" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Takoyaki</h2>
    <p> Spécialitée d'Osaka et mets de la cuisine japonaise, les petites boules de poulpes. <br>
        Ingrédients : poulpes, farine de blé, sauce soja, oeufs, dashi, ciboulette, aonori. </p>
</div>
</section>

<!-- Entrée 3 : SchotchEgg -->
<section class="starters3">
<div class="menuPictures">
    <img src="assets\Images\scotch_Eggs.jpg" alt="Image d'un plat de Schott Eggs tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Scotch Eggs</h2>
    <p> Composé d'un œuf dur au cœur d'une boule de garniture de chair à saucisse, panée et frite. <br>
        Ingrédients : oeufs, chapelure, farine de blé, chair à saucisse, persil, ail, paprika, piment et poudre d'ail. </p>
</div>
</section>

<h2 id="Dishes">Plats</h2><br>
</div>

<!-- Plat 1 : Riz Cantonais -->
<section class="dishes1">
<div class="menuPictures">
    <img src="assets\Images\cantoneseRice.jpg" alt="Image d'un plat de riz cantonais tirée d'un mangas" style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Riz Cantonais</h2>
    <p> Plat d'inspiration chinoise très populaire. <br> Ingrédients : riz, oignons jaunes, crevettes, petits pois, jambon, huile de tournesol.</p>
</div>
</section>

<!-- Plat 2 : Ramen -->
<section class="dishes2">
<div class="menuPictures">
    <img src="assets\Images\ramen.jpg" alt="Image d'un ramen tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Ramen</h2>
    <p> Emblème de la cusiine traditionnelle, hérité de la cuisine chinoise.<br>
        Ingrédients : Filets de poulet, oeufs, champignons de Paris, nouilles de blé, gingembre, échalotes, oignons jaunes, huile de sésame et sauce soja. </p>
</div>
</section>

<!-- Plat 3 : Soba -->
<section class="dishes3">
<div class="menuPictures">
    <img src="assets\Images\friedNoodles.jpg" alt="Image d'un plat de Soba, pâtes de sarasin, tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Soba</h2>
    <p> Les nouilles frites : pâtes de sarrasin populaires dans tout l'archipel.<br>
        Ingrédients : farine de sarrasin, blé, chou chinois, carotte, filet de porc, champignon noir déshydraté, sauce tonkatsu, sauce soja. </p>
</div>
</section>

<div>
<h2 id="Desserts">Desserts</h2><br>
</div>

<!-- Dessert : Aisu Kôhî -->
<section class="dessert1">
<div class="menuPictures">
    <img src="assets\Images\Aisu_kohi.jpeg" alt="Image d'un café glacé tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Aidu Kôhî</h2>
    <p> Café crémeux et infusé sur la glace<br>
        Ingrédients : grains de café fraichement torréfiés, glace de Baldimore, en système d'infusion goutte à goutte. </p>
</div>
</section>

<!-- Dessert : Japanese Custard Pudding -->
<section class="dessert2">
<div class="menuPictures">
    <img src="assets\Images\japanese_custard_pudding.jpeg" alt="Image d'un pudding à la crème japonaise tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Japanese Custard Pudding</h2>
    <p> Flan japonais de crème au caramel<br>
        Ingrédients : surcre, oeufs, lait de vache demi-écrémé, extrait de vanille fraîche. </p>
</div>
</section>

<!-- Dessert 3 : Three Layer Cake Limoncello -->
<section class="starters3">
<div class="menuPictures">
    <img src="assets\Images\ThreeLayerCakeLimoncello.png" alt="Image d'un gâteau à 3 couches au citron, tirée d'un mangas." style="width:100% ;">
</div>    

<div class="mealCard">
    <h2>Three Layer Cake Limoncello</h2>
    <p>Mariage de la liqueur de citron et de la mascarpone.<br>
        Ingrédients : farine de blé, bicarbonate de soude, beurre, sucre, oeuf, liqueur aromatisée au citron, citron, chocolat blanc, mascarpone, crème fouettée et sucre glace. </p>
</div>
</section>
</div>


<h3><a href="LA_CARTE.pdf" target="_blank">Voir le Menu</a></h3>


</body>
</html>