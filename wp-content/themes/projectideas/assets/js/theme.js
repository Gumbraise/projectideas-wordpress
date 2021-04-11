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
    responsive:{
        0:{
            items:1,
            autoplay: true,
            autoplayTimeout: 3000
        },
        768:{
            items:3,
        }
    }
})