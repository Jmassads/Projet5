// import $ from 'jquery';
import 'bootstrap';
import StickyHeader from './modules/StickyHeader';

var stickyHeader = new StickyHeader();

import {

} from "./modules/GreenSock";


/* hamburger menu & overlay fade-in fade-out */

$('.hamburger').click(function () {
    $(this).toggleClass("is-active");
})

var btnMenu = document.getElementById("btn-menu");
btnMenu.addEventListener("click", toggleMenu);

var divOverlay = document.getElementsByClassName("overlay")[0];
var speed = 10;


function toggleMenu(e) {


    if ($('#btn-menu').hasClass('btn-open')) {
        console.log('btn-open clicked')
        $('.overlay').css('z-index', 1);
        fadeIn(divOverlay, speed);
        $("body").css("overflow", "hidden");
        $(this).removeClass('btn-open');
        $(this).addClass('btn-close');



    } else if ($('#btn-menu').hasClass('btn-close')) {
        console.log('btn-close clicked')
        fadeOut(divOverlay, speed);
        $("body").css("overflow", "scroll");
        $(this).removeClass('btn-close');
        $(this).addClass('btn-open');
    }

}

function fadeIn(elem, speed) {

    var inInterval = setInterval(function () {

        elem.style.opacity = Number(elem.style.opacity) + 0.02;

        if (elem.style.opacity >= 1) {

            elem.style.opacity = 1;
            clearInterval(inInterval);
        }
    }, speed); // 10ms == .01s
}

function fadeOut(elem, speed) {

    var outInterval = setInterval(function () {

        elem.style.opacity = Number(elem.style.opacity) - 0.02;

        if (elem.style.opacity <= 0) {
            elem.style.opacity = 0;
            clearInterval(outInterval);
        }
    }, speed); // 10ms == .01s
}

/* all links animation */
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('.overlay').css('z-index', 0);
    $('.hamburger').toggleClass("is-active");
    fadeOut(divOverlay, 2);
    $('#btn-menu').removeClass('btn-close');
    $('#btn-menu').addClass('btn-open');
    $("body").css("overflow", "scroll");
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 58
    }, 500);
});

