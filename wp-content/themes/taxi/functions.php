<?php
	add_action('wp_enqueue_scripts', 'media'); // подключение скриптов
	add_action('after_setup_theme','test_after_setup');
	add_theme_support( 'custom-logo', [
	  'height'      => 190,
	  'width'       => 190,
	  'flex-width'  => false,
	  'flex-height' => false,
	  'header-text' => '',
	] );
	add_action( 'init', 'work_post_types');
	add_action( 'init', 'card_post_types');
	


	function media() {
		wp_enqueue_style ('style-main', get_stylesheet_uri(), array('bootstrap'));//основной файл стилей
	    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, null );//подключение bootstrap
	    if ( !is_admin() ) {
	    wp_enqueue_script('jquery');
	    wp_enqueue_script('slick', get_template_directory_uri() . "/assets/js/slick.js",array('jquery',) );
	    wp_enqueue_script('arctic-modal', get_template_directory_uri() . "/assets/js/jquery.arcticmodal-0.3.min.js",array('jquery') );
	    wp_enqueue_script('mainjs', get_template_directory_uri() . "/assets/js/main.js",array('jquery','arctic-modal','slick') );
		}
	}

	function test_after_setup () {
	    register_nav_menus([
	    'top' => 'header-menu'
	 ]); 
	    add_theme_support( 'post-thumbnails' );
	}

	//Отзывы
	function work_post_types(){
	    register_post_type('work', [
	        'labels' => [
	            'name'               => 'Отзывы', // основное название для типа записи
	            'singular_name'      => 'Отзыв', // название для одной записи этого типа
	            'add_new'            => 'Добавить отзыв', // для добавления новой записи
	            'add_new_item'       => 'Главный отзыв', // заголовка у вновь создаваемой записи в админ-панели.
	            'edit_item'          => 'Редактирование ', // для редактирования типа записи
	            'new_item'           => 'Новый отзыв', // текст новой записи
	            'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
	            'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
	            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
	            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	            'parent_item_colon'  => '', // для родителей (у древовидных типов)
	            'menu_name'          => 'Меню отзывов', // название меню
	        ],
	        'public'              => true,
	        'menu_position'       => 25,
	        'menu_icon'           => 'dashicons-redo',
	        'hierarchical'        => false,
	        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	    ]);
	}   

	function work_show_reviews() {
	    $args = [
	        'orderby'     => 'date',
	        'order'       => 'DESC',
	        'post_type'   => 'work',
	        'posts_per_page' => -1
	    ];

	    $posts = get_posts($args);
	    return $posts;
	}
	//Отзывы

	//Для водителей
	function card_post_types(){
	    register_post_type('card', [
	        'labels' => [
	            'name'               => 'Карточки', // основное название для типа записи
	            'singular_name'      => 'Карточка', // название для одной записи этого типа
	            'add_new'            => 'Добавить новую карточку', // для добавления новой записи
	            'add_new_item'       => 'Добавление карточек', // заголовка у вновь создаваемой записи в админ-панели.
	            'edit_item'          => 'Редактирование карточки', // для редактирования типа записи
	            'new_item'           => 'Новая карточка', // текст новой записи
	            'view_item'          => 'Смотреть карточку', // для просмотра записи этого типа.
	            'search_items'       => 'Искать карточку', // для поиска по этим типам записи
	            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
	            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	            'parent_item_colon'  => '', // для родителей (у древовидных типов)
	            'menu_name'          => 'Карточки', // название меню
	        ],
	        'public'              => true,
	        'menu_position'       => 25,
	        'menu_icon'           => 'dashicons-thumbs-up',
	        'hierarchical'        => false,
	        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	    ]);
	}

	function card_show_reviews() {
	    $args = [
	        'orderby'     => 'date',
	        'order'       => 'DESC',
	        'post_type'   => 'card'
	    ];

	    $posts = get_posts($args);
	    return $posts;
	}
	//Для водителей