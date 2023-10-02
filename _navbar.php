<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Navbar</title>
    <link rel="stylesheet" href="../assets/css/_navbar-mobile.css" media="screen and (max-width: 640px)">
    <link rel="stylesheet" href="../assets/css/_navbar-desktop.css" media="screen and (min-width: 641px)">
</head>
<body>
    <nav>
        <div id="mySidenav" class="sidenav">
            <a id="closeBtn" href="#" class="close">x</a>
            <ul>
                <li class="txt"><a href="#">Accueil</a></li>
                <li class="txt"><a href="#">Menus</a></li>
                <li class="hidden"><a href="#"></a></li>
                <li class="txt"><a href="#">Equipage</a></li>
                <li class="txt"><a href="#">Contact</a></li>
            </ul> 
        </div>
        <div class="navbar">
            <div class="burger">
                <a href="#" id="openBtn">
                    <span class="burger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </div>
            <div class="logo">
                <img src="assets/images/logo.png" alt="logo" class="test-tourne">
            </div>
        </div>
    </nav>
    
    <script src="assets/Javascript/script.js" defer></script>
</body>
</html>