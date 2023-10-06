<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <script>
    function displayForm() {
      const form = document.getElementById('form');
      form.style.display = 'block';
    }
  </script>
</head>
<body>

<?php
    include "_navbar.php"; 
?>

<main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <img class="img-bateau" src="assets/images/le-baratie.jpg" alt="Photo du restaurant lez Baratie">
    <h1 class="baratie">Le Baratie</h1>

<br>
<br>
<br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br> 
<br>
<br> 

<div class="boxInfos">
<h3 class="heure">Heures d'Ouverture :</h3>
    <p class="para">Tous les jours de la semaine à toute heure de la journée</p>

<br>
<br>
<br> 

<div class="bouton">    
    <button onclick="displayForm()" class="Réservation">Réservez <br> une table</button> 

<br>

<form id="form" style="display: none;">
  <label for="prenom">Prénom:</label><br>
  <input type="text" id="prenom" name="nom" value="prenom"><br>
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom" value="nom"><br><br>
  <label for="heure">Indiquez l'heure:</label><br>
  <input type="text" id="heure" name="heure" value="heure"><br><br>
  <input type="submit" value="Confirmez">
</form>

<br>
<br> 
<br>
<br>

    <h4 class=embarquez>Où embarquez?</h4>
<br>
</div>
    <img class="map-contact" src="assets/Images/map_contact.jpg"
      alt="map au tresor">
      <br>
      <p class="comeHere">Pour venir en bâteau, prendre les courants marins Ouest en remontant East Blue. 
        Pour venir en hippocampe, prendre les courants sous-marins Sud en remontant East Blue.
        Pour venir par les airs, prendre le mistral d'East Blue (conseillés en plein jour).
        Pour venir par vos propres moyens, vous réferez à la carte. 
        Venez comme vous êtes !
      </p>
<br> 
<br>

<p class="tel">Téléphone : 05.19.00.00.00</p>
<p class="email">Email : lebaratie@eastblue.com</p>

<br>    

</main>

<?php

include "footer.php";

?>

</body>
</html>