// Custome theme code

if ($('.clean-gallery').length > 0) {
    baguetteBox.run('.clean-gallery', {animation: 'slideIn'});
}

if ($('.clean-product').length > 0) {
    $(window).on("load", function () {
        $('.sp-wrap').smoothproducts();
    });
}

$('.owl-carousel').owlCarousel({
    loop: false,
    nav: false,
    merge: false,
    margin: 20,
    dots: false,
    items: 3,
    stagePadding: 40,
    responsive: {
        0: {
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
        },
        768: {
            items: 3,
        }
    }
})
//
// $('.carousel-homepage').slick({
//     speed: 300,
//     slidesToShow: 3,
//     slidesToScroll: 3,
//     responsive: [
//         {
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1
//             }
//         }
//     ],
//     centerMode: true,
//
//     variableWidth: true
// });

// var elms = document.getElementsByClassName('splide');
// for (var i = 0, len = elms.length; i < len; i++) {
//     new Splide(elms[i], {
//         type: 'loop',
//         padding: {
//             right: '5rem',
//             left: '5rem',
//         },
//     }).mount();
// }