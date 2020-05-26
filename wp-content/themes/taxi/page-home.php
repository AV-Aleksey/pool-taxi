<?php
	/* 
	Template Name: Лендинг для главной
	*/;
?>

<?php get_header(); ?>
<section class="card" id="cardriver">
    <div class="container">
        <h2 class="title__driver">
            <?php the_field('for_driver'); ?>
        </h2>
        <ul class="wrapper">
            <!--Карточка №1-->
            <?php $posts = card_show_reviews(); ?>
            <?php foreach ($posts as $post): ?>
            <li class="wrapper__card">
                <div class="card__logo_wrapper">
                    <div class="card__logo"></div>
                </div>
                <div class="yrapper">
                    <div class="card__text">
                        <p class="card__p"><?php the_field('one') ?></p>
                        <p class="card__p"><?php the_field('two') ?></p>
                        <p class="card__p"><?php the_field('three') ?></p>
                    </div>
                    <div class="push__wrap">
                        <button href="#" class="push cent" id="cent3" data-img="<?php bloginfo('template_directory') ?>/assets/img/yandex_taxi.png">Подключиться</button>
                    </div>
                </div>
                <div class="silent_content">
                    <div class="popup__adv">
                        <p class="adv"><?php the_field('yandex-1') ?></p>
                        <p class="adv"><?php the_field('yandex-2') ?></p>
                        <p class="adv"><?php the_field('yandex-3') ?></p>
                        <p class="adv"><?php the_field('yandex-4') ?></p>
                        <p class="adv"><?php the_field('yandex-5') ?></p>
                    </div>
                </div>
            </li>
            <?php endforeach; wp_reset_query(); ?>
        </ul>
    </div>
</section>
<section id="funds">
    <div class="container container-trigger">
        <div class="map_wrap">
            <div class="funds__heading">
                <h2 class="funds__title"><?php the_field('for_funds'); ?></h2>
            </div>
            <img src="<?php bloginfo('template_directory') ?>/assets/img/card.png" alt="" class="back-map">
            <ul class="stap_list">
                <li class="stap__item">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/1.png" alt="img" class="stap__img">
                        <h5 class="stap__title"><?php the_field('step_1') ?></h5>
                    </div>
                    <p class="stap__text"><?php the_field('step_1_text') ?></p>
                </li>
                <li class="stap__item d-none">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/2.png" alt="img" class="stap__img">
                        <h5 class="stap__title">Шаг 2</h5>
                    </div>
                    <p class="stap__text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев </p>
                </li>
                <li class="stap__item">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/3.png" alt="img" class="stap__img">
                        <h5 class="stap__title"><?php the_field('step_2') ?></h5>
                    </div>
                    <p class="stap__text"><?php the_field('step_2_text') ?></p>
                </li>
                <li class="stap__item d-none">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/4.png" alt="img" class="stap__img">
                        <h5 class="stap__title">Шаг 4</h5>
                    </div>
                    <p class="stap__text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев </p>
                </li>
                <li class="stap__item">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/5.png" alt="img" class="stap__img">
                        <h5 class="stap__title"><?php the_field('step_3') ?></h5>
                    </div>
                    <p class="stap__text"><?php the_field('step_3_text') ?></p>
                </li>
                <li class="stap__item">
                    <div class="stap__wrap">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/6.png" alt="img" class="stap__img">
                        <h5 class="stap__title"><?php the_field('step_4') ?></h5>
                    </div>
                    <p class="stap__text"><?php the_field('step_4_text') ?></p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews__heading">
            <h2><?php the_field('for_comments'); ?></h2>
        </div>
        <div class="slider">
            <?php $posts = work_show_reviews() ?>
            <?php foreach ($posts as $post): ?>
            <div class="slide__item">
                <p class="slide__text"><?php echo $post->post_content ?></p>
                <div class="slide__persona">
                    <?php the_post_thumbnail(); ?>
                    <div class="slide__name">
                        <h5><?php echo $post->post_title ?></h5>
                        <p><?php the_field('prof') ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section>
