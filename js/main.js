(function($) {
    "use strict"; 

$(".menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
    $('#overlay').fadeToggle( "slow", "swing" );
});

$('a.trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
        $('html, body').animate({
        scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
    }
    }
});

$('#sidebar-wrapper .trigger').click(function() {
    $("#sidebar-wrapper").removeClass("active");
    $(".menu-toggle").removeClass("active");
    $('#overlay').fadeOut('slow');
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
});

$(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
    } else {
        $('.scroll-to-top').fadeOut();
    }
});

})(jQuery);

        
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,  
    dots: true,
    dotsEach: true,
    autoplayTimeout: 7000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            mouseDrag: false,
            touchDrag: true
        },
        768:{
            items:2,
            mouseDrag: false,
            touchDrag: true
        },
        1024:{
            items:3,
        }
    }
});        

