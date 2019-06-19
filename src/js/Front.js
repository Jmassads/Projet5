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


$('.nav-container li').on('click', function(){
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