<section class="silent-contact d-none">
    <div class="form-send">
        <div class="form-send__up-block">
            <h5>Контакты</h5>
            <div class="form-send__item">
                <img src="<?php bloginfo('template_directory') ?>/assets/img/marker.png" alt="marker">
                <span>Наш офис:</span>
                <p>г. Москва, ул. Бутлерова, 14/2</p>
            </div>
            <div class="form-send__item">
                <img src="<?php bloginfo('template_directory') ?>/assets/img/clock.png" alt="clock">
                <span>Офисные часы:</span>
                <p>Пн-пт с 10:00 до 19:00</p>
            </div>
            <div class="form-send__item">
                <img src="<?php bloginfo('template_directory') ?>/assets/img/phone.png" alt="phone">
                <a class="phone-link" href="tel:+79771510775"><ins>+7 977 151 07 75</ins></a>
                <a class="phone-link" href="tel:+79771510775">Позвонить нам!</a>
            </div>
        </div>
        <div class="form-send__bottom-block">
        	<?php echo do_shortcode('[contact-form-7 id="76" title="Контактная форма 1"]'); ?>
            <!-- <input type="text" class="name" name="name" placeholder="ИМЯ">
            <input type="text" class="phone" name="phone" placeholder="ТЕЛЕФОН">
            <button class="get_message">Заказать</button> -->
        </div>
        <div class="form-send__politic-block">
            <input type="checkbox" id="box-1">
            <label for="box-1"></label>
            <p>Ознакомлен с <a class="politic__link">политикой конфиденциальности</a></p>
        </div>
    </div>
</section>
<section class="contact" id="conta">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af37a1c902acc9974c6210066f537cf5791118ee69ac4bc7e9665ffaafdc6d661&amp;width=100%25&amp;max-height=700&amp;lang=ru_RU&amp;scroll=true"></script>
    <div class="container">
        <div class="form-send">
            <div class="form-send__up-block">
                <h5>Контакты</h5>
                <div class="form-send__item">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/marker.png" alt="marker">
                    <span>Наш офис:</span>
                    <p>г. Москва, ул. Бутлерова, 14/2</p>
                </div>
                <div class="form-send__item"w>
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/clock.png" alt="clock">
                    <span>Офисные часы:</span>
                    <p>Пн-пт с 10:00 до 19:00</p>
                </div>
                <div class="form-send__item">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/phone.png" alt="phone">
                    <a class="phone-link" href="tel:+79771510775"><ins>+7 977 151 07 75</ins></a>
                    <a class="phone-link" href="tel:+79771510775">Позвонить нам!</a>
                </div>
            </div>
            <div class="form-send__bottom-block">
            	<?php echo do_shortcode('[contact-form-7 id="76" title="Контактная форма 1"]'); ?>
                <!-- <input type="text" class="name" name="name" placeholder="ИМЯ">
                <input type="text" class="phone" name="phone" placeholder="ТЕЛЕФОН">
                <button class="get_message">Заказать</button> -->
            </div>
            <div class="form-send__politic-block">
                <input type="checkbox" id="box-2">
                <label for="box-2"></label>
                <p>Ознакомлен с <a class="politic__link">политикой конфиденциальности</a></p>
            </div>
        </div>
    </div>
</section>
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="fone__wrap">
                    <div class="logo">
                        <a href="#"><!--<img src="#" alt="">-->TAXI TAXI</a>
                    </div>
                    <div class="p__wrap">
                        <p class="p__text"><?php the_field('dar') ?></p>
                    </div>
                    <div class="p__wrap">
                        <p class="p__text"><?php the_field('law') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="ftwo__wrap">
                    <div class="p__wrap">
                        <p class="p__text">
                            <a class="politic__oferta">Договор-оферта</a>
                        </p>
                    </div>
                    <div class="p__wrap">
                        <p class="p__text">
                            <a class="politic__link">Политика конфиденциальности</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="fthree__wrap">
                    <p class="p__mess"><?php the_field('we_mess') ?></p>
                    <div class="social__wrap">
                        <a href="<?php the_field('telegram') ?>" class="messenger">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/telegram.png" alt="telegramm">
                        </a>
                        <a href="<?php the_field('watsapp') ?>" class="messenger">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/whatsapp.png" alt="whatsapp">
                        </a>
                        <a href="<?php the_field('viber') ?>" class="messenger">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/viber.png" alt="viber">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <span id="prod">
            prod. Ivliev &amp; Aleshnikov
        </span>
    </div>
