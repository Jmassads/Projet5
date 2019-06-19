
// init controller
var controller = new ScrollMagic.Controller();


var $header = $('#header'),
    $headerContent = $('.header .content'),
    $headerImg = $('.header--image'),
    $headerTitle = $('header h1'),
    $headerSubtitle = $('header p'),
    $projectButton = $('.project-button'),
    $blogButton = $('.blog-button'),
    $hrLine = $('.hr-line'),
    $sidenav = $('.sidenav'),
    $projectSection = $('.projects'),
    $socialIcons = $('.header--social-icons i'),
    tlHeader, tlHeaderFadeOut;

tlHeader = new TimelineMax();
tlHeader
    .set($sidenav, {autoAlpha: 0})
    .set($headerTitle, {
        autoAlpha:0,
        y: -70
    })
    .set($headerSubtitle, {
        autoAlpha:0,
        y: -70
    })
    .set($projectButton, {
        autoAlpha:0
    })
    .set($blogButton, {
        autoAlpha:0
    })
    .set($hrLine, {
        width: 0,
        autoAlpha:0
    })
    .to($sidenav, 1, {
        autoAlpha: 1
    })
    .to($header, 0.5, {
        autoAlpha: 1,
    }, '-=3')
    .to($headerTitle, 1.5, {
        y: 0,
        autoAlpha: 1
    }, '-=0.5')
    .to($headerSubtitle, 1, {
        y:0,
        autoAlpha: 1
    }, '-=0.7')
    .staggerTo($socialIcons, 1, {autoAlpha:1}, 0.1)
    .to($projectButton, 1, {
        autoAlpha: 1
    }, '-=0.2')
    .fromTo($hrLine, 1, {width:0, autoAlpha:0}, {width:'100%', autoAlpha:1})
    .to($blogButton, 1, {
        autoAlpha: 1
    }, '-=1')


var parallaxTl = new TimelineMax();
parallaxTl
    .from('.content-wrapper', 0.4, {autoAlpha: 0, ease:Power0.easeNone}, 0.4)
    .from('.bcg', 2, {y: '-50%', ease:Power0.easeNone}, 0)
    ;

var slideParallaxScene = new ScrollMagic.Scene({
    triggerElement: '.bcg-parallax',
    triggerHook: 1,
    duration: '100%'
})
.setTween(parallaxTl)
.addTo(controller);



var $ProjectIcon = $('.projects .project--image span');
var tlIconHover = new TimelineMax();



$('.projects .project--image span').hover(function() {
TweenMax.to($(this), 0.5, { x:+3, scale: 1.03 });
TweenMax.to($(this), 0.5, { boxShadow: '0 0 20px rgba(0,0,0,0.36)'  });
},
function() {
TweenMax.to($(this), 0.5, { x:0, scale: 1 });
TweenMax.to($(this), 0.5, { boxShadow: '0 0 20px rgba(0,0,0,0.06)'  });
});

// loop through each .section element
$('.section').each(function(){

    console.log('.section');
    // build a scene
    var ourScene = new ScrollMagic.Scene({
        triggerElement: this.children[0],
        triggerHook: 0.7
    })
    .setClassToggle(this, 'fade-in') // add class to project01
    .addIndicators({
        name: 'fading scene',
        colorTrigger: 'black',
        colorStart: '#75C695',
        colorEnd: 'pink'
    }) // this requires a plugin
    .addTo(controller);

});