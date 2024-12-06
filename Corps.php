    <?php include "header.php" ?>
    <main>
      <div class="c-main">
        <div class="l-main">
          <div class="c-soustitre">L'océan et le corps humain, 2 salles 1 ambiance</div>
          <h2 class="c-titre">CORPS HUMAIN</h2>
          <div class="c-textechamp">
          L'océan et le corps humain partage de nombreuses similarités dans leur fonctionnement et dysfonctionnement. 
          A travers ce corps humain, nous vous proposons de découvrir certaines de ses similarités, 
          qui nous permettent de mieux comprendre pourquoi il faut préserver l'océan.
          </div>
          <div class="c-cartecorps">
            <img src="img/corps.png" alt="Image du corps" class="i-corps">
            <div class="c-epingle">
              <div class="c-flex">
                <img src="img/epingleR.png" alt="Epingle Rouge" class="i-epingle">
                <div class="c-soustitre2">Le Coeur</div>
              </div>
              <div class="c-textechamp">
                Les courants marins jouent un rôle essentiel dans la vie marine. 
                En effet, ceux-ci permettent de faire circuler les nutriments et les minéraux, 
                indispensables au développement des espèces marines.
                Ils sont le sang des mers, apportant tout ce qui est nécessaire pour maintenir l'océan en vie !
              </div>
            </div>
            <div class="c-epingle">
              <div class="c-flex">
                <img src="img/epingleB.png" alt="Epingle Bleue" class="i-epingle">
                <div class="c-soustitre2">Les Poumons</div>
              </div>
              <div class="c-textechamp">
                Les océans respirent tout comme nous. En effet, ceux-ci contiennent 50 fois plus de carbone 
                que l'atmosphère, et en absorbent près de 100 Milliards de tonnes annuellement ! 
                Ils sont ainsi les vrais poumons de la Terre, et il est de notre devoir de les préserver.
              </div>
            </div>
            <div class="c-epingle">
              <div class="c-flex">
                <img src="img/epingleV.png" alt="Epingle Verte" class="i-epingle">
                <div class="c-soustitre2">La peau</div>
              </div>
              <div class="c-textechamp">
              La température de l'eau joue un rôle central dans l'équilibre terrestre. 
              En effet, celui-ci stocke et redistribue d'énormes quantités de chaleur autour 
              du globe par l'intermédiaire des courants marins, et absorbe 90% de l'excès de 
              chaleur dû au changement climatique ! 
              </div>
            </div>
            <div class="c-epingle">
              <div class="c-flex">
                <img src="img/epingleVi.png" alt="Epingle Violet" class="i-epingle">
                <div class="c-soustitre2">Les Virus</div>
              </div>
              <div class="c-textechamp">
                La pollution de l'océan, à l'échelle de l'humain, reviendrait à 
                se contaminer avec plusieurs virus. Vous n'accepteriez pas ça pour vous, pas vrai ? 
                Alors pourquoi l'accepter pour l'océan ?
              </div>
            </div>
          </div>
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