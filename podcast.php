    <?php include "header.php" ?>
    <div class="text">Les Podcasts</div>
    <div class="text1">Podcast 1</div>
    <div class="text2">Podcast 2</div>
    <div class="video0">
      <iframe class="video1" width="560" height="300" src="https://www.youtube.com/embed/yIKmyD55Ehg?si=wT4vpIJ_o5jHM8vN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe class="video2" width="560" height="300" src="https://www.youtube.com/embed/wmUBvZtzbWo?si=aL2WGqEdx1fBbQmt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div> 
      <div id="main-container">
              <!-- Switch pour le mode classique/rétro -->
              <label class="switch">
              <input type="checkbox" id="mode-switch">
              <span class="slider round"></span>
              </label>
          <span id="mode-text" class="tc">Mode classique</span>

          <!-- Switch pour le mode accessible -->
          <label class="switch">
              <input type="checkbox" id="accessibility-switch">
              <span class="slider round"></span>
          </label>
          <span id="accessibility-text" class="tn">Mode normal</span>
      </div>
      
      <!-- Conteneurs pour les bulles -->
      <div id="bubble-screen" class="bubbles"></div>
      <div id="retro-screen" class="bubbles hidden"></div>
      <!-- Conteneur pour sonic -->
      <div id="sonic-container" class="hidden"></div>


      <script src="js/versionf_1.js"></script>
  </body>
</html>