</footer>



<div style="display: none;">
    <div class="box-modal" id="exampleModal_form">
        <div class="box-modal_close arcticmodal-close"></div>
        <section class="window">
            <div class="popup__wrapper">
                <div class="popup__logo">
                    <!--Сюда будет подставлятся url-->
                    <img src="" alt="popup">
                </div>
                <div class="popup__adv">
                    <!--Сюда будет попадать контент-->
                </div>
                <div class="popup__down">
                    <div class="wrapopup__form">
                        <h5 class="pop__h">Контакты</h5>
                        <div class="popup__form">
                            <?php echo do_shortcode('[contact-form-7 id="191" title="form__popup"]'); ?>
                            <!--<input type="text" class="name" name="name" placeholder="ИМЯ">-->
                            <!--<input type="text" class="phone" name="phone" placeholder="ТЕЛЕФОН">-->
                            <!--<button class="btn get_message">Заказать</button>-->
                        </div>
                        <div class="form-send__politic-block">
                            <input type="checkbox" id="box-3">
                            <label for="box-3"></label>
                            <p>Ознакомлен с <a class="politic__link">политикой конфиденциальности</a></p>
                        </div>
                    </div>
                    <div class="accordion d-none">
                        <div class="accordion_item">
                            <h3 class="title_block">Для подключения вам необходимо иметь:</h3>
                            <div class="info">
                                <div class="info_item">
                                    <p class="p__doc">&#8212; Паспорт</p>
                                    <p class="p__doc">&#8212; Регистрация, прописка</p>
                                    <p class="p__doc">&#8212; Водительское удостоверение</p>
                                    <p class="p__doc">&#8212; Номер счета, для перевода денежных средств</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_item">
                            <h3 class="title_block">Если свой автомобиль:</h3>
                            <div class="info">
                                <div class="info_item">
                                    <p class="p__doc">&#8212; СТС</p>
                                    <p class="p__doc">&#8212; Лицензия</p>
                                    <p class="p__doc">&#8212; Страховка</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup__doc">
                        <h3 class="title__pop">Для подключения вам необходимо иметь:</h3>
                        <p class="p__doc">&#8212; Паспорт</p>
                        <p class="p__doc">&#8212; Регистрация, прописка</p>
                        <p class="p__doc">&#8212; Водительское удостоверение</p>
                        <p class="p__doc">&#8212; Номер счета, для перевода денежных средств</p>
                        <h3 class="title__pop">Если свой автомобиль:</h3>
                        <p class="p__doc">&#8212; СТС</p>
                        <p class="p__doc">&#8212; Лицензия</p>
                        <p class="p__doc">&#8212; Страховка</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="box-modal" id="exampleModal_politic">
        <div class="box-modal_close arcticmodal-close"></div>
        <section class="pop__politic">
            <h3><?php the_field('politic_title') ?></h3>
            <p><?php the_field('politic_text') ?></p>
        </section>
    </div>
    <div class="box-modal" id="exampleModal_oferta">
        <div class="box-modal_close arcticmodal-close"></div>
        <section class="pop__oferta">
            <h3><?php the_field('oferta_title') ?></h3>
            <p><?php the_field('oferta_text') ?></p>
        </section>
    </div>
</div>

<div id="scroller">
    <i class="fas fa-chevron-up" style="font-size: 26px; color: #fff"></i>
</div>
<?php wp_footer(); ?>
</body>
</html>
