<?php include"./header.php" ?>
<main>
    <div class="c-main">
        <h2 class="c-titre">A Propos de nous</h2>
        <div class="c-textechamp">Ce site a été réalisé par les Geeks du Nord, constitué de :</div>
        <div class="c-textechamp">Dan Déprudérand</div>
        <div class="c-textechamp">Gauvain Lepitre</div>
        <div class="c-textechamp">Alphonse Kerbellec</div>
        <div class="c-textechamp">Léandre Lavoisier</div>
        <div class="c-textechamp">Noa Bukovec</div>
        <div class="c-textechamp">Théo Bonhomme</div>
        <div class="c-textechamp">Quentin Balazot</div>
        <div class="c-textechamp">Thomas Manche</div>
        <br>
        <div class="c-textechamp">
            Nous sommes une équipe de l'INSA Haut-de-France, 
            situé à Valenciennes, majoritairement dans la spécialité Informatique et Cybersécurité.
        </div>
        <div class="c-textechamp">
        Notre objectif, à travers cette nuit de l'info, était de découvrir le développement 
        Web 2.0 avec une découverte, ou redécouverte, de l'HTML et du PHP.
        </div>
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
    </div>
</main>
</body>
</html>