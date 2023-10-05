<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/equipages.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Equipages</title>
</head>
<body>

<header>
        <?php
            include "_navbar.php";
        ?>
</header>
    
<main>
    <section class="teamPresentation" >
        <h1>L'Equipage</h1>
            <div class="containerImageLeft" >
                <div class="imageLeft">
                    <img class="picture" alt="picture"  
                    onmouseout="this.src='assets/Images/VictoriaSmall.jpg';" 
                    onmouseover="this.src='assets/Images/carteNavigation400x400.jpg';" 
                    src="assets/Images/VictoriaSmall.jpg" />
                </div>
                <div class="presentationRight">
                    <p class="presentationVictoria" >Victoria la tatouée.<br> Femme indépendante, navigatrice du Baratie, elle a déjà parcouru les mers d'East Blue ! Sur son dos, vous trouverez la carte du monde. Mais attention elle ne se laisse pas marcher sur les pieds, ne la cherchez pas ou vous allez la trouver ! </p>
                </div>
            </div>
            <div class="containerImageRight">
                    <div class="imageRight">
                        <img class="picture" alt="picture"  
                    onmouseout="this.src='assets/Images/JohannSmall.jpg';" 
                    onmouseover="this.src='assets/Images/Capone_Bege.jpg';" 
                    src="assets/Images/JohannSmall.jpg" />
                    </div>
                    <div class="presentationLeft">
                        <p class="presentationJohann">Johann le décontracté. <br> Ancien croupier, il a déjà eu affaire au pirate Capone Bege et s'en est sorti avec seulement quelques égratignures. Très bon cuisinier Il s'est fait remarquer par Zeff grâce à ses délicieuses râmen.</p>
                    </div>
            </div>
            <div class="containerImageLeft">
                <div class="imageLeft">
                    <img class="picture" alt="picture"  
                    onmouseout="this.src='assets/Images/MelissaSmall.jpg';" 
                    onmouseover="this.src='assets/Images/KomachiyoSmall.jpg';" 
                    src="assets/Images/MelissaSmall.jpg" />
                </div>
                <div class="presentationRight">
                    <p class="presentationMelissa">Mélissa la Dompteuse. <br> Aucun animal ne lui résiste! Toujours accompagnée de ses fidèles molosses Kaïdo et Rainbow, elle ne se bat presque jamais, et quand c'est nécessaire, elle utilise son fouet !</p>
                </div>
            </div>
            <div class="containerImageRight">
                <div class="imageRight">
                    <img class="picture" alt="picture"  
                    onmouseout="this.src='assets/Images/EtienneSmall.jpg';" 
                    onmouseover="this.src='assets/Images/buggy.jpg';" 
                    src="assets/Images/EtienneSmall.jpg" />
                </div>
                <div class="presentationLeft">
                    <p class="presentationEtienne">Etienne le matelot. <br> Ancien lieutenant de la Marine, Etienne s'est fait renvoyer après avoir dérobé et mangé le Bara Bara no Mi, le fruit du démon de la fragmentation, qui permet à son utilisateur d'être immunisé contre les attaques coupantes et d'être capable de séparer les différentes parties de son corps et de les faire léviter.</p>
                </div>
            </div>
            <div class="containerImageLeft">
                <div class="imageLeft">
                    <img class="picture" alt="picture"  
                    onmouseout="this.src='assets/Images/AdelineSmall.jpg';" 
                    onmouseover="this.src='assets/Images/chopper.jpg';" 
                    src="assets/Images/AdelineSmall.jpg" />
                </div>
                <div class="presentationRight">
                    <p class="presentationAdeline">Adeline la frileuse.<br> Vous la trouverez toujours avec un plaid; son principal ennemi : l'hiver. C'est un comble quand on sait qu'elle a grandi sur l'île de Drum , l'île hivernale de Grand Line qui a vu naître le célèbre Tony Tony Chooper.  </p>
                </div>
            </div>
    </section>
</main>
<footer>
<?php
            include "footer.php";
        ?>
</footer>
</body>
</html>