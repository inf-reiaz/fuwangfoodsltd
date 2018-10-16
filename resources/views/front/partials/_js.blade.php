

    <!-- ====== jquery ======= -->
    <script src="{{ asset('/public/front/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- ====== bootstrap js ======= -->
    <script src="{{ asset('/public/front/js/bootstrap.min.js') }}"></script>
    <!-- ====== plugins js ======= -->
    <script src="{{ asset('/public/front/js/plugins.js') }}"></script>
    <!-- ====== owl carousel js ======= -->
    <script src="{{ asset('/public/front/js/owl.carousel.min.js') }}"></script>
    <!-- ====== owl carousel js ======= -->
    <script src="{{ asset('/public/front/js/wow.min.js') }}"></script>
    <!-- ====== parallax js ======= -->
    <script src="{{ asset('/public/front/js/jquery.paroller.min.js') }}"></script>
    <!-- ====== counterup js ======= -->
    
    
    <!--<script src="cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    
    <script src="{{ asset('/public/front/js/jquery.counterup.min.js') }}"></script>
    <!-- ====== scrollup js ======= -->
    <script src="{{ asset('/public/front/js/jquery.scrollUp.min.js') }}"></script>
    <!-- ====== lightbox js ======= -->
    <script src="{{ asset('/public/front/js/lightbox.min.js') }}"></script>
    <!-- ====== directional hover js ======= -->
    <script src="{{ asset('/public/front/js/jquery.directional-hover.js') }}"></script>
    <!-- ====== isotope js ======= -->
    <script src="{{ asset('/public/front/js/isotope.min.js') }}"></script>
    <!-- ====== slicknav js ======= -->
    <script src="{{ asset('/public/front/js/jquery.slicknav.min.js') }}"></script>
    <!-- ====== main js ======= -->
    <script src="{{ asset('/public/front/js/main.js') }}"></script>
    <script type="text/javascript">
        /*  ======================================
                    counter Up
                ====================================== */
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        
      $(window).scroll(function() {    
            var scroll = $(window).scrollTop();    
            if (scroll > 50) {
        		 $("#har").addClass("header-area1");
        	}else{
        	     $("#har").removeClass("header-area1");
        	}
            
        });

	$("#do-nicescrol").niceScroll()
        

    </script>
    <script type="text/javascript">
/*  ======================================
hoverdir
====================================== */
        $('.single-project').each(function() {
            $(this).hoverdir();
        });

    </script>
	<script type="text/javascript">


/*  ======================================
    Isotope
====================================== */


        // init Isotope
        var isotope_content = $('.iso-content');
        isotope_content.isotope({
            itemSelector: '.iso-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.iso-item'
            }
        });
        // filter items on button click
        var isotope_nav = $('.iso-nav ul li');
        isotope_nav.on('click', function () {
            $('.iso-nav ul li').removeClass('portfolio-active');
            $(this).addClass('portfolio-active');
            var selector = $(this).attr('data-filter');
            $('.iso-content').isotope({
                filter: selector
            });
            return false;
        });
        
        
        
        

//Strict Mode ===================================


"use strict";



