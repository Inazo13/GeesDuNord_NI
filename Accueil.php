<?php include"./header.php" ?>
<main>
    <div class="c-main">
        <h2 class="c-titre">Qui sommes-nous ?</h2>
        <div class="c-textechamp">La fondation Race For Water a été fondé en 2010 par Marco Simeoni afin de préserver les océans.</div>
        <br>
        <div class="c-textechamp">Cette fondation étudie, depuis plus de 10 ans, l’impact de la pollution plastique sur les écosystèmes et la santé humaine, tout en offrant des solutions pertinentes pour éviter la pollution.</div>
        <br>
        <div class="c-textechamp">A travers le programme « Learn, Share, Act”, Race for Water souhaite démontrer l’importance de décarboner le monde maritime et de préserver un océan sain et vivant.</div>
        <br>
        <div class="c-textechamp">Via ce site, nous souhaitons démontrer l’importance de décarboner le monde maritime et de préserver un océan sain et vivant. </div>
        <br>
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