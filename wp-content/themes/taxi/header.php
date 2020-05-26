<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    <meta name="discription" content="Для Seo">
    <meta name="keywords" content="Для Seo">
    <!-- Инконка-вкладки(Favicon) -->
    <link rel="icon" href="favicon.ico" type="#">
    <link rel="shortcut icon" href="favicon.ico" type="#">
    <!-- OG-метки(Для SEO продвижения) -->
    <meta property="og:title" content="Для Seo">
    <meta property="og:description" content="Для Seo">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="Для Seo">

    <!--Шрифты(Fonts)-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!--Файлы(Files)-->

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body style="margin-right: 0px !important;" <?php body_class() ?>>
<header class="header" id="header" name="head">
    <div class="container">
        <div class="head">
            <div class="logo">
                <a href="#">
                    <!--<img src="#" alt="">-->
                    <?php echo get_custom_logo( $blog_id ); ?>
                </a>
            </div>
            <?php wp_nav_menu( array(
                    'theme_location'  => 'top',
                    'menu'            => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'navigation',
                    'menu_class'      => 'menu d-md-flex',
                    'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
                ) );?>
        </div>
        <div class="burger-menu d-none">
            <a href="#">
                <!--<img src="#" alt="">-->
                TAXI TAXI
            </a>
            <div class="menu-icon" data-behaviour="toggle-menu-icon">
                <span class="menu-icon__bar"></span>
            </div>

             <?php wp_nav_menu( array(
                        'theme_location'  => 'top',
                        'menu'            => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'nav',
                        'menu_class'      => 'nav__list d-md-flex',
                        'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
                ) );?>

<!--        <nav class="nav" data-element="toggle-nav">  
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href=".card" class="nav_link go_to">Для водителей</a>
                    </li>
                    <li class="nav__item">
                        <a href="#funds" class="nav_link go_to">Информация</a>
                    </li>
                    <li class="nav__item">
                        <a href="#reviews" class="nav_link go_to">Отзывы</a>
                    </li>
                    <li class="nav__item">
                        <a href=".contact" class="nav_link go_to">Контакты</a>
                    </li>
                </ul>
            </nav> -->
        </div>
        <h1 class="title__head">
            <?php the_field('title_header'); ?>
            <p class="title__text">
                <?php the_field('content_header'); ?>
            </p>
        </h1>
        <a href=".card" class="connect go_to">Подробнее</a>
    </div>
    <div class="car"></div>
</header>