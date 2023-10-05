<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_navbar-mobile.css" media="screen and (max-width: 640px)">
    <link rel="stylesheet" href="_navbar-desktop.css" media="screen and (min-width: 641px)">
</head>
<body>
    <header>
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
                    <img src="logoBleu1.png" alt="logo" class="test-tourne">
                </div>
            </div>
        </nav>
    </header>
    <script src="script.js" defer></script>
</body>
</html>