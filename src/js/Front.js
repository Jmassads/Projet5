import $ from 'jquery';
import 'bootstrap';

/*
CARTES
*/
import {
	Map
} from './front-modules/map';

function init() {
	// Carte de Saint Germain en Laye
	// lat, lng, zoom, streetViewControl
    let map = new Map(48.8989, 2.0938, 12, false);
    map.addMap('map');
    map.addMarker('Saint Germain en Laye');
}

// Comme j'ai utilisé les modules de webpack, les scopes sont separées. J'ai attaché la fonction init à la scope globale.
window.init = init;


$('#btn-menu').click(function () {
    if($( "#btn-menu" ).hasClass( "btn-open" )){
        $('.overlay').css('width', '100%');
    } else if($( "#btn-menu" ).hasClass( "btn-close" )){
        $('.overlay').css('width', '0%');
    }
    $('.hamburger').toggleClass("is-active");
    $(this).toggleClass('btn-open btn-close');   
})


$('.nav-container a').on('click', function(){
    $('.hamburger').toggleClass("is-active");
    $( "#btn-menu" ).toggleClass('btn-open btn-close');
    if($( "#btn-menu" ).hasClass( "btn-open" )){
        $('.overlay').css('width', '100%');
    } else if($( "#btn-menu" ).hasClass( "btn-close" )){
        $('.overlay').css('width', '0%');
    }
    
    
});

/* all links animation */
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top 
    }, 500);
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// Back to top button
$('#myBtn').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

// To load more articles
$(document).on('click', '#btn_more', function(){  
    var last_article_id = $(this).data("article");  
    $('#btn_more').html("Chargement...");  
    console.log(last_article_id);
    var delay = 500;
    $.ajax({  
        url:"/FinalProjectphp/Blog/ajax",   // La ressource ciblée
        method:"POST",  // Le type de la requête HTTP.
        // data:{last_article_id:last_article_id},
        data:{last_article_id},  // On fait passer nos variables au script /FinalProjectphp/Blog/ajax
        dataType:"text",  
        success:function(data) {
            setTimeout(function() {
                if(data != '')  
                {  
                     $('#remove_row').remove();  
                     $('#load_data_table').append(data);  
                     $('#load_data_table').add(); 
                     $("html, body").animate({ scrollTop: $('#remove_row').offset().top}, 1500);  
                }  
                else  
                {  
                     $('#btn_more').html("Il n'y a plus d'articles");  
                }  
            }, delay);
          }
    
   });  
});  

