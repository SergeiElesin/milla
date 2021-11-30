<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');


//КОД, КОТОРЫЙ ОТСЫЛАЕТ ПИСЬМО
//add_action('wp_ajax_send_mail', 'send_mail');
//add_action('wp_ajax_nopriv_send_mail', 'send_mail');
//
//function send_mail() {
//	$name = $_POST['name'];
//	$email = $_POST['email'];
//	$url = $_POST['url'];
//	$ch1 = $_POST['ch1'];
//	$ch2 = $_POST['ch2'];
//	$ch3 = $_POST['ch3'];
//	$letter = $_POST['letter'];
//	$promocode = $_POST['promocode'];
//	$to = get_option('admin_email');
//	//$to = 'mwwm99@gmail.com';
//
//// удалим фильтры, которые могут изменять заголовок $headers
//remove_all_filters( 'wp_mail_from' );
//remove_all_filters( 'wp_mail_from_name' );
//
//	$headers = array(
//		'From: ML <mwwm7777@gmail.com>',
//		'content-type: text/html',
//		//'Cc: John Q Codex <jqc@wordpress.org>',
//		//'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
//	);
//
//	wp_mail( $to, $name, $letter, $headers );
//	wp_die();
//}
//КОНЕЦ КОДА, ОТСЫЛАЮЩЕГО ПИСЬМО

//добавляем кастомный вид записи
add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('project', array(
		'labels'             => array(
			'name'               => 'Проекты', // Основное название типа записи
			'singular_name'      => 'Проект', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый проект',
			'edit_item'          => 'Редактировать проект',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Посмотреть проект',
			'search_items'       => 'Найти проект',
			'not_found'          =>  'Проектов не найдено',
			'not_found_in_trash' => 'В корзине проектов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Проекты'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'       => 'dashicons-images-alt',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'taxonomies'         =>array('skills'),
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

//Регистрация таксономии
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('skills', array('project'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Навыки',
			'singular_name'     => 'Навык',
			'search_items'      => 'Найти навык',
			'all_items'         => 'Все навыки',
			'view_item '        => 'Смотреть навыки',
			'parent_item'       => 'Родительский навык',
			'parent_item_colon' => 'Родительский Навык:',
			'edit_item'         => 'Изменить навык',
			'update_item'       => 'Обновить навык',
			'add_new_item'      => 'Добавить новый навык',
			'new_item_name'     => 'Новое имя навыка',
			'menu_name'         => 'Навыки',
		),
		'description'           => 'Навыки, которые использовались при работе над проектом', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
	) );
}


//фильтр не работает, непонятно почему
add_filter( 'document_title_separator', 'my_sep');
function my_sep( $sep ){
	$sep = ' | ' ;
	return $sep  ;
}


function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar',
		'description'   => 'Сайдбар на странице блога',
		'class'         => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>",
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => "</h3>"
	) );
}

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// выводим пагинацию
the_posts_pagination( array(
	'end_size' => 2,
) );

function theme_register_nav_menu() {
	register_nav_menu('top', 'меню в шапке');
	register_nav_menu('bottom', 'меню в подвале');
	add_theme_support( 'title-tag');
	add_theme_support( 'post-formats', array( 'aside', 'video' ) );
	add_theme_support( 'post-thumbnails', array ('post', 'project'));
	add_image_size('project-thumb', 200, 200, true);
}

function theme_styles() {
wp_enqueue_style('styles', get_stylesheet_uri());
//wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css');
}

function theme_scripts() {
wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', 'true');
}

//Удаление автоматических тегов в формах
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/*
 * Milla Widgets
 */
require get_template_directory() . '/inc/milla-widgets.php';

//Изменении стилизации количества постов в виджете категорий
function milla_categories ($html, $args) {
	$html = str_replace('(', '<span class="cat-count">', $html);
	$html = str_replace(')', '</span>', $html);

	return $html;
}

add_filter('wp_list_categories', 'milla_categories', 11, 2);