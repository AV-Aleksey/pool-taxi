jQuery(document).ready(function() {
    //Адаптация
    if(jQuery(window).width() < 1149) {
        jQuery("#funds .container-trigger").addClass("container");
        jQuery("img.cars").css({"display": "none"});
        jQuery(".stap_list").after("<img src=\"wp-content/themes/taxi/assets/img/all-taxi.png\" alt=\"img\" class=\'cars'>");
    } else {
        jQuery("#funds .container-trigger").removeClass("container");
    }
    if(jQuery(window).width() < 992) {
        jQuery(".popup__doc").addClass("d-none");
        jQuery(".accordion").removeClass("d-none")
    }
    if(jQuery(window).width() < 768) {
        jQuery(".head").addClass("d-none");
        jQuery(".burger-menu").removeClass("d-none")
    }

    //Слик-сл
    jQuery('.slider').slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
    });
    //Окна карточек
    jQuery('.push').click(function() {
        var path_content = jQuery(this).closest('li').find(".silent_content .popup__adv").html();
        var path_img = jQuery(this).data("img");
        jQuery('#exampleModal_form .popup__adv').html(path_content);
        jQuery('#exampleModal_form .window .popup__wrapper .popup__logo img').attr('src',path_img);
        jQuery('#exampleModal_form').arcticmodal();
    });
    //Окно политики
    jQuery('.politic__link').click(function() {
        jQuery('#exampleModal_politic').arcticmodal();
    });
    //Окно договора оферты
    jQuery('.politic__oferta').click(function() {
        jQuery('#exampleModal_oferta').arcticmodal();
    });

    //плавный спуск к секции
    jQuery('.navigation ul li a').addClass('go_to');
    jQuery('.nav ul li a').addClass('go_to');
    jQuery('.go_to').click(function () {
        var scroll_el = jQuery(this).attr('href');
        if (jQuery(scroll_el).length != 0) {
            jQuery('html, body').animate({scrollTop: jQuery(scroll_el).offset().top}, 500);
        }
        return false;
    });

    //кнопка scroll-top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#scroller').fadeIn();
        } else {
            jQuery('#scroller').fadeOut();
        }
    });
    jQuery('#scroller').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    (function(jQuery) {
        var o, n;
        jQuery(".title_block").on("click", function() {
            o = jQuery(this).parents(".accordion_item");
            n = o.find(".info");
            o.hasClass("active_block")
                ? (o.removeClass("active_block"), n.slideUp(200))
                : (o.addClass("active_block"), n.stop(!0, !0).slideDown(200),
                    o.siblings(".active_block").removeClass("active_block").children(".info").stop(!0, !0).slideUp(200))
        })
    })(jQuery);


    //Бургер меню
    jQuery('.nav').attr('data-element','toggle-nav');
    jQuery(function() {
        function init() {
            jQuery('[data-behaviour="toggle-menu-icon"]').on('click', toggleMenuIcon);
        };
        function toggleMenuIcon() {
            jQuery(this).toggleClass('menu-icon--open');
            jQuery('[data-element="toggle-nav"]').toggleClass('nav--active');
        };
        init()
    });
});
//конец Ready


jQuery(window).resize(function () {
    //контейнер для секции
    if(jQuery(window).width() < 1149) {
        jQuery("#funds .container-trigger").addClass("container");
    }
    if(jQuery(window).width() > 1149) {
        jQuery("#funds .container-trigger").removeClass("container");
        jQuery("img.cars").css({"display": "none"});
    }
    //аккордион
    if(jQuery(window).width() < 992) {
        jQuery(".popup__doc").addClass("d-none");
        jQuery(".accordion").removeClass("d-none")
    }
    if(jQuery(window).width() > 992) {
        jQuery(".popup__doc").removeClass("d-none");
        jQuery(".accordion").addClass("d-none")
    }
    //Бургер меню
    if(jQuery(window).width() < 768) {
        jQuery(".head").addClass("d-none");
        jQuery(".burger-menu").removeClass("d-none")
    }
    if(jQuery(window).width() > 768) {
        jQuery(".head").removeClass("d-none");
        jQuery(".burger-menu").addClass("d-none")
    }
    //контакты
    if(jQuery(window).width() < 768) {
        jQuery(".contact .form-send").addClass("d-none");
        jQuery(".silent-contact").removeClass("d-none")
    }
    if(jQuery(window).width() > 768) {
        jQuery(".contact .form-send").removeClass("d-none");
        jQuery(".silent-contact").addClass("d-none")
    }
});


//Паралакс машины
jQuery(window).bind('scroll',function(){
    parallaxScroll();
});
function parallaxScroll(){
    var scrolled = jQuery(window).scrollTop();
    jQuery('img.cars').css('bottom',(-2400+(scrolled*1))+'px');
}

