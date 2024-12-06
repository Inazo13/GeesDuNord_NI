document.addEventListener('DOMContentLoaded', () => {
    const modeSwitch = document.getElementById('mode-switch');
    const accessibilitySwitch = document.getElementById('accessibility-switch');
    const bubbleScreen = document.getElementById('bubble-screen');
    const retroScreen = document.getElementById('retro-screen');
    const modeText = document.getElementById('mode-text');
    const accessibilityText = document.getElementById('accessibility-text');
    const sonicContainer = document.getElementById('sonic-container');
    const body = document.body;

    // Génération des bulles classiques
    function generateClassicBubbles() {
        bubbleScreen.innerHTML = ''; // Réinitialise
        for (let i = 0; i < 500; i++) {
            const bubble = document.createElement('div');
            bubble.className = 'bubble classic';
            bubble.style.left = `${Math.random() * 100}vw`;
            bubble.style.animationDuration = `${Math.random() * 5 + 5}s`;
            bubble.style.opacity = Math.random() * 0.6 + 0.4;
            bubble.style.width = `${Math.random() * 30 + 20}px`;
            bubble.style.height = bubble.style.width;
            bubbleScreen.appendChild(bubble);
        }
    }

    // Génération des bulles rétro
    function generateRetroBubbles() {
        retroScreen.innerHTML = ''; // Réinitialise
        for (let i = 0; i < 500; i++) {
            const bubble = document.createElement('div');
            bubble.className = 'bubble retro';
            bubble.style.left = `${Math.random() * 100}vw`;
            bubble.style.animationDuration = `${Math.random() * 5 + 5}s`;
            bubble.style.opacity = Math.random() * 0.8 + 0.2;
            bubble.style.width = `${Math.random() * 30 + 50}px`;
            bubble.style.height = bubble.style.width;
            retroScreen.appendChild(bubble);
        }
    }

    function showSonic() {
        sonicContainer.classList.remove('hidden'); // Affiche Sonic
        setTimeout(() => {
            sonicContainer.classList.add('hidden'); // Cache Sonic après 5s
            console.log("Sonic est caché");
        }, 10000); // Correspond à la durée de sonic-move
    }

    // Basculer entre les modes classiques et rétro
    modeSwitch.addEventListener('change', () => {
        if (modeSwitch.checked) {
            bubbleScreen.classList.add('hidden');
            retroScreen.classList.remove('hidden');
            generateRetroBubbles();
            showSonic(); // Affiche Sonic uniquement en mode rétro
            body.classList.add('retro-font');
            modeText.textContent = 'Mode rétro';
        } else {
            retroScreen.classList.add('hidden');
            bubbleScreen.classList.remove('hidden');
            sonicContainer.classList.add('hidden');
            generateClassicBubbles();
            body.classList.remove('retro-font');
            modeText.textContent = 'Mode classique';
        }
    });

    // Basculer le mode accessibilité
    accessibilitySwitch.addEventListener('change', () => {
        if (accessibilitySwitch.checked) {
            // Activer le mode accessible
            body.classList.add('accessible-font', 'no-bubbles');
            sonicContainer.classList.add('hidden');
            accessibilityText.textContent = 'Mode accessible';
        } else {
            // Désactiver le mode accessible
            body.classList.remove('accessible-font', 'no-bubbles');
            // Restaurer le mode classique ou rétro
            if (modeSwitch.checked) {
                retroScreen.classList.remove('hidden');
                sonicContainer.classList.remove('hidden');
                generateRetroBubbles();
            } else {
                bubbleScreen.classList.remove('hidden');
                generateClassicBubbles();
            }
            accessibilityText.textContent = 'Mode normal';
        }
    });

    // Initialiser les bulles classiques
    generateClassicBubbles();
});
