jQuery( document ).ready(function() {

jQuery('.owl-portfolio').owlCarousel({
    loop:false,
    margin:10,
    stagePadding:5,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

});