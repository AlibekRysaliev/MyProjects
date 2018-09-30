$(document).ready(function(){
    $('.text-slide').slick({
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
        arrows : false
    });
});



/* language=JQuery-CSS*/
// $('.comments-slide').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 3000,
//     infinite : true,
//     arrows : false,
//     dots : true,
//     adaptiveHeight: true,
//     pauseOnHover : true,
//     slidesPerRow: 1,
//     mobileFirst : true
// });
// $('.mobile-comments-slide').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 3000,
//     infinite : true,
//     arrows : false,
//     dots : true,
//     adaptiveHeight: true,
//     pauseOnHover : true,
//     slidesPerRow: 1,
//     mobileFirst : true
// });

if($(window).width() >= 1025) {
    $('.comments-slide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite : true,
        arrows : false,
        dots : true,
        adaptiveHeight: true,
        pauseOnHover : true,
        slidesPerRow: 1,
        mobileFirst : true

    });
} else if ($(window).width() >= 768 && $(window).width() <= 1024) {
    $('.comments-slide').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite : true,
        arrows : false,
        dots : true,
        touchMove : false,
        adaptiveHeight: true,
        pauseOnHover : true,
        slidesPerRow: 1,
        mobileFirst : true

    });
} else {
    $('.comments-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite : true,
        verticalSwiping : false,
        swipe : false,
        arrows : false,
        dots : true,
        touchMove : false,
        adaptiveHeight: true,
        pauseOnHover : true,
        slidesPerRow: 1,
        mobileFirst : true

    });
}
//Плавный переход
$(document).ready(function(){
    $(".navbar-nav").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
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