// TagPoint Template Functions ========================================================================
jQuery.extend({
	tp_topsearch: function () {
		// top search ==============================================================
		var el_search = jQuery('.col-search');
		if (el_search.length) {
			el_search.on('click', '.tp-top-icon', function (e) {
				var el_this = jQuery(this);
				if (el_this.hasClass('tp_search_active')) {
					el_this.removeClass('tp_search_active');
					el_this.next(".search-content").slideUp(100);
					return false;
				} else {
					el_this.addClass("tp_search_active")
					el_this.next(".search-content").slideDown(200);
					jQuery('body').find('.top-search').trigger('focus');
					return false;
				}
			});
			jQuery('body').on('click', function (e) {
				if (jQuery(".tp_search_active").length) {

					if (jQuery(e.target).is('.search-content') || jQuery(e.target).is('#topsearch') || jQuery(e.target).is('.top-search-btn')) {

						e.stopPropagation();
					} else {
						jQuery('.search-content').slideUp(100);
						jQuery('.fa-tp-search').removeClass('tp_search_active');
					}
				}

			});
		}
	},
	tp_stickynav: function () {
		// Sticky nav ==============================================================
		if (jQuery('.tp-main-menu').length >= 1 && jQuery('.tp-main-menu').hasClass('sticky-header')) {
			var lengthHeader = jQuery('.tp-menu').offset().top;


			jQuery(window).scroll(function () {
				var headerscroll = jQuery(document).scrollTop();
				if (headerscroll > lengthHeader) {
					if (jQuery('.tp-main-menu').hasClass("header-menu-2")) {
						jQuery(".header-menu-2").addClass('tp-fixed_nav_2');
						jQuery(".header-menu-2").find('.tp-mainm').addClass("tp-fixed-mainnav_2");
						jQuery('.supMmain_menu ').fadeIn();
					} else if (jQuery('.tp-main-menu').hasClass("header-menu-3")) {
						jQuery(".header-menu-3").addClass('tp-fixed_nav_3');
						jQuery(".header-menu-3").find('.tp-mainm').addClass("tp-fixed-mainnav_3");
						jQuery('.supMmain_menu ').fadeIn();
					} else {
						jQuery(".header-menu-1").addClass('tp-fixed_nav_1');
						jQuery(".header-menu-1").find('.tp-mainm').addClass("tp-fixed-mainnav_1");
						jQuery('.supMmain_menu ').fadeIn();
					}
				} else {
					if (jQuery('.tp-main-menu').hasClass("header-menu-2")) {
						jQuery('.header-menu-2').removeClass('tp-fixed_nav_2');
						jQuery(".header-menu-2").find('.tp-mainm').removeClass("tp-fixed-mainnav_2");
						jQuery('.header-menu-2').fadeIn();
					} else if (jQuery('.tp-main-menu').hasClass("header-menu-3")) {
						jQuery('.header-menu-3').removeClass('tp-fixed_nav_3');
						jQuery(".header-menu-3").find('.tp-mainm').removeClass("tp-fixed-mainnav_3");
						jQuery('.header-menu-3').fadeIn();
					} else {
						jQuery('.header-menu-1').removeClass('tp-fixed_nav_1');
						jQuery(".header-menu-1").find('.tp-mainm').removeClass("tp-fixed-mainnav_1");
						jQuery('.header-menu-1').fadeIn();
					}
				}
			});
		};
	},
	tp_counter: function () {
		var el = jQuery(".tp-counter");
		if (el.length) {

			jQuery(".wrap-acheiv").appear(function () {

				el.countTo();

			});

		}
	},
	tp_perload: function () {
		var item = jQuery(".tp-per-load");
		if (item.length) {
			item.delay(200).fadeOut('slow');
			item.css("visibility", "hidden");
			jQuery.tp_mainslider();
		}
	},
	tp_mainslider: function () {
		// Main Slider ==============================================================
		if (jQuery("#slider-pro_2").length) {
			jQuery('#slider-pro_2').pogoSlider({
				autoplay: true,
				autoplayTimeout: 6000,
				displayProgess: true,
				preserveTargetSize: true,
				targetWidth: 1200,
				targetHeight: 509,
				responsive: true,
				pauseOnHover: true,

			});
		}
		if (jQuery("#slider-pro").length) {
			jQuery('#slider-pro').pogoSlider({
				autoplay: true,
				autoplayTimeout: 6000,
				displayProgess: true,
				preserveTargetSize: true,
				targetWidth: 1200,
				targetHeight:620,
				responsive: true,
				pauseOnHover: true,

			});
		}

	},
	tp_videoshow: function () {
		// vedio container ---- on click link  ==================================================
		jQuery("#tp-vedio-play").on('click', function (e) {
			// e.preventDefault();
			var vediolink = jQuery(this).attr("data-link");

			jQuery(this).closest('.wrap-video-vedio').append("<div class='tp-vedio-watch-container'><div class='tp-vedio-wathc-wrap'><div class='tp-vedio-close'><i class='fa fa-close fa-vedio-close' ></i></div><iframe width='750' height='450' src='" + vediolink + "?autoplay=1' frameborder='0' allowfullscreen></iframe></div></div>");

		});

		jQuery(document).on('click', ".fa-vedio-close", function () {

			jQuery(this).closest('.tp-vedio-watch-container').remove();
		});

		jQuery(document).keyup(function (e) {
			if (e.keyCode === 27) { // escape key maps to keycode `27`

				if (jQuery(".tp-vedio-watch-container").length) {
					jQuery('.tp-vedio-watch-container').remove();
				}
			}
		});
	},
	tp_chartskills: function (id, type, options) {

		var data = {
			labels: ["Graphics ", "Marakting", "SEO"],
			datasets: [{
				data: [70, 75, 50],
				backgroundColor: [
					'rgba(48, 169, 222, 0.89)',
					'rgba(252, 179, 0, 0.89)',
					'rgba(255, 255, 255, 0.89)'

				],

				borderWidth: 0
			}]

		};

		var myChart = new Chart(document.getElementById(id), {
			type: type,
			data: data,
			options: options
		});

		document.getElementById('js-legend').innerHTML = myChart.generateLegend();

	},
	tp_masonary_grid: function () {
		var item = jQuery(".lblogs_gridlayout");
		if (item.length) {
			item.masonry({
				// set itemSelector so .grid-sizer is not used in layout
				itemSelector: 'none',
				// use element for option
				columnWidth: '.article_item',
				percentPosition: true


			});

		}
	},
	tp_map: function () {
		// Google Map ============================================================
		var map;
		var map_bg = "#30a9de";
		var icon_path = "images/icons/map-icon.png";
		if (jQuery("#tp-map").hasClass("tp-map-2")) {
			map_bg = "#f19d34";
			icon_path = "images/icons/map-icon-2.png";
		}
		map = new GMaps({
			el: '#tp-map',
			lat: 32.776664,
			lng: -96.796988,
			zoom: 17,
			zoomControl: false,
			disableDefaultUI: true,
			panControl: false,
			streetViewControl: true,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMA
		});
		var styles = [{
			stylers: [

				{
					hue: map_bg
				},
				{
					saturation: -40
				}
			]
		}, {
			featureType: "road",
			elementType: "geometry",
			stylers: [{
					lightness: 100
				},
				{
					visibility: "simplified"
				}
			]
		}, {
			featureType: "road",
			elementType: "labels",
			stylers: [{
				visibility: "off"
			}]
		}];

		map.addStyle({
			styledMapName: "Styled Map",
			styles: styles,
			mapTypeId: "map_style"
		});

		map.setStyle("map_style");
		map.addMarker({
			lat: 32.776664,
			lng: -96.796988,
			icon: icon_path,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'left',
			background: "#eee",

		});
	},
	tp_chartcase: function (id, type, options, dataset) {

		var casechart = new Chart(id, {
			type: type,
			data: dataset,
			options: options
		});

		jQuery(id).closest(".indicator-inner-row").find(".js-legend").html(casechart.generateLegend());


	},
	tp_pricing: function () {
		// Best pricing ============================================================
		if (jQuery(".tp-check-pricing")) {
			jQuery(".tp-check-pricing").change(function () {
				var el_this = jQuery(this);
				if (el_this.is(":checked")) {
					el_this.closest(".pricing-plan-tab").find(".switch-monthly").removeClass("active-monthly");
					el_this.closest(".pricing-plan-tab").find(".switch-yearly").addClass("active-yearly");
					el_this.closest(".container-pricing").find(".monthly-table").css("display", 'none');
					el_this.closest(".container-pricing").find(".yearly-table").fadeIn();
					el_this.parent('label').removeClass("tppricing-switch-monthly").addClass('tppricing-switch-yearly');

				} else {
					el_this.closest(".pricing-plan-tab").find(".switch-monthly").addClass("active-monthly");
					el_this.closest(".pricing-plan-tab").find(".switch-yearly").removeClass("active-yearly");
					el_this.closest(".container-pricing").find(".yearly-table").css("display", 'none');
					el_this.closest(".container-pricing").find(".monthly-table").fadeIn();
					el_this.parent('label').removeClass('tppricing-switch-yearly').addClass('tppricing-switch-monthly');

				}
			});
		}
	},
	tp_lighbox: function () {
		if (jQuery(".tp-image-lightbox").length) {
			lightbox.option({
				'resizeDuration': 200,
				'wrapAround': true
			});
		}
	},
	tp_contacform: function (el) {
		var data = el.serialize();

		var validated = true;
		el.find("input[required=true],textarea[required=true]").each(function () {

			if (!jQuery.trim(jQuery(this).val())) { //if this field is empty
				jQuery(this).css('border-color', 'red'); //change border color to red  
				validated = false; //set do not proceed flag
			}
			//check invalid email
			var pattren = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
			if (jQuery(this).attr("type") === "email" && !pattren.test(jQuery.trim(jQuery(this).val()))) {
				jQuery(this).css('border-color', 'red'); //change border color to red  
				validated = false; //set do not proceed flag             
			}
		});
		if (validated) {

			jQuery.ajax({
				type: "POST",
				url: "php/contact-form.php",
				data: data,
				success: function (text) {

					el.find(".tpsend-btn").after("<p class='msg_feadback'> " + text + "</p> ");


				}
			});
		}

	},
	tp_faq: function () {
		// FQA toggle class ============================================================
		jQuery(".faq-wrap-head").on('click', function () {
			var el_this = jQuery(this);
			jQuery('.faq-wrap-text').find('.faq-toggle-icon').removeClass('faq-icon-open')
			el_this.children('.faq-toggle-icon').addClass('faq-icon-open');
			if (el_this.next('.faq-wrap-para').hasClass('faq-open')) {
				el_this.next('.faq-wrap-para').removeClass('faq-open').slideUp();
				el_this.children('.faq-toggle-icon').removeClass('faq-icon-open');
				el_this.find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
			} else {
				jQuery('.faq-wrap-head').find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
				el_this.find('.fa').removeClass('fa-angle-down').addClass('fa-angle-up');
				jQuery('.faq-wrap-text').find('.faq-wrap-para').slideUp().removeClass('faq-open');

				el_this.next('.faq-wrap-para').addClass('faq-open').slideDown();
			}
		});
	},
	tp_testimonail: function () {
		// testmonail slick slider ============================================================
		var slick_div = jQuery(".tp-slick-slider");
		if (slick_div.length) {
			slick_div.slick({
				dots: true,
				infinite: true,
				fade: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				autoplay: true,
				lazyLoad: true,
				autoplaySpeed: 8000,
				lazyLoad: true


			});
		}
	},
	tp_phonemenu: function (visible) {
		if (visible === true) {
			jQuery(".phonemenu-down").on('click', function (e) {
				e.preventDefault();
				jQuery(this).next('.tp-sub-menu,.full-menu').slideToggle();
				jQuery(".menunav-phone ul.tp-sub-menu,.menunav-phone .full-menu").not(jQuery(this).next(".tp-sub-menu,.full-menu")).slideUp();

			});
		} else {
			jQuery('.tp-sub-menu,.full-menu').slideUp();
		}

	}

});

