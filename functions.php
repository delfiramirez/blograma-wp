<?php
include 'templates/custom-admin-function.php';
include 'templates/custom-admin-cssLogin.php';


load_theme_textdomain( 'BlogramaFM', get_template_directory() . '/languages' );

$locale = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
require_once( $locale_file );

function blograma_noticias_taxonomy () {
 $labels =array(
     'name'                      =>_x('Noticias', 'Taxonomy General Name', 'BlogramaFM'),
     'singular_name'             =>_x('Noticia', 'Taxonomy Singular Name', 'BlogramaFM'),
     'menu_name'                 =>__('Taxonomia Noticia', 'BlogramaFM'),
     'all_items'                 =>__('All Items', 'BlogramaFM'),
     'parent_item'               =>__('Parent Item', 'BlogramaFM'),
     'parent_item_colon'         =>__('Parent Item:', 'BlogramaFM'),
     'new_item_name'             =>__('New Item Name', 'BlogramaFM'),
     'add_new_item'              =>__('Add New Item', 'BlogramaFM'),
     'edit_item'                 =>__('Edit Item', 'BlogramaFM'),
     'update_item'               =>__('Update Item', 'BlogramaFM'),
     'separate_items_with_commas'=>__('Separate items with commas', 'BlogramaFM'),
     'search_items'              =>__('Search Items', 'BlogramaFM'),
     'add_or_remove_items'       =>__('Add or remove items', 'BlogramaFM'),
     'choose_from_most_used'     =>__('Choose from the most used items', 'BlogramaFM'),
     'not_found'                 =>__('Not Found', 'BlogramaFM'),
 );
 $rewrite=array(
     'slug'        =>'noticias',
     'with_front'  =>FALSE,
     'hierarchical'=>false,
 );
 $args   =array(
     'labels'           =>$labels,
     'hierarchical'     =>false,
     'public'           =>true,
     'show_ui'          =>true,
     'show_admin_column'=>true,
     'show_in_nav_menus'=>true,
     'show_tagcloud'    =>true,
     'rewrite'          =>$rewrite,
 );
 register_taxonomy('Noticias', array('post', 'page'), $args);
}

add_action('init', 'blograma_noticias_taxonomy', 0);

function blograma_add_noticias () {
 $labels=array(
     'name'              =>_x('Noticias', 'Post Type General Name', 'BlogramaFM'),
     'singular_name'     =>_x('Noticias', 'Post Type Singular Name', 'BlogramaFM'),
     'menu_name'         =>__('Noticias FM', 'BlogramaFM'),
     'parent_item_colon' =>__('Parent Item:', 'BlogramaFM'),
     'add_new_item'      =>__('Add Nueva Noticia', 'BlogramaFM'),
     'add_new'           =>__('Add New ', 'BlogramaFM'),
     'all_items'         =>__('All Items', 'BlogramaFM'),
     'view_item'         =>__('Ver Item', 'BlogramaFM'),
     'edit_item'         =>__('Editar Item', 'BlogramaFM'),
     'update_item'       =>__('Update Item', 'BlogramaFM'),
     'search_items'      =>__('Search Item', 'BlogramaFM'),
     'not_found'         =>__('Not found', 'BlogramaFM'),
     'not_found_in_trash'=>__('Not found in Trash', 'BlogramaFM'),
 );
 $args  =array(
     'label'              =>__('Noticias FM', 'BlogramaFM'),
     'description'        =>__('Noticias', 'BlogramaFM'),
     'labels'             =>$labels,
     'singular_label'     =>__('Noticias'),
     'public'             =>true,
     'show_ui'            =>true,
     'capability_type'    =>'noticias',
     'hierarchical'       =>false,
     'rewrite'            =>array('slug'=>'noticias'),
     'supports'           =>array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'custom-fields', 'revisions', 'page-attributes', 'post-formats',),
     'taxonomies'         =>array('category', 'post_tag'),
     'hierarchical'       =>false,
     'show_in_menu'       =>true,
     'show_in_nav_menus'  =>true,
     'show_in_admin_bar'  =>true,
     'menu_position'      =>6,
     'can_export'         =>true,
     'hide_empty'         =>true,
     'has_archive'        =>true,
     'exclude_from_search'=>false,
     'publicly_queryable' =>true,
     'capability_type'    =>'post',
     'category_name'      =>'noticias'
 );
 register_post_type('noticias', $args);
}

