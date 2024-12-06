<?php include"./header.php" ?>
<div class="animation_du_logo">
    <img src="img/Lyreco_logo.svg" alt="logo" class="static-img">
    <img src="img/Lyreco.poisson.gif" alt="logo anime" class="animated-img">
</div>
<script src="js/scriptLyreco.js"></script>
<div id="main-container">
    <!-- Switch pour le mode classique/rétro -->
    <label class="switch">
        <input type="checkbox" id="mode-switch">
        <span class="slider round"></span>
    </label>
    <span id="mode-text">Mode classique</span>

    <!-- Switch pour le mode accessible -->
    <label class="switch">
        <input type="checkbox" id="accessibility-switch">
        <span class="slider round"></span>
    </label>
    <span id="accessibility-text">Mode normal</span>
</div>
<!-- Conteneurs pour les bulles -->
<div id="bubble-screen" class="bubbles"></div>
<div id="retro-screen" class="bubbles hidden"></div>
<!-- Conteneur pour sonic -->
<div id="sonic-container" class="hidden"></div>
<script src="js/versionf_1.js"></script>
</body>
</html>
