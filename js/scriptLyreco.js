// Fonction pour générer une position aléatoire sur la fenêtre
function placerLogo() {
//Etape1

    //taille window
    const Widthfenetre = window.innerWidth;
    const Heightfenetre = window.innerHeight;
    //position aleatoire du logo
    const X = Math.random() * (Widthfenetre - 200);  // 200 est la largeur de l'image
    const Y = Math.random() * (Heightfenetre - 200); // 200 est la hauteur de l'image
  
    // Récupérer l'élément contenant l'image
    const animation_du_logo = document.querySelector('.animation_du_logo');
    
    // placer l animation
    animation_du_logo.style.left = `${X}px`;
    animation_du_logo.style.top = `${Y}px`;
  }
  
  // Appeler la fonction pour positionner l'image au chargement de la page
  placerLogo();
  
  // Optionnel : repositionner l'image lorsque la fenêtre est redimensionnée
  //window.addEventListener('resize', placerLogo);