add_action('init', 'blograma_add_noticias');
?><?php

// ----------------------------
// --  CUSTOM POST TYPE LIBROS  --
// ----------------------------
function blograma_libros_taxonomy () {

 $labels =array(
     'name'                      =>_x('Libros', 'Taxonomy General Name', 'BlogramaFM'),
     'singular_name'             =>_x('Libro', 'Taxonomy Singular Name', 'BlogramaFM'),
     'menu_name'                 =>__('Taxonomia Libros', 'BlogramaFM'),
     'all_items'                 =>__('All Items', 'BlogramaFM'),
     'parent_item'               =>__('Parent Item', 'BlogramaFM'),
     'parent_item_colon'         =>__('Parent Item:', 'BlogramaFM'),
     'new_item_name'             =>__('New Item Name', 'BlogramaFM'),
     'add_new_item'              =>__('Add New Item', 'BlogramaFM'),
     'edit_item'                 =>__('Edit Item', 'BlogramaFM'),
     'update_item'               =>__('Update Item', 'BlogramaFM'),
     'separate_items_with_commas'=>__('Separate items with commas', 'BlogramaFM'),
     'search_items'              =>__('Search Items', 'BlogramaFM'),
     'add_or_remove_items'       =>__('Add or remove items', 'BlogramaFM'),
     'choose_from_most_used'     =>__('Elegir los items más utilizados', 'BlogramaFM'),
     'not_found'                 =>__('Not Found', 'BlogramaFM'),
 );
 $rewrite=array(
     'slug'        =>'libros',
     'with_front'  =>FALSE,
     'hierarchical'=>false,
 );
 $args   =array(
     'labels'           =>$labels,
     'hierarchical'     =>false,
     'public'           =>true,
     'show_ui'          =>true,
     'show_admin_column'=>true,
     'show_in_nav_menus'=>true,
     'show_tagcloud'    =>true,
     'rewrite'          =>$rewrite,
 );
 register_taxonomy('Libros', array('post', 'page'), $args);
}

add_action('init', 'blograma_libros_taxonomy');

function blograma_add_libros () {
 $labels=array(
     'name'              =>_x('Libros', 'Post Type General Name', 'BlogramaFM'),
     'singular_name'     =>_x('Libro', 'Post Type Singular Name', 'BlogramaFM'),
     'menu_name'         =>__('Libros FM', 'BlogramaFM'),
     'parent_item_colon' =>__('Parent Item:', 'BlogramaFM'),
     'add_new_item'      =>__('Add Nuevo Libro', 'BlogramaFM'),
     'add_new'           =>__('Add New ', 'BlogramaFM'),
     'all_items'         =>__('All Items', 'BlogramaFM'),
     'view_item'         =>__('Ver Item', 'BlogramaFM'),
     'edit_item'         =>__('Editar Item', 'BlogramaFM'),
     'update_item'       =>__('Update Item', 'BlogramaFM'),
     'search_items'      =>__('Search Item', 'BlogramaFM'),
     'not_found'         =>__('Not found', 'BlogramaFM'),
     'not_found_in_trash'=>__('Not found in Trash', 'BlogramaFM'),
 );
 $args  =array(
     'label'              =>__('Libros', 'BlogramaFM'),
     'description'        =>__('Libros', 'BlogramaFM'),
     'labels'             =>$labels,
     'singular_label'     =>__('Libros'),
     'public'             =>true,
     'show_ui'            =>true,
     'capability_type'    =>'libros',
     'hierarchical'       =>false,
     'rewrite'            =>'libros',
     'supports'           =>array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'custom-fields', 'revisions', 'page-attributes', 'post-formats',),
     'taxonomies'         =>array('category', 'post_tag'),
     'hierarchical'       =>false,
     'show_in_menu'       =>true,
     'show_in_nav_menus'  =>true,
     'show_in_admin_bar'  =>true,
     'menu_position'      =>5,
     'can_export'         =>true,
     'hide_empty'         =>true,
     'has_archive'        =>true,
     'exclude_from_search'=>false,
     'publicly_queryable' =>true,
     'capability_type'    =>'post',
     'category_name'      =>'libros',
 );
 register_post_type('libros', $args);
}

