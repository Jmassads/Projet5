import $ from 'jquery';
import 'bootstrap';
import 'smartmenus/src/jquery.smartmenus';


/* all links animation */
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('myBtn').style.display = "block";
  } else {
    document.getElementById('myBtn').style.display = "none";
  }

}

// // Back to top button for front pages
$('#myBtn').click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 800);
  return false;
});


// Afficher plus d'articles
$(document).on('click', '#btn_more', function () {
  var last_article_id = $(this).data("article");
  $('#btn_more').html("Chargement...");
  // console.log(last_article_id);
  var delay = 500;
  // $.ajax methode de jquery qui permet d'interagir avec la base de donnees sans rafraichir la page
  // envoyer une requête au serveur et d’attendre le résultat
  $.ajax({
    url: "/FinalProjectphp/Blog/ajax", // l’url a appeler 
    method: "POST", // Le type de la requête HTTP (POST pour envoyer une information (last_article_id) au serveur)
    data: {
      last_article_id
    }, // On fait passer nos variables au script /FinalProjectphp/Blog/ajax
    dataType: "text", // Le type de données à recevoir, ici, du texte. (html marche aussi)

    // en cas de réussite, exécuté QUE si l'appel AJAX a abouti.
    success: function (code_html) {
      // data contient le HTML renvoyé
      setTimeout(function () {
        if (code_html != '') {
          $('#remove_row').remove();
          // on ajoute les articles au DOM
          $('#load_data_articles .row').append(code_html); // On insère le code_html (le résultat de la requete) à la fin des articles précédent

          $("html, body").animate({
            scrollTop: $('#remove_row').offset().top
          }, 1500);
        } else {
          $('#btn_more').html("Il n'y a plus d'articles");
        }
      }, delay);
    }

  });
});

$('#main-menu').smartmenus({
  mainMenuSubOffsetX: -1,
  mainMenuSubOffsetY: 4,
  subMenusSubOffsetX: 6,
  subMenusSubOffsetY: -6
});

var $mainMenuState = $('#main-menu-state');
if ($mainMenuState.length) {
  // animate mobile menu
  $mainMenuState.change(function (e) {
    var $menu = $('#main-menu');
    if (this.checked) {
      $menu.hide().slideDown(250, function () {
        $menu.css('display', '');
      });
    } else {
      $menu.show().slideUp(250, function () {
        $menu.css('display', '');
      });
    }
  });
  // hide mobile menu beforeunload
  $(window).bind('beforeunload unload', function () {
    if ($mainMenuState[0].checked) {
      $mainMenuState[0].click();
    }
  });
}