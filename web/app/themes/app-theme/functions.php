<?php
/**
 * Bootstrap theme.
 *
 * The purpose of this file is to bootstrap your theme by loading all dependencies and helpers.
 *
 * YOU SHOULD NORMALLY NOT NEED TO ADD ANYTHING HERE - any custom functionality unrelated
 * to bootstrapping the theme should go into a service provider or a separate helper file
 * (refer to the directory structure in README.md).
 *
 * @package MyApp
 */

if ( ! defined('ABSPATH')) {
	exit;
}

/**
 * Paths constants
 */
define('APP_ROOT_DIR', __DIR__ . DIRECTORY_SEPARATOR);
define('APP_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
define(
	'VIEWS_DIR',
	__DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR
);
define('BLOCKS_DIR', VIEWS_DIR . 'blocks' . DIRECTORY_SEPARATOR);

define('HELPERS_DIR', APP_DIR . 'helpers' . DIRECTORY_SEPARATOR);
define('SETUP_DIR', APP_DIR . 'setup' . DIRECTORY_SEPARATOR);


/**
 * Define a content width for the theme.
 *
 * @link https://developer.wordpress.com/themes/content-width/
 */
if ( ! isset($content_width)) {
	$content_width = 1080;
}

// Make sure we can load a compatible version of WP Emerge.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR
             . 'version.php';

$name = trim(
	get_file_data(
		__DIR__ . DIRECTORY_SEPARATOR . 'style.css',
		['Theme Name']
	)[0]
);
$load = my_app_should_load_wpemerge($name, '0.16.0', '2.0.0');

if ( ! $load) {
	// An incompatible WP Emerge version is already loaded - stop further execution.
	// my_app_should_load_wpemerge() will automatically add an admin notice.
	return;
}

// Load composer dependencies.
if (file_exists(
	__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR
	. 'autoload.php'
)
) {
	require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR
	             . 'autoload.php';
}

my_app_declare_loaded_wpemerge($name, 'theme', __FILE__);

// Load helpers.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'src'
             . DIRECTORY_SEPARATOR . 'MyApp.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR
             . 'helpers.php';

// Bootstrap theme after all dependencies and helpers are loaded.
\MyApp::make()->bootstrap(
	require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR
	        . 'config.php'
);

// Register hooks.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR
             . 'hooks.php';

register_nav_menus([
	'main_header' => 'Меню хедер',
	'main_footer' => 'Меню футер',
]);

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'   => 'Theme General Settings',
		'menu_title'  => 'Глобальные настройки',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));
}

add_filter('show_admin_bar', '__return_false');

add_action('init', 'create_new_custom_post_type_cars');
function create_new_custom_post_type_cars(){
	register_post_type('products', array(
		'labels'             => array(
			'name'               => 'Продукты', // Основное название типа записи
			'singular_name'      => 'Продукт', // отдельное название записи типа Book
			'add_new'            => 'Добавить продукт',
			'add_new_item'       => 'Добавить продукт',
			'edit_item'          => 'Обновить продукт',
			'new_item'           => 'Новый продукт',
			'view_item'          => 'Посмотреть продукт',
			'search_items'       => 'Найти продукт',
			'not_found'          => 'Пролукт не найден',
			'not_found_in_trash' => 'Продукт в корзине не найден',
			'parent_item_colon'  => '',
			'menu_name'          => 'Продукты'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'       => true,
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}

add_action( 'after_setup_theme', 'gutenberg_setup_theme' );
function gutenberg_setup_theme(){

	// подключение кастомных стилей для гутенберга
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
}
