// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within here, not above or below
	$(function() {

		var iconAngleUp = "<svg class='icon icon-caret-up'><use xlink:href='"+themeURL.themeURL+"/_resources/images/icons-sprite.svg#icon-caret-up'></use></svg>";
		var iconAngleDown = "<svg class='icon icon-caret-down'><use xlink:href='"+themeURL.themeURL+"/_resources/images/icons-sprite.svg#icon-caret-down'></use></svg>";

		// --------------------------------------------------------------------------------------------------
		// Toggle Location Numbers
		// --------------------------------------------------------------------------------------------------
		$('.js-toggle-location-numbers').click(function(){
			$('.location-numbers').toggleClass('hidden');
		});


        // --------------------------------------------------------------------------------------------------
		// Search Focus
		// --------------------------------------------------------------------------------------------------
        $(".search-field").focus(function(){
            $(".search-field").parent().parent().addClass('focus');
        });

        $(".search-field").focusout(function(){
            $(".search-field").parent().parent().removeClass('focus');
        });


        // --------------------------------------------------------------------------------------------------
		// Mob Search Toggle
		// --------------------------------------------------------------------------------------------------
        $(".mob-search-close").on('click',function() {
            $(".mob-search").removeClass('left-0');
            $(".mob-search").addClass('-left-full');
            // $(".mob-search").fadeOut();
        });

        $(".mob-search-btn").on('click',function() {
            // $("html, body").animate({ scrollTop: 0 });
            $(".mob-search").removeClass('-left-full');
            $(".mob-search").addClass('left-0');
            // $(".mob-search").fadeIn();
        });


        // --------------------------------------------------------------------------------------------------
		// Mob Top Bar
		// --------------------------------------------------------------------------------------------------
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.mob-top-bar').addClass('scrolled');
                $(".mob-search").addClass('scrolled');
            }
            else {
                $('.mob-top-bar').removeClass('scrolled');
                $(".mob-search").removeClass('scrolled');
            }
        });


		// --------------------------------------------------------------------------------------------------
		// Mobile Menu
		// --------------------------------------------------------------------------------------------------
		// Copy primary and secondary menus to .mob-nav element
		var mobNav = document.querySelector('.mob-nav .scroll-container');

		// Add Close Icon element
		$( "<div class='mob-nav-close'><svg class='icon icon-times'><use xlink:href='"+themeURL.themeURL+"/_resources/images/icons-sprite.svg#icon-times'></use></svg></div>" ).insertAfter( ".mob-nav .scroll-container" );

		// Add dropdown arrow to links with sub-menus
        $( "<span class='sub-arrow'>"+iconAngleDown+iconAngleUp+"</span>" ).insertAfter( ".mob-nav .menu-item-has-children > a" );
        $(".sub-arrow .icon-caret-down").addClass('active');

	    // Show sub-menu when dropdown arrow is clicked
	    $('.sub-arrow').click(function() {
	    	$(this).toggleClass('active');
	    	$(this).prev('a').toggleClass('active');
	    	$(this).next('.sub-menu').slideToggle();
	    	$(this).children().toggleClass('active');
	    });

	    // Add underlay element after mobile nav
	    $( "<div class='mob-nav-underlay'></div>" ).insertAfter( ".mob-nav" );

	    // Show underlay and fix the body scroll when menu button is clicked
	    $('.menu-btn').click(function() {
	    	$('.mob-nav,.mob-nav-underlay').addClass('mob-nav--active');
	    	$('body').addClass('fixed');
	    });

	    // Hide menu when close icon or underlay is clicked
	    $('.mob-nav-underlay,.mob-nav-close').click(function() {
	    	$('.mob-nav,.mob-nav-underlay').removeClass('mob-nav--active');
	    	$('body').removeClass('fixed');
        });


        // --------------------------------------------------------------------------------------------------
		// Add icon to menu items with children
		// --------------------------------------------------------------------------------------------------
		if(window.innerWidth >= 1000) {
			// Primary Menu
			$(".menu > ul > .menu-item-has-children > a").append(iconAngleDown);
		}
		function addDropdownIcon() {
			if(window.innerWidth < 1000) {
				$('.menu > li > a > .icon').remove();
			}
		}
        window.addEventListener('resize', addDropdownIcon);

        // --------------------------------------------------------------------------------------------------
		// Map
		// --------------------------------------------------------------------------------------------------
        $('.map').click(function(e) {
            $(this).find('iframe').css('pointer-events', 'all');
        }).mouseleave(function(e) {
            $(this).find('iframe').css('pointer-events', 'none');
        });

		// --------------------------------------------------------------------------------------------------
		// HTML Forms tracking
		// --------------------------------------------------------------------------------------------------
		$('.hf-form-11705').on('hf-submit', function(e) {
            gtag('event', 'conversion', {'event_category': 'contact form','event_action': 'Send Form','event_label': 'Successful contact form Enquiry'});
        });

        // --------------------------------------------------------------------------------------------------
		// Wishlist
		// --------------------------------------------------------------------------------------------------
        $(".add_to_wishlist").prepend('<svg class="icon icon-heart"><use href="https://thanet-bedz.vm/wp-content/themes/thanet-bedz/_resources/images/icons-sprite.svg#icon-heart"></use></svg>');


        // --------------------------------------------------------------------------------------------------
		// Product category filter
		// --------------------------------------------------------------------------------------------------
        $('.product-cat-sort').change(function(){
            var link = $(this).children('option:selected').data('link');
            window.location.href = link;
        });

	});

}(jQuery));
