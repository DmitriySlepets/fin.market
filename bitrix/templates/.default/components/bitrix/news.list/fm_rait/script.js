$(document).ready(function(){
	/*$('#owl_carousel_3').owlCarousel({
        items: 5,
        loop:true, //Зацикливаем слайдер
        margin:20, //Отступ от элемента справа в ...px
        nav:true, //Отключение навигации
        autoplay:false, //Автозапуск слайдера
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:6000, //Время смены слайда
        responsive:{ 
			0:{
				items:2
			},
			451:{
				items:3
			},
			1300:{
				items:5
			},
        }
    });*/
    if($(window).width() > 800) {
        $('#owl_carousel_3').owlCarousel({
            loop: true,
            center: true,
            margin: 10,
            nav: true,
            merge: true,
            pullDrag: true,
            autoWidth: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 500,
            fluidSpeed: 500,
            navSpeed: 500,
            dragEndSpeed: 1000,
            items: 5,
            slideBy: 3,
            responsive: {
                0: {
                    items: 2,
                    navSpeed: 700,
                    slideBy: 3,
                },
                451: {
                    items: 3,
                    navSpeed: 700,
                    slideBy: 3,
                },
				800: {
                    items: 4,
                    navSpeed: 700,
                    slideBy: 3,
                },
                1200: {
                    items: 5,
                    navSpeed: 700,
                    slideBy: 3,
                },
            }
        });
    }
});