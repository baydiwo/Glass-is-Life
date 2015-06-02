$(document).ready(function(){
    $('#shows-slider').bxSlider({
        mode: 'fade',
        easing: 'swing',
        pagerCustom: '#slide-pager',
        // pagerType: 'short',
        // nextText: '<img src="assets/img/arrow-right.png" alt="Next">',
        // prevText: '<img src="assets/img/arrow-left.png" alt="Previous">'
    });
    $(".vid").colorbox({iframe:true, innerWidth:580, innerHeight:300 , maxWidth:'95%', maxHeight:'95%'});
    // $('#mobile-menu').sidr({
    //     side: 'right'
    // });

    $("#sidr").slideReveal({
        width: 200,
        push: false,
        position: "right",
        speed: 500,
        trigger: $("#mobile-menu"),
        // autoEscape: false,
        top: 0
    });

});
