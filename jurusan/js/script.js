$(".js-carousel").owlCarousel({
    autoplay: true,
    autoplaytimeout: 500,
    stagePadding: 7,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    loop: true,
    autoplayhoverpause: true,
    items: 3,
    responsive:{
        0:{
            items:1,
            nav: false
        },
        600:{
            items:2,
            nav: true
        },
        1000:{
            items:3,
            nav: true
        }
    }
});