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


// To load more articles
$(document).on('click', '#btn_more', function () {
  var last_article_id = $(this).data("article");
  $('#btn_more').html("Chargement...");
  console.log(last_article_id);
  var delay = 500;
  $.ajax({
    url: "/FinalProjectphp/Blog/ajax", // La ressource ciblée
    method: "POST", // Le type de la requête HTTP.
    // data:{last_article_id:last_article_id},
    data: {
      last_article_id
    }, // On fait passer nos variables au script /FinalProjectphp/Blog/ajax
    dataType: "text",
    success: function (data) {
      setTimeout(function () {
        if (data != '') {
          $('#remove_row').remove();
          $('#load_data_table').append(data);
          $('#load_data_table').add();
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