console.log('© Copyright' + '%c FREŠER', 'font-weight: bold', '- All rights reserved.');

// header fixed
$(window).on("load scroll",function(){
    if ($(this).scrollTop() > 10) {
        $(".header").addClass('fixed');
    } else {
        $(".header").removeClass('fixed');
    }
});

// modal18

$('#modal18').modal();

// Inti Animate on scroll
AOS.init();

$(document).ready(function() {
    // Inti outdatedBrowser
    outdatedBrowser({
        bgColor: '#bb9a69',
        color: '#ffffff',
        lowerThan: 'IE9',
        languagePath: '/assets/javascripts/vendor/outdatedbrowser/sl.html'
    });
    // navigaion toggle
    $('.header__bars').on("click", function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $("body").toggleClass('menu-opened');
    });
    /* Explore Slider */
    if( $('.explore__slider').length ) {
        $('.explore__slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 400,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            centerMode: true,
            centerPadding: '100px',
            responsive: [{
                breakpoint: 1599,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '70px'
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '50px'
                }
            }]
        });
    };
});

// anchor scrolling
$('.anchor-link').on('click', function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    }, 800, function() {
    });
});

// fixed background - support for IE
if(navigator.userAgent.match(/Trident\/7\./)) {
  document.body.addEventListener("mousewheel", function() {
    event.preventDefault();
    var wd = event.wheelDelta;
    var csp = window.pageYOffset;
    window.scrollTo(0, csp - wd);
  });
}