<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" id="google-font-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C400%2C500" media="all">
    <link rel="stylesheet" id="app-css" href="https://www.raceforwater.org/app/themes/default/assets/stylesheets/front-0fc98c6e11.css" media="all">
    <link rel="stylesheet" id="fancy-css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'info</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/versionf_1.css">
    <link rel="stylesheet" href="css/styleLyreco.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="head_stick">
        <a class="logo">
            <img src="img/Logo.svg" class="i-logo" alt="logo">
        </a>
        <!-- On associe un label à la case pour la modifier -->
        <label for="menu-cb" class="menu-label">
          <!-- Symbole du menu -->
          <svg class="svgIcone" viewBox="0 0 32 32" fill="#666">
            <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
          </svg>
        </label>
        <!-- On fait une case à cocher -->
        <input type="checkbox" id="menu-cb" class="menu-cb">
        <!-- Les noms des différents menus -->
        <nav class="menu-nav">
          <ul>
            <!-- éléments du menus -->
            <li class="menu-item"><a href="./Accueil.php">Accueil</a></li>
            <li class="menu-item"><a href="./Corps.php">Corps Humain</a></li>
            <li class="menu-item"><a href="./podcast.php">Podcasts</a></li>
            <li class="menu-item"><a href="./APropos.php">A propos</a></li>
            <li class="menu-item"><a href="./Lyreco.php">Lyreco</a></li>
          </ul> 
          <svg class="svgRectangle" viewBox="0 0 32 32" fill="#FFFF">
            <rect x="-200" y="0" rx="3" ry="3" width="1000" height="4" />
        </svg>
        <svg class="svgRectangle2" viewBox="0 0 32 32" fill="#FFFF">
            <rect x="-200" y="0" rx="3" ry="3" width="1000" height="4" />
        </svg>
        </nav>
        <!-- On crée une classe menu-nav2 pour le 2ème rectangle de couleur -->
        <nav  class="menu-nav2">
        </nav>
        <script src="script.js"></script>
    </header>
