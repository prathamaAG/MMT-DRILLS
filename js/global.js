$(document).ready(function () {
    // Header Stiky
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 90) {
            jQuery('#header').addClass('stiky');
        }
        if (jQuery(window).scrollTop() < 90) {
            jQuery('#header').removeClass('stiky');
        }
    });

    // Hamburger Menu
    $('header .menuBtn .menu-btn').on('click', function () {
        $('header .bottomHeader .hamburger').addClass('checked')
        $("body").addClass("no-scroll");
    });
    $('header .bottomHeader .hamburger .close-btn').on('click', function () {
        $('header .bottomHeader .hamburger').removeClass('checked')
        $("body").removeClass("no-scroll");
    });

    // Aos Animation
    setTimeout(function () {
        AOS.init({
            // easing: 'ease-out-back',
            once: true,
            duration: 1000
        });
    }, 100);
});