/**  
 *
 * ---------------------------------------------------------------------------
 *
 *    Template :    Shrimpo | HTML5 Multipage Business Template
 *    Author :      themewarehouse
 *    Author URI :  http://hiknik.com/shrimpo
 *    Version :     1.0
 *
 * --------------------------------------------------------------------------- 
 *
 */

/*  ==================================
 *           js content
 *    ==================================
 *
 *   1. Preloader
 *   2. Isotope
 *   3. Scroll Menu Background Color
 *   4. Search Box
 *   5. Owl Carousel
 *   6. wow js
 *   7. Mobile Menu
 *   8. Scroll Up
 *   9. parallax
 *
 *	================================== */


(function ($) {
    'use strict';   

    /*  ======================================
		    Scroll Menu Background Color
		====================================== */
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 80) {
            $('.header-area').addClass('menu-bg');
        } else {
            $('.header-area').removeClass('menu-bg');
        }
    });

    /*  ======================================
            Search Box
        ====================================== */
    var search_btn = $('.search-btn i.fa');
    search_btn.on('click', function () {
        $('#search').addClass('search-box-open');
    });
    var search_close = $('#search .close');
    search_close.on('click', function () {
        $('#search').removeClass('search-box-open');
    });

    /*  ======================================
            Owl Carousel
        ====================================== */
    var slider_pulse = $(".slider-content, .client-info");
    slider_pulse.owlCarousel({
        navText: ['<i style="color: #f19d34" class="fa  fa-angle-left" aria-hidden="true"></i>', '<i style="color: #f19d34" class="fa fa-angle-right" aria-hidden="true"></i>'],
        loop: true,
        nav: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: false,
        animateIn: 'pulse',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    // Owl Carousel Animation
    slider_pulse.on("translate.owl.carousel", function () {
        $(".single-slider h2 ").removeClass("animated fadeInDown").css("opacity", "0");
        $(".single-slider img.banner-logo, .single-slider p ").removeClass("animated fadeInUp").css("opacity", "0");
        $(".single-slider .slider-btn").removeClass("animated fadeInDown").css("opacity", "0");
    });
    slider_pulse.on("translated.owl.carousel", function () {
        $(".single-slider h2 ").addClass("animated fadeInDown").css("opacity", "1");
        $(".single-slider img.banner-logo, .single-slider p ").addClass("animated fadeInUp").css("opacity", "1");
        $(".single-slider .slider-btn").addClass("animated fadeInDown").css("opacity", "1");
    });

    var slider_default = $(".single-about-img, .twitter-post-prg");
    slider_default.owlCarousel({
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        loop: true,
        nav: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    var slider_products = $(".fav-pro");
    slider_products.owlCarousel({
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        center: true,
        items: 2,
        nav: true,
        loop: true,
        autoplay: true,
        margin: 10,
        mouseDrag: true,
        merge: true,
        responsive: {
            0: {
                items: 1
            },
            678: {
                mergeFit: true
            },
            1000: {
                mergeFit: false
            }
        }
    });
    
    /*  ======================================
            wow js
        ====================================== */
    new WOW().init();

    /*  ======================================
            Mobile Menu
        ====================================== */
    var mobile_menu = $("ul#navigation");
    mobile_menu.slicknav({
        prependTo: ".responsive-menu-wrap"
    });

    /*  ======================================
            Scroll Up
        ====================================== */
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<a class="hvr-icon-bob click-top"></a>', // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    /*  ======================================
            parallax
        ====================================== */
    var parallax = $(window);
    parallax.paroller();   
    
    
    $(window).on('load', function () {

        /*  ======================================
                Preloader
            ====================================== */
        var preloader = $('.preloader-content');
        preloader.fadeOut('500');

    });

}(jQuery));
