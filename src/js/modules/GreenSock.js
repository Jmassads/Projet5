/* ===== ScrollMagic Class ==============================================
   Author: Julia Assad
   ========================================================================== */


// init controller
var controller = new ScrollMagic.Controller();
var scene = new ScrollMagic.Scene({
        triggerElement: ".Navbar",
        triggerHook: 0
    })
    .setPin(".Navbar")
    .addIndicators({
        name: "1 (duration: 500)"
    }) // add indicators (requires plugin)
    .addTo(controller);


var $headerContent = $('.header .content'),
    $headerImg = $('.header--image'),
    $headerTitle = $('header h1'),
    $headerSubtitle = $('header p'),
    $headerSpan = $('header h3'),
    tlHeader, 
tlHeaderFadeOut;


tlHeader = new TimelineMax();
tlHeader
    // .set($headerImg, {scale:1.5, autoAlpha:0})
    .set($headerTitle, {
        autoAlpha:0,
        y: -70
    })
    .set($headerSubtitle, {
        autoAlpha:0,
        y: -70
    })
    // .to($headerImg, 5, {
    //     autoAlpha: 1,
    //     scale: 1
    // })
    .to($headerTitle, 1, {
        y: 0,
        autoAlpha: 1,
        delay: 2
    }, '-=1')
    .to($headerSubtitle, 1, {
        y:0,
        autoAlpha: 1
    }, '-=0.7')

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

// tlHeaderFadeOut = new TimelineMax();

// tlHeaderFadeOut
//     .to($headerTitle, 0.2, {
//         y:-30,
//         autoAlpha:0
//     })
//     .to($headerSubtitle, 0.2, {
//         y:-30,
//         autoAlpha:0
//     })



// // pin the header
// var pinIntroScene = new ScrollMagic.Scene({
//         triggerElement: '#intro',
//         triggerHook: 0,
//         duration: '30%'
//     })
//     .addIndicators({
//         name: 'header scene',
//         colorTrigger: 'black',
//         colorStart: '#75C695',
//         colorEnd: 'pink'
//     })
//     .setPin('#intro', {
//         pushFollowers: false
//     })
//     .addTo(controller);


// // build a scene
// var ourScene = new ScrollMagic.Scene({
//         triggerElement: '.project',
//         triggerHook: 0.5
//     })
//     // .setTween(tlHeaderFadeOut)
//     .setClassToggle('.project--content', 'fade-in') // add class to project
//     .addIndicators({
//         name: 'fade scene',
//         colorTrigger: 'black',
//         colorStart: '#75C695',
//         colorEnd: 'pink'
//     }) // this requires a plugin
//     .addTo(controller);

// // parallax scene

// var parallaxTl = new TimelineMax();
// parallaxTl
//     .from('.content-wrapper', 0.4, {autoAlpha: 0, ease:Power0.easeNone}, 0.4)
//     .from('.bcg', 2, {y: '-50%', ease:Power0.easeNone}, 0)
//     ;

// var slideParallaxScene = new ScrollMagic.Scene({
//     triggerElement: '.bcg-parallax',
//     triggerHook: 1,
//     duration: '100%'
// })
// .addIndicators({
//     name: 'parallax scene',
//     colorTrigger: 'black',
//     colorStart: '#75C695',
//     colorEnd: 'pink'
// })
// .setTween(parallaxTl)
// .addTo(controller);

// $(window).on('resize',function(){

//     if($('body').width() >= 740){
//           // tweens or code can go here
//           console.log('bigger than 740px');
//           var tween = TweenLite.to($('.BarLateral-container'), 0.1, {x:0})
//     } else if($('body').width() <= 740){
//           // tweens or code can go here
//           console.log('smaller than 740px');
//           var tween = TweenLite.to($('.BarLateral-container'), 0.1, {x:-100})
//     } 
// });




// export {

// }