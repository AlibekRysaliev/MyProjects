$(document).ready(function(){
    $(".navbar-nav").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор блока с атрибута href
        var  id = $(this).attr('href');
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        var top = $(id).offset().top;
        /*анимируем переход на расстояние - top за 1500 мс*/
        $('body,html').animate({scrollTop: top}, 1900);
    });
});

$(document).ready(function(){
    $(".carousel-caption").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор блока с атрибута href
        var  id = $(this).attr('href');
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        var top = $(id).offset().top;
        /*анимируем переход на расстояние - top за 1500 мс*/
        $('body,html').animate({scrollTop: top}, 1900);
    });
});