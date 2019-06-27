import $ from 'jquery';
import 'bootstrap';
// import StickyHeader from './front-modules/StickyHeader';


$('#btn-menu').click(function () {
    if($( "#btn-menu" ).hasClass( "btn-open" )){
        $('.overlay').css('width', '100%');
    } else if($( "#btn-menu" ).hasClass( "btn-close" )){
        $('.overlay').css('width', '0%');
    }
    $('.hamburger').toggleClass("is-active");
    $(this).toggleClass('btn-open btn-close');
    
})


$('.nav-container li a').on('click', function(){
    $('.nav-container a.is-active').removeClass('is-active');
    $(this).addClass('is-active');
    if($( "#btn-menu" ).hasClass( "btn-open" )){
        $('.overlay').css('width', '100%');
    } else if($( "#btn-menu" ).hasClass( "btn-close" )){
        $('.overlay').css('width', '0%');
    }
    $('.hamburger').toggleClass("is-active");
    $( "#btn-menu" ).toggleClass('btn-open btn-close');
    
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

$('#myBtn').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});


$(document).on('click', '#btn_more', function(){  
    var last_article_id = $(this).data("article");  
    $('#btn_more').html("Chargement...");  
    console.log(last_article_id);
    var delay = 500;
    $.ajax({  
        url:"/FinalProjectphp/Blog/ajax",   // La ressource ciblée
        method:"POST",  // Le type de la requête HTTP.
        // data:{last_article_id:last_article_id},
        data:{last_article_id},  // // On fait passer nos variables au script /FinalProjectphp/Blog/ajax
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

