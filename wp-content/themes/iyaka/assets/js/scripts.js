 import './jquery-global';
//
import './plugins/masonry';
import './plugins/fancybox';
import './plugins/slick';
//
import './scripts/header'
 console.log('Hello');
//
//
$(document).ready(function() {
//     // Vérifie si la page est un article (single post)
  if (!$('body').hasClass('home')) {
    // Parcours tous les liens du menu
    $('a[href^="#"]').each(function() {
      // Modifie les liens d'ancrage pour les rediriger vers la page d'accueil
      const homeURL = window.location.origin; // L'URL de la page d'accueil
      const link = $(this);
      const anchor = link.attr('href'); // Récupère le lien de l'ancre

      // Si le lien contient une ancre, on le redirige vers la page d'accueil avec l'ancre
      if (anchor && anchor.startsWith('#')) {
        link.attr('href', homeURL + anchor);
      }
    });
  }

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    // Le décalage que vous voulez
    var offset = 50;

    // Récupérer l'élément cible
    var target = $(this.hash);

    // Calculer la position avec le décalage
    var position = target.offset().top - offset;

    // Scroller doucement vers l'élément
    $('html, body').animate({
      scrollTop: position
    }, 500); // 500ms pour l'animation
  });
});