$(window).scroll(function () { // Когда страница прокручивается
    var scrTop = $(window).scrollTop();
    if(scrTop>$('.numbers').offset().top - $(window).height()  ) {
        numAnimate();
    }
});

function numAnimate () {
    var number = 1;
    setInterval(function () {
        number++;
        if (number<=120) { $('.numbers').text(number); }
    }, 20)
}

$(document).ready(function(){
    $('.comments-slide').slick({
        vertical : true,
        dots : true,
        slidesToShow: 1,
        infinite: true,
        speed: 300,
        pauseOnHover : true,
        touchMove : true,
        useCSS : true,
        verticalSwiping : true,
        adaptiveHeight: true,
        autoplay : true,
        autoplaySpeed : 4000,
        arrows : true
    });
});

$(function() {

    $(window).scroll(function() {

        if ($(this).scrollTop() > 100) {

            $('#toTop').addClass('activeUp');

        }else {

            $('#toTop').removeClass('activeUp');

        }

    });

    $('#toTop').click(function() {

        $('body,html').animate({scrollTop:0},1000);

    });

});