// on template load ============================================================================
jQuery(window).on('load', function () {

	jQuery.tp_perload();

});

// on document ready ============================================================================
jQuery(document).ready(function () {

	// menu animation ==========================================================
	jQuery('li.sub-menu').on({
		mouseenter: function (e) {
			var el_this = jQuery(this);
			e.preventDefault();
			if (jQuery(".phone_menu").length && !jQuery(".phone_menu").is(":visible")) {
				el_this.parent('ul').removeClass('menunav-phone');
				jQuery('.phonemenu-down').remove();
			}

			if (!el_this.parent('ul').hasClass('menunav-phone')) {
				el_this.addClass('menu_active');
				el_this.children('.tp-sub-menu').slideDown(200);
			}
		},
		mouseleave: function (e) {
			var el_this = jQuery(this);
			e.preventDefault();
			if (jQuery(".phone_menu").length && !jQuery(".phone_menu").is(":visible")) {
				el_this.parent('ul').removeClass('menunav-phone');
				jQuery('.phonemenu-down').remove();

			}
			if (!el_this.parent('ul').hasClass('menunav-phone')) {
				el_this.removeClass('menu_active');
				el_this.children('.tp-sub-menu').slideUp(100);
			}
		}
	});

	// counter ========================================== 
	jQuery.tp_counter();

	// progress skill / chart home ======================================================= 
	var chart_skill = jQuery("#tpchart-skills");
	if (chart_skill.length) {
		chart_skill.appear(function () {

			['doughnut'].forEach(function (type) {

				jQuery.tp_chartskills('tpchart-skills', 'doughnut', {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false


					},
					pieceLabel: {
						mode: 'percentage',
						position: 'inside',
						fontSize: 15,
						fontColor: '#232323',
						fontFamily: "sans-serif"

					}
				});

			});


		});
	}
	// google map =======================================

	if (jQuery("#tp-map").length) {
		jQuery.tp_map();
	}

	// grid layout for blogs ============================================================
	jQuery.tp_masonary_grid();


	//  chart function // indicators in index_2 page /case-details page 
	if (jQuery(".case-indicator").length) {
		var i = 0;
		jQuery(".container-indicators").appear(function () {


			jQuery('.col-caseanalysis').each(function () {

				var id = jQuery(this).find("#case-indicator_" + i);
				if (case_data[i].typechart !== 'undefined') {

					if (case_data[i].typechart === "doughnut" || case_data[i].typechart === "pie") {
						['doughnut'].forEach(function (type) {

							jQuery.tp_chartcase(id, case_data[i].typechart, case_data[i].options, case_data[i].data);

						});
					} else {

						jQuery.tp_chartcase(id, case_data[i].typechart, {
							responsive: true,
							legend: {
								display: false

							}


						}, case_data[i].data);

					};
				};
				//var obj = Object.keys(case_data).length;
				// alert(obj);
				//  alert(Object.keys(case_data))

				i += 1;
			});
		});

	}


	// 1- Best Pricing function =============================  
	jQuery.tp_pricing();

	// 2 - light box  funtion
	jQuery.tp_lighbox();

	// 3 - portfolio project function
	if (jQuery('.filtr-container').length) {
		jQuery('.filtr-container').filterizr();
	}
	// nav style /on click
	jQuery('.tp-project-nav li').on('click', function () {
		jQuery('.tp-project-nav li').removeClass('active');
		jQuery(this).addClass('active');

	});

	// 4 ajax contact form function
	jQuery("#tp-form").on('submit', function (event) {
		// cancels the form submission
		event.preventDefault();
		jQuery.tp_contacform(jQuery(this));
	});

	// 5 top search function =========
	jQuery.tp_topsearch();

	// 6 sticky nav function
	jQuery.tp_stickynav();

	// 7 video show function
	jQuery.tp_videoshow();

	// faq toggle fucntion 
	jQuery.tp_faq();
	// projects slick function 

	// partners slick function 

	// cases slick function

	// Employees list / hompage 3 ======
	// jQuery("#employees-slick").slick({
	// 	dots: true,
	// 	infinite: true,
	// 	slidesToShow: 2,
	// 	slidesToScroll: 1,
	// 	arrows: false,
	// 	autoplay: true,
	// 	autoplaySpeed: 10000,

	// 	responsive: [{
	// 		breakpoint: 480,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1
	// 		}
	// 	}]


	// });

	// What client say about us
	// jQuery(".tp-testmonail-3").slick({
	// 	dots: false,
	// 	infinite: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	arrows: false,
	// 	autoplay: true,

	// 	speed: 500,
	// 	fade: true,
	// 	cssEase: 'ease-in-out'

	// });

	// testimonail slick 
	jQuery.tp_testimonail();

	// aos animation / block animation
	if (typeof AOS !== 'undefined') {

		AOS.init({
			offset: 400,
			disable: window.innerWidth < 1024
		});
	}

	// Responsive Main Menu / phone menu 
	jQuery(".phone_menu").on('click', function (e) {
		e.preventDefault();
		var el_this = jQuery(this);
		var isvisible;
		if (!el_this.parent(".tp_csq").next('.tpnav').is(":visible")) {

			el_this.parent(".tp_csq").next('.tpnav').addClass("menunav-phone").slideDown();

			if (!jQuery(".phonemenu-down").length) {
				jQuery('.menunav-phone li.sub-menu>a').after("<span class='phonemenu-down'><i class='fa fa-caret-down'></i></span>");
				isvisible = true;
				jQuery.tp_phonemenu(isvisible);
			}
		} else {
			el_this.parent(".tp_csq").next('.tpnav').addClass("menunav-phone").slideUp();
			isvisible = false;
			jQuery.tp_phonemenu(isvisible);
		}


	});


});

        
  
    </script>
    
    @yield('my_js')