$(document).ready(function(){
    $('.sliders').slick({
        slidesToShow: 1,
        accessibility: false,
        slidesToScroll: 1,
        autoplay: false,
        adaptiveHeight: true,
        autoplaySpeed: 8000,
        arrows: false,
        dots: true,
        dotsClass: 'slider-bullet',
    });

    $('.sliders-prod').slick({
        slidesToShow: 3,
        accessibility: false,
        slidesToScroll: 1,
        autoplay: false,
        adaptiveHeight: true,
        autoplaySpeed: 5000,
        prevArrow: ".prev",
        nextArrow: ".next",
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
    });
});