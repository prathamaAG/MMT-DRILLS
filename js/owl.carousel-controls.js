$(document).ready(function () {
    $('.highlights-slider').owlCarousel({
        loop: true,
        margin: 20,
        smartSpeed: 1500,
        dots: true,
        nav: true,
        navText: ["<img src='./images/owl-prev.svg'>", "<img src='./images/owl-prev.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1
            }
        }
    });

    $('.customersLogo-slider').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        navText: ["", ""],
        dots: false,
        autoplay: true,
        smartSpeed: 3500,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 4,
                margin: 20,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 5,
            }
        }
    });
})