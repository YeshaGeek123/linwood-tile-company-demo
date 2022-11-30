jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    jQuery('.about-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        focusOnSelect: true,
        dots: true,
        rows:0,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    jQuery('.gallery-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        dots: false,
        arrows: false,
        rows:0,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    
    /* Scroll To Top JS */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    //jQuery("#menu-item-250 a").first().attr('href', 'javascript:void(0);');
    jQuery("#primary-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    jQuery(".menu-toggle").click(function(){
        jQuery("#site-navigation").toggleClass("toggled");
        if(jQuery("#site-navigation").hasClass("toggled"))
        {
            jQuery('.menu-toggle').attr("aria-expanded","true");
        }
        else
        {
            jQuery('.menu-toggle').attr("aria-expanded","false");
        }
       
    });
    


});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {
        jQuery("#menu-item-250 a").first().attr('href', 'javascript:void(0);');
        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        // jQuery('#primary-menu .menu-item a , .menu-item-has-children ul').not('.menu-item-has-children a').click(function() {
        //     jQuery('#site-navigation').removeClass('toggled');
        // });

        // jQuery('.menu-toggle').click(function() {
        //     jQuery(".sub-menu").css('display', 'none');
        // });

       

        /* Scroll To Top JS */
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.cta-wp').fadeIn();
            } else {
                jQuery('.cta-wp').fadeOut();
            }
        });

    } 
});