add_action('init', 'blograma_add_libros');
?><?php

function blograma_post_thumbnail_remove_class ($output) {
 $output=preg_replace('/class=".*?"/', '', $output);
 return $output;
}

add_filter('post_thumbnail_html', 'blograma_post_thumbnail_remove_class');
?><?php

function string_limit_words ($string, $word_limit) {
 $words=explode(' ', $string, ($word_limit+1));
 if (count($words)>$word_limit){
  array_pop($words);
  echo implode(' ', $words)."...";
 }
 else{
  echo implode(' ', $words);
 }
}

?><?php

function remove_thumbnail_dimensions ($html) {
 $html=preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
 return $html;
}

add_filter('wp_get_attachment_link', 'remove_thumbnail_dimensions', 10);
?><?php

if (!is_admin())
 add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue () {
 wp_deregister_script('jquery');
 $googleScript='http'.($_SERVER['SERVER_PORT']==443?"s":"" ).'://code.jquery.com/jquery-1.11.1.min.js';
 wp_register_script('jquery', $googleScript, false, '1.11.1', true);
 wp_enqueue_script('jquery');
}

?><?php

function blograma_login_errors () {
 return '<strong>Login erroneo</strong>: revisa tu usuari@ o password.';
}

add_filter('login_errors', 'blograma_login_errors');

function site_login_logo_url () {
 return get_bloginfo('url');
}

add_filter('login_headerurl', 'site_login_logo_url');

function site_login_logo_url_title () {
 return 'Mouse Hover Info - BlogramaFM;
}

add_filter('login_headertitle', 'site_login_logo_url_title');
?><?php

function strip_empty_classes ($menu) {
 $menu=preg_replace('/ class=""| class="sub-menu"/', '', $menu);
 return $menu;
}

add_filter('wp_nav_menu', 'strip_empty_classes');
?><?php

function cleanname ($v) {
 $v=preg_replace('/[^a-zA-Z0-9s]/', '', $v);
 $v=str_replace(' ', '-', $v);
 $v=strtolower($v);
 return $v;
}

function nav_class_filter ($var) {
 return is_array($var)?array_intersect($var, array('current-menu-item', 'icon')):'';
}

add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

function nav_id_filter ($id, $item) {
 return 'nav-'.cleanname($item->title);
}

add_filter('nav_menu_item_id', 'nav_id_filter', 10, 2);
?><?php

add_filter('contextual_help', 'blograma_remove_help_tabs', 999, 3);

function blograma_remove_help_tabs ($old_help, $screen_id, $screen) {
 $screen->remove_help_tabs();
 return $old_help;
}

function clean_wp_header () {
 remove_action('wp_head', 'wp_generator');
 remove_action('wp_head', 'rsd_link');
 remove_action('wp_head', 'feed_links', 2);
 remove_action('wp_head', 'index_rel_link');
 remove_action('wp_head', 'wlwmanifest_link');
 remove_action('wp_head', 'feed_links_extra', 3);
 remove_action('wp_head', 'start_post_rel_link', 10, 0);
 remove_action('wp_head', 'parent_post_rel_link', 10, 0);
 remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
 remove_action('wp_head', 'locale_stylesheet');
 remove_action('wp_head', 'noindex');
 remove_action('wp_head', 'wp_print_styles');
 remove_action('wp_head', 'wp_print_head_scripts');
 remove_action('wp_head', 'wp_generator');
 remove_action('wp_head', 'rel_canonical');
 remove_action('wp_head', 'rsd_link');
 remove_action('wp_head', 'feed_links', 2);
 remove_action('wp_head', 'feed_links_extra', 3);
 remove_action('wp_head', 'wlwmanifest_link');
 remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
 remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}

add_action('init', 'clean_wp_header');
?><?php
//remove class from the_post_thumbnail
function the_post_thumbnail_remove_class($output) {
	$output = preg_replace('/class=".*?"/', '', $output);
	return $output;
}
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');
?>