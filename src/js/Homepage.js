import $ from 'jquery';
import AOS from 'aos';
import 'smartmenus/src/jquery.smartmenus';


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


import {
	Timer
} from './front-modules/timer';
import {
	TimelineMax
} from 'gsap';

let timer = new Timer('.timer');


$(document).on('click', 'a[href^="#"]', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500);
});



// Init ScrollMagic
var controller = new ScrollMagic.Controller();

var Tl = new TimelineMax();
Tl
	.to('.sidenav', 0.1, {
		css: {
			backgroundImage: "none"
		}
	})
	.to('.sidenav--arrow-down', 0.1, {
		autoAlpha: 0
	})
	.to('.logo', 0.5, {
		autoAlpha: 1
	})
	.to('.sidenav--menu', 0.5, {
		autoAlpha: 1
	}, "=-0.5")
	.to('#backTotop ', 0.2, {
		autoAlpha: 1
	}, "=-0.5");

// pin again
var Scene1 = new ScrollMagic.Scene({
		triggerElement: '.inside-sections',
		triggerHook: 0
	})
	.setTween(Tl)
	// .addIndicators({
	// 	name: 'Scene 1',
	// 	colorTrigger: 'black',
	// 	colorStart: '#75C695',
	// 	colorEnd: 'pink'
	// }) // this requires a plugin
	.addTo(controller);



// Back to top button for homepage
$('.backTotop').click(function () {
	$('.top-menu li a.active').removeClass('active');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

$('.top-menu li a').on('click', function () {
	$('.top-menu li a.active').removeClass('active');
	$(this).addClass('active');
});




$(window).resize(function(){

	if ($(window).width() >= 768) {  

		var sections = $('section')
		, nav = $('.sidenav--menu')
		, nav_height = nav.outerHeight();
	   
	  $(window).on('scroll', function () {
		var cur_pos = $(this).scrollTop();
	   
		sections.each(function() {
		  var top = $(this).offset().top - nav_height,
			  bottom = top + $(this).outerHeight();
	   
		  if (cur_pos >= top && cur_pos <= bottom) {
			nav.find('a').removeClass('active');
			sections.removeClass('active');
	   
			$(this).addClass('active');
			nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
		  }
		});
	  });
	  

	}